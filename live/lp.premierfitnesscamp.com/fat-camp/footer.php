</main>

<footer class="site-footer bg-ss-rose-white">
  <div class="container">
    <div class="footer-form mb-4 sm:mb-10 lg:mb-20 js-bg-cover bg-cover bg-no-repeat bg-center lg:-mt-24" id="footer-form">
      <img src="assets/images/footer-form-bg.png" alt="Footer Background Image" width="1280" height="216" loading="lazy">
      <form method="POST" action="mailer/index.php" id="form-id-2" class="validate form">
        <div class="form-header">
          <h2>Schedule A Consult</h2>
          <p>Looking Forward to Connecting! We’ll Reach Out with Personalized Wellness Support.</p>
        </div>

        <div class="form-section-0">
          <div class="form-group">
            <input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
            <div class="messages"></div>
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Email Address" name="email" type="email" value="">
            <div class="messages"></div>
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Phone Number" name="phone-number" type="text" value="">
            <div class="messages"></div>
          </div>
          <div class="form-group">
            <select class="form-control  advanced-select2 " name="when-would-you-like-to-start" id="FBYql" data-placeholder="Select Placeholder">
              <option value="">When would you like to start</option>
              <option value="ASAP">ASAP</option>
              <option value="1-3 months">1-3 months</option>
              <option value="3-6 months">3-6 months</option>
              <option value="6+ months">6+ months</option>
              <option value="Not Sure">Not Sure</option>
            </select>
            <!-- Add more options if needed -->
            <div class="messages"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Your Message Here..." name="your-message-here" cols="50" rows="10"></textarea>
            <div class="messages"></div>
          </div>
          <div class="form-group">
            <div class="g-recaptcha-v2-visible" id="g-recaptcha-2"></div>
            <div class="messages"></div>
          </div>
          <div class="form-footer">
            <button type="submit" class="submitButton btn btn-primary">
              <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
              </svg>
              Submit
            </button>
          </div>
          <div class="form-group m-0">
            <!-- You can enter a value here manually during local testing, That will bypass the validation -->
            <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-2">
            <div class="messages"></div>
          </div>
          <div class="form-group m-0">
            <input type="hidden" name="utm-source" value="<?php echo $utm_source; ?>">
            <input type="hidden" name="utm-medium" value="<?php echo $utm_medium; ?>">
            <input type="hidden" name="utm-campaign" value="<?php echo $utm_campaign; ?>">
            <input type="hidden" name="gclid" value="<?php echo $gclid; ?>">
            <input type="hidden" name="msclkid" value="<?php echo $msclkid; ?>">
          </div>

        </div>
      </form>
    </div>
    <div class="flex justify-between [&_p]:max-w-screen-sm mb-4 sm:mb-8 lg:mb-14 max-lg:flex-col gap-4 max-lg:gap-y-4 lg:gap-x-12 sm:[&_p]:mb-0">
      <figure>
        <img src="assets/images/premier-fitness-camp-logo-dark.png" alt="Premier Fitness Camp Logo" width="217" height="62" loading="lazy">
      </figure>
      <div>
        <p>From high-intensity to low-impact, sports-focused or rejuvenation-inspired, PFC's fitness & health resort offers a range of approaches that make getting fit safe, effective, and fun. View add-ons for your luxury weight loss retreat & vacation below.</p>
      </div>
      <div class="flex -mx-4 [&_a]:relative [&_a]:h-fit [&_a]:after:absolute [&_a]:after:right-0 [&_a]:after:top-1/2 [&_a]:after:-translate-y-1/2 [&_a]:after:h-5 [&_a]:after:w-[1px] [&_a]:after:bg-primary/20 [&_a:last-child]:after:w-0">
        <a href="https://www.youtube.com/premierfitnesscamp" target="_blank" class="px-4"><i class="icon-youtube"></i></a>
        <a href="https://www.instagram.com/pfcfitnesscamp/" target="_blank" class="px-4"><i class="icon-instagram"></i></a>
        <a href="https://www.facebook.com/PremierFitnessCamp" target="_blank" class="px-4"><i class="icon-facebook"></i></a>
      </div>
    </div>
    <div class="text-center py-4 border-t border-dark/10 [&_p]:mb-0">
      <p>&copy; <?php echo date('Y'); ?> Premier Fitness Camp [PPC] All right reserved</p>
    </div>
    <div class="sticky-footer">
      <a href="#heroForm" class="max-lg:hidden btn btn-primary btn-block">Contact Us</a>
      <a href="tel:8884888936" class="lg:hidden btn btn-primary btn-block">(888)488-8936</a>
    </div>
  </div>
</footer>

</div> <!-- /.site-wrapper -->

<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<script src="lib/jquery.min.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/builder.js"></script>
<script src="lib/swiper/swiper-bundle.min.js"></script>
<script src="lib/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
  function getParameterByName(name) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var url = window.location.href
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
  var utm_source = getParameterByName('utm_source');
  console.log(utm_source);
</script>

<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
<script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>
</body>

</html>