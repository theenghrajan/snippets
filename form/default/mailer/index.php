<?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:06
 */

require_once 'functions.php';

// Check for Primary required value like [!empty($_POST['email'])] or allow all by [!empty($_POST)]
if (!empty($_POST)) {
  $user_data = [];
  $user_files = [];
  $user_email = empty($_POST['email']) ? '' : $_POST['email'];
  $form_name = empty($_POST['form-name']) ? 'Contact Form' : $_POST['form-name'];
  $first_name = empty($_POST['first-name']) ? '' : $_POST['first-name'];
  $last_name = empty($_POST['last-name']) ? '' : $_POST['last-name'];
  $full_name = empty($_POST['full-name']) ? $first_name . ' ' . $last_name : $_POST['full-name'];

  // Automatic Form Field Data Creation
  foreach ($_POST as $key => $data) {
    if (!isIgnoredKey($key))
      $user_data[ucfirst(preg_replace('/[^A-Za-z0-9 ]/', ' ', $key))] = is_array($data) ? implode(', ', $data) : $data;
  }
  $user_files = fileAttachment();

  // Manual Form Data Creation
  /*
    $user_zip = empty($_POST['zip-code']) ? '' : $_POST['zip-code'];
    $user_phone = empty($_POST['phone-number']) ? '' : $_POST['phone-number'];
    $user_message = empty($_POST['message']) ? '' : $_POST['message'];
    $user_question = isset($_POST['question']) ? $_POST['question'] : '';

    $user_data['Email'] = $user_email;
    if (!empty(trim($full_name)))
        $user_data['Full Name'] = $full_name;
    if (!empty(trim($user_phone)))
        $user_data['Phone'] = $user_phone;
    if (!empty(trim($user_zip)))
        $user_data['Zip Code'] = $user_zip;
    if (!empty(trim($user_message)))
        $user_data['Message'] = $user_message;
    if (!empty(trim($user_question)))
        $user_data['Where did you hear about us?'] = $user_question;
    */

  if (CONFIG['test_mode']) {
    header('Content-Type: application/json');
    echo json_encode(["TEST MODE" => "ON", "FORMATTED_FORM_DATA" => $user_data]);
  } else {
    /**
     * 
     * Validate google recaptcha response
     * 
     */
    $recaptcha_secret = "6LdFnncqAAAAAFticEEOB9YEm66JdRQpJ5KUJl6I";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
    $response = json_decode($response, true);
    if ($response["success"] === true) {
      $phone = empty($_POST['phone']) ? '' : $_POST['phone'];
      $msg = empty($_POST['message']) ? '' : $_POST['message'];

      $utm_source = empty($_POST['utm-source']) ? '' : $_POST['utm-source'];
      $utm_medium = empty($_POST['utm-medium']) ? '' : $_POST['utm-medium'];
      $utm_campaign = empty($_POST['utm-campaign']) ? '' : $_POST['utm-campaign'];
      $gclid = empty($_POST['gclid']) ? '' : $_POST['gclid'];
      $msclkid = empty($_POST['msclkid']) ? '' : $_POST['msclkid'];

      $msgAdmin = "<h3>New users submission from LP form. User Details are listed below.</h3>";

      if ($_POST['formName'] == 'Header') {
        $msgAdmin .= "<p><strong>Full Name:</strong> " . $full_name . "</p>";
        $msgAdmin .= "<p><strong>Phone:</strong> " . $phone . "</p>";
        $msgAdmin .= "<p><strong>Email:</strong> " . $user_email . "</p>";
        $msgAdmin .= "<p><strong>Address:</strong> " . $msg . "</p>";
      } else {
        $address = empty($_POST['address']) ? '' : $_POST['address'];
        $subject = empty($_POST['subject']) ? '' : $_POST['subject'];

        $msgAdmin .= "<p><strong>Full Name:</strong> " . $full_name . "</p>";
        $msgAdmin .= "<p><strong>Phone:</strong> " . $phone . "</p>";
        $msgAdmin .= "<p><strong>Email:</strong> " . $user_email . "</p>";
        $msgAdmin .= "<p><strong>Address:</strong> " . $address . "</p>";
        $msgAdmin .= "<p><strong>Subject:</strong> " . $subject . "</p>";
        $msgAdmin .= "<p><strong>Message:</strong> " . $msg . "</p>";
        $msgAdmin .= "<p><strong>UTM SOURCE:</strong> " . $utm_source . "</p>";
        $msgAdmin .= "<p><strong>UTM Medium:</strong> " . $utm_medium . "</p>";
        $msgAdmin .= "<p><strong>UTM Campaign:</strong> " . $utm_campaign . "</p>";
        $msgAdmin .= "<p><strong>GCLID:</strong> " . $gclid . "</p>";
        $msgAdmin .= "<p><strong>MSCLKID:</strong> " . $msclkid . "</p>";
      }

      $userMsg = "<p>Hello " . $full_name . ",</p>";
      $userMsg .= "<p>Thank you for your message, " . CONFIG['site_title'] . ". We will be in touch shortly. If you would like to speak with someone sooner, <br> please call " . CONFIG['phone'] . " for immediate service.</p>";

      //sendSMTPMail(CONFIG['site_title'] . ' ' . $form_name, renderAdminEmail($user_data), [], $user_files);
      sendSMTPMail(CONFIG['site_title'] . ' ' . $form_name, $msgAdmin, [], $user_files);
      if ($user_email)
        //sendSMTPMail('Message from ' . CONFIG['site_title'], renderAutoResponder($full_name), [$user_email => $full_name]);
        sendSMTPMail('Message from ' . CONFIG['site_title'], $userMsg, [$user_email => $full_name]);
    } else {
      echo "Something went wrong. Please try again later.";
    }
  }
  // Delete uploaded files if any after the mail is sent.
  unlinkFiles($user_files);
} else {
  echo 'Mailer for ' . CONFIG['site_title'];
}
