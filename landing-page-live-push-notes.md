## SPAM Protection Notes

**Requirements:**
- Access to cPanel or hosting environment
- Google reCAPTCHA keys

**Key Protection Methods:**
- Honeypot field to trap bots
- Session or token-based validation (CSRF protection)
- Restrict allowed referrers to trusted domains
- Google reCAPTCHA with server-side validation

## 1. Security Enhancements for Forms

- **Add the following to your forms:**
  - Honeypot field (to trap bots)
  - CSRF tokens (to prevent cross-site request forgery)
  - Referrer checks (to validate request origin)
  - Google ReCAPTCHA (to block automated submissions)

---

> **Step 1:**  
> To implement CSRF protection, add PHP session code at the very top of your main HTML file (e.g., `index.php` or `header.php`). This code starts the session and generates CSRF tokens for your forms:
>
> ```php
> <?php
> // Start session: Added by FED(RT) on 06-24-25
> session_start();
>
> // Generate CSRF token and store in session variable
> if (empty($_SESSION['csrf_token_form1'])) {
>   $_SESSION['csrf_token_form1'] = bin2hex(random_bytes(32));
> }
>
> // Repeat for additional forms as needed
> if (empty($_SESSION['csrf_token_form2'])) {
>   $_SESSION['csrf_token_form2'] = bin2hex(random_bytes(32));
> }
> ?>
> ```

> **Step 2:**  
> Add hidden fields to all forms on the landing page for the honeypot and CSRF token:
>
> ```html
> <!-- Google reCAPTCHA widget -->
> <div class="form-group">
>   <div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
>   <div class="messages"></div>
> </div>
> <div class="form-group">
>   <!-- For local testing, you can set a value here to bypass validation -->
>   <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1"/>
>   <div class="messages"></div>
> </div>
>
> <!-- Honeypot field for spam detection -->
> <div class="form-group" style="display:none;">
>   <input type="text" name="honeypot" style="display:none;" value="" />
>   <div class="messages"></div>
> </div>
>
> <!-- CSRF token field using session -->
> <div class="form-group" style="display:none;">
>   <input type="hidden" name="csrf_token_form1" value="<?php echo $_SESSION['csrf_token_form1']; ?>"/>
>   <div class="messages"></div>
> </div>
> ```

## 2. Google reCAPTCHA Validation and Keys (`builder.js`)

Add this code and keys to variables to validate Google reCAPTCHA responses in your form:

```js
var $recaptchaV2SiteKey = '[site_key]';

form_fields["form-id-0"] = {
  "g-recaptcha-response": {
    "presence": {
      "message": "must be validated",
    },
  },
  "google-recaptcha": {
    "presence": {
      "message": "must be validated",
    },
  },
};
```

## 3. Form Submission Handler (`builder.js`)

Add this function to handle form submissions, show a loader, and push data to the data layer:

```js
function showSuccess(form) {
  var payload = new FormData(form);
  disableForm(form);
  showLoader(form);

  // Prepare data for dataLayer
  var formId = form.id;
  var formEntries = {};
  payload.forEach(function (value, key) {
    formEntries[key] = value;
  });

  fetch(sendMailURL, {
    method: "POST",
    body: payload,
  })
    .then(function (response) {
      return response.text();
    })
    .then(function (data) {
      form.innerHTML = data;

      // Push to dataLayer after thank you message
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        event: "LPFormSubmission",
        formID: formId,
        formEntries: formEntries,
      });
    })
    .catch(function (error) {
      alert("Some error occurred, please try again.");
      console.error("Error", error);
    });
}
var currentPage = [];
var currentForm = null;
```

---

## 4. Prevent Indexing in Custom HTML

To prevent search engines from indexing a page, add these `<meta>` tags to the `<head>` section:

```html
<meta name="robots" content="noindex, nofollow" />
<meta name="googlebot" content="noindex" />
```

---

## 5. Google reCAPTCHA v2 Integration Script

- Uncomment or add the following script tag in `footer.php` if Google reCAPTCHA v2 is enabled:
- If you are not using reCAPTCHA v2, remove/comment this entire block.

  ```html
  <!-- Add this script if reCAPTCHA v2 is enabled -->
  <script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>
  ```

---

## 6. Server-side Validation Process (`mailer/index.php`)

Add the following validation code just above the `require_once 'functions.php';` line in your `mailer/index.php` file:

