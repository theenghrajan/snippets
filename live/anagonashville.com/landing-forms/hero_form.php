<form method="POST" action="../mailer/index.php" id="form-id-0" class="validate form">
  <div class="form-header border-b-2 border-white/20 text-center pb-4 mb-8">
    <h2 class="mb-0 font-bold lg:text-[32px] lg:leading-[1.25]">Contact Us Today For Your Free Quote</h2>
  </div>

  <div class="form-section-0">
    <div class="form-group">
      <input class="form-control" placeholder="First Name" name="first-name" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Last Name" name="last-name" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Phone" name="phone" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Email" name="email" type="email" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <select class="form-control" name="choose-your-service" id="On5YQ">
        <option value="">Choose your Service</option>
        <option value="One-Time Service">One-Time Service</option>
        <option value="Weekly Recurring Service">Weekly Recurring Service</option>
      </select>
      <!-- Add more options if needed -->
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Company Name" name="company-name" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
      <div class="messages"></div>
    </div>
    <!-- Google reCAPTCHA widget -->
    <div class="form-group">
      <div class="g-recaptcha-v2-visible" id="g-recaptcha-0"></div>
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <!-- For local testing, you can set a value here to bypass validation -->
      <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-0">
      <div class="messages"></div>
    </div>

    <!-- Honeypot field for spam detection -->
    <div class="form-group" style="display:none;">
      <input type="text" name="honeypot" style="display:none;" value="">
      <div class="messages"></div>
    </div>

    <!-- CSRF token field using session -->
    <!-- <div class="form-group" style="display:none;">
      <input type="hidden" name="csrf_token_form1" value="<?php echo $_SESSION['csrf_token_form1']; ?>">
      <div class="messages"></div>
    </div> -->
  </div>
  <div class="form-footer">
    <button type="submit" class="submitButton btn btn-form">
      <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      Submit
    </button>
  </div>
</form>