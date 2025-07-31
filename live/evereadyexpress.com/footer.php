</main>

<footer class="site-footer bg-secondary">
  <div class="pt-12 sm:pt-16 lg:pt-20 xl:pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap justify-between gap-y-6 -mx-4">
        <div class="w-full lg:w-1/2 px-4 lg:pt-4 xl:pt-5">
          <figure class="max-w-[288px] [&_a]:inline-block">
            <a href="https://evereadyexpress.com/" target="_blank">
              <img src="./assets/images/footer-logo.png" alt="Footer Logo" width="250" height="66" loading="lazy">
            </a>
          </figure>
          <div class="lg:max-w-[500px] lg:[&_h4]:max-w-[368px] [&_h4]:font-base [&_h4]:mb-3 text-white/80 mt-6 lg:mt-[30px] [&_p]:capitalize [&_p]:leading-relaxed">
            <h4>Fast, Reliable Services. Best Performance Guarantee!</h4>
            <p>Since 1984, Eveready Express of Clifton, NJ has provided fast, reliable messenger, courier, and expedited trucking service for Tri-State Area Firms.</p>
            <ul class="mt-6 lg:mt-[30px] [&_li]:mb-4 [&_li:last-child]:mb-0">
              <li>
                <a href="tel:9739288998" class="text-white relative inline-flex items-center hover:opacity-85 hover:text-white group">
                  <span class="bg-transparent border border-primary p-0.5 flex justify-center items-center [&_i]:text-white w-10 h-10 rounded-full transition-all group-hover:border-white">
                    <i class="icon-phone w-8 h-8 p-1 flex items-center justify-center bg-primary rounded-full font-normal text-base transition-all group-hover:bg-white group-hover:text-primary"></i>
                  </span>
                  <span class="text-base ml-2">973-928-8998</span>
                </a>
              </li>
              <li>
                <span class="text-white relative inline-flex items-center hover:opacity-85 hover:text-white group">
                  <span class="bg-transparent border border-primary p-0.5 flex justify-center items-center [&_i]:text-white w-10 h-10 rounded-full transition-all group-hover:border-white">
                    <i class="icon-location w-8 h-8 p-1 flex items-center justify-center bg-primary rounded-full font-normal text-base transition-all group-hover:bg-white group-hover:text-primary"></i>
                  </span>
                  <span class="text-base ml-2">233 Clifton Boulevard, Clifton, NJ 07011</span>
                </span>
              </li>

            </ul>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-[42%] px-4">
          <div id="footerForm" class="bg-white rounded-lg p-4 md:p-6">
            <form method="POST" action="mailer/index.php" id="form-id-1" class="validate form">
              <div class="form-header text-secondary text-center [&_h2]:text-xl lg:[&_h2]:text-2xl [&_h2]:leading-relaxed">
                <h2 class="mb-4 lg:mb-6 xl:mb-8">Contact Us</h2>
              </div>

              <div class="form-section-0 grid md:grid-cols-2 gap-x-4">
                <div class="mb-6 md:col-span-2 lg:mb-5 xl:mb-[22px] [&_h3]:text-lg [&_h3]:leading-tight [&_h3]:text-secondary max-md:text-center">
                  <h3>Send Us A Message</h3>
                </div>
                <div class="form-group">
                  <label for="first-name">First<span class="text-ss-red">*</span></label>
                  <input class="form-control" id="full-name1" placeholder="First*" name="first-name" type="text" value="">
                  <!-- Add more checkbox input if needed -->
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <label for="last-name">Last<span class="text-ss-red">*</span></label>
                  <input class="form-control" id="full-name1" placeholder="Last*" name="last-name" type="text" value="">
                  <!-- Add more checkbox input if needed -->
                  <div class="messages"></div>
                </div>
                <div class="form-group md:col-span-2">
                  <label for="phone1">Phone Number<span class="text-ss-red">*</span></label>
                  <input class="form-control" id="phone1" placeholder="Phone Number*" name="phone" type="text" value="">
                  <!-- Add more checkbox input if needed -->
                  <div class="messages"></div>
                </div>
                <div class="form-group md:col-span-2">
                  <label for="company">Company</label>
                  <input class="form-control" id="company" placeholder="Company" name="company" type="text" value="">
                  <!-- Add more checkbox input if needed -->
                  <div class="messages"></div>
                </div>
                <div class="form-group md:col-span-2">
                  <label for="email1">Email Address<span class="text-ss-red">*</span></label>
                  <input class="form-control" id="email1" placeholder="Email Address*" name="email" type="email" value="">
                  <div class="messages"></div>
                </div>
                <div class="form-group md:col-span-2">
                  <label for="message">Message</label>
                  <textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
                  <div class="messages"></div>
                </div>
                <div class="form-group md:col-span-2 flex items-center [&_input]:appearance-none [&_input]:w-5 [&_input]:min-w-5 [&_input]:h-5 [&_input]:bg-white [&_input]:rounded [&_input]:border [&_input]:border-secondary/50 [&_input]:mr-3 xl:[&_input]:mr-[14px] [&_input]:relative [&_input:checked]:border-ss-red [&_input]:cursor-pointer before:[&_input]:absolute before:[&_input:checked]:content-['✓'] before:[&_input:checked]:absolute [&_input:checked]:bg-ss-red before:[&_input:checked]:left-[3px] before:[&_input:checked]:-top-0.5 before:[&_input:checked]:text-base before:[&_input:checked]:text-white [&_label]:text-secondary text-xs leading-relaxed font-normal">
                  <input id="consent1" name="consent" type="checkbox" value="I agree to receive SMS messages from Eveready Express">
                  <label for="consent1" class="consent-form-label block w-full cursor-pointer">I agree to receive SMS messages from Eveready Express</label>
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha-v2-visible" id="g-recaptcha-2"></div>
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <!-- You can enter a value here manually during local testing, That will bypass the validation -->
                  <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-2">
                  <div class="messages"></div>
                </div>
                <!-- Hidden honepot fields for spam detection validation : Added by FED(GS) on 6th Feb 2025 -->
                <div class="form-group" style="display:none;">
                  <input type="text" name="honeypot" style="display:none;" value="">
                  <div class="messages"></div>
                </div>
                <!-- Hidden CSRF Token validation using Session : Added by FED(GS) on 6th Feb 2025 -->
                <div class="form-group" style="display:none;">
                  <input type="hidden" name="csrf_token_form2" value="<?php echo $_SESSION['csrf_token_form2']; ?>">
                  <div class="messages"></div>
                </div>
              </div>

              <div class="form-footer">
                <button type="submit" class="submitButton btn btn-primary max-sm:w-full relative mb-6 lg:mb-8">
                  <svg class="absolute left-4 animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  Submit
                </button>
                <div class="text-secondary text-xs leading-relaxed font-normal">
                  <p>Disclaimer: Please note if you agree to receive SMS messages from Eveready Express, message frequency may vary. Message and Data Rates may apply.</p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-[22px] border-t border-white/5">
    <div class="container text-white/70 text-center">
      <p>&copy; Eveready Express. All Rights Reserved | <a href="https://evereadyexpress.com/terms-conditions/" target="_blank" class="text-white/70 hover:text-white hover:underline">Terms & Conditions</a> | <a href="https://evereadyexpress.com/privacy-policy/" target="_blank" class="text-white/70 hover:text-white hover:underline">Privacy Policy</a></p>
    </div>
  </div>
  <!-- <div class="sticky-footer bg-secondary py-3">
    <div class="container">
      <div class="flex flex-wrap gap-y-4 -mx-4">
        <div class="w-full sm:w-1/2 px-4">
          <a class="btn btn-primary w-full rounded-none" href="tel:9739288998">973-928-8998</a>
        </div>
        <div class="w-full sm:w-1/2 px-4">
          <a href="#heroForm" class="js-has-smooth btn btn-primary uppercase rounded-none w-full">Request A Quote</a>
        </div>
      </div>
    </div>
  </div> -->
</footer>
<!-- /.site-footer -->

</div> <!-- /.site-wrapper -->

<script src="lib/jquery.min.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/builder.js?v=<?php echo time(); ?>"></script>
<script src="lib/swiper/swiper-bundle.min.js"></script>
<script src="lib/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
<script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>
</body>

</html>