```php
// Start session: Added by FED(RT) on 06-24-25
session_start();

$submittedForm = '';

// 1. CSRF Token Validation
if (isset($_POST['csrf_token_form1'])) {
  // Check if CSRF token exists in the session
  if (!isset($_SESSION['csrf_token_form1'])) {
    die('CSRF token missing.');
  }
  // Validate CSRF token
  if (!isset($_POST['csrf_token_form1']) || !hash_equals($_SESSION['csrf_token_form1'], $_POST['csrf_token_form1'])) {
    die('Invalid CSRF token.');
  }
  // Unset the token after validation to prevent reuse
  unset($_SESSION['csrf_token_form1']);
  $submittedForm = 'top';
}
if (isset($_POST['csrf_token_form2'])) {
  if (!isset($_SESSION['csrf_token_form2'])) {
    die('CSRF token missing.');
  }
  if (!isset($_POST['csrf_token_form2']) || !hash_equals($_SESSION['csrf_token_form2'], $_POST['csrf_token_form2'])) {
    die('Invalid CSRF token.');
  }
  unset($_SESSION['csrf_token_form2']);
  $submittedForm = 'bottom';
}

// 2. Honeypot Field Validation
if (!empty($_POST['honeypot'])) {
  die('Honeypot: Spam detected.');
}

// 3. Referrer Check
$allowedReferrer = 'http://domain_name.com/lp'; // Replace with your landing page URL (no trailing slash)
if (empty($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== parse_url($allowedReferrer, PHP_URL_HOST)) {
  die('Invalid referrer.');
}

// 4. Google reCAPTCHA Validation
$secretKey = '[secret_keys]'; // Replace with your Google reCAPTCHA secret key
$responseKey = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$remoteIp");
$response = json_decode($response);
if (!$response->success) {
  die('Captcha: Spam detected.');
}
```

**Summary of Validation Steps:**

1. **CSRF Token:** Checks and validates CSRF tokens for each form, then unsets them to prevent reuse.
2. **Honeypot:** Blocks submissions if the hidden honeypot field is filled (likely a bot).
3. **Referrer:** Ensures the request comes from the allowed landing page.
4. **Google reCAPTCHA:** Verifies the reCAPTCHA response with Google to block automated submissions.

---

## 7. Exclude Sensitive Fields from Admin Email

When automatically creating the form field data for the admin email, you should exclude sensitive or non-user fields such as the honeypot, CSRF tokens, and Google reCAPTCHA values. Replace your existing code with the following:

```php
// Automatic Form Field Data Creation (excluding honeypot, CSRF, and reCAPTCHA fields)
foreach ($_POST as $key => $data) {
  // List of keys to ignore
  $ignoredKeys = [
    'csrf_token_form1',
    'csrf_token_form2',
    'honeypot',
    'g-recaptcha-response',
    'google-recaptcha'
  ];
  if (!isIgnoredKey($key) && !in_array($key, $ignoredKeys)) {
    $user_data[ucfirst(preg_replace('/[^A-Za-z0-9 ]/', ' ', $key))] = is_array($data) ? implode(', ', $data) : $data;
  }
}
$user_files = fileAttachment();
```

Alternative codes

```php
// Automatic Form Field Data Creation
  foreach ($_POST as $key => $data) {
    if (!isIgnoredKey($key))
      if ($key != 'csrf_token_form1')
        if ($key != 'csrf_token_form2')
          if ($key != 'honeypot')
            if ($key != 'g-recaptcha-response')
              if ($key != 'google-recaptcha')
                $user_data[ucfirst(preg_replace('/[^A-Za-z0-9 ]/', ' ', $key))] = is_array($data) ? implode(', ', $data) : $data;
  }
  $user_files = fileAttachment();
```

**Note:**

- This approach uses an `$ignoredKeys` array for clarity and maintainability.
- Only user-submitted fields relevant to the admin are included in the email.
- This helps prevent leaking sensitive or irrelevant data in admin notifications.

---


## Form Testing Checklist

Follow these steps to test form security and spam protection features:

### 1. Update Email Configuration
- In `config/config.php`, comment out the client's receiver email address.
- Add or uncomment `frontend@smartsites.com` as the receiver email for testing.
- Check for any CC emails and comment them out during testing.

### 2. Verify Hidden Fields
- Open the landing page (LP).
- Inspect the form to ensure both the honeypot and CSRF token hidden fields are present.
  - The honeypot field value should be empty.
  - The CSRF token field should contain a 32-character hash.

### 3. Test Validation and Spam Protection

#### Honeypot Field
- Inspect the honeypot field in the form.
- Edit its `value` attribute and enter any text (e.g., `asdasd`).
- Submit the form.
- Expected result: "Honeypot: Spam detected." message appears.
- Take a screenshot for documentation.

#### CSRF Token
- Inspect the CSRF token field.
- Modify its `value` by appending extra characters.
- Submit the form.
- Expected result: "Invalid CSRF token." message appears.
- Take a screenshot.

#### Referrer Check
- In `mailer/index.php`, change the `$allowedReferrer` URL to a different value.
- Open the LP and submit the form.
- Expected result: "Invalid referrer." message appears.
- Take a screenshot.

#### Google reCAPTCHA
- Inspect the Google reCAPTCHA field (usually a `<textarea>`).
- Remove the `display: none` style if present to make it visible.
- After validating the captcha, manually change the value in the textarea.
- Submit the form.
- Expected result: "Captcha: Spam detected." message appears.
- Take a screenshot.

### 4. Restore Email Configuration
- After testing, revert `config/config.php` to use the client's receiver email and restore any CC addresses as needed.


