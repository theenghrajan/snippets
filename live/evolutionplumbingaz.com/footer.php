</main>

<footer class="site-footer bg-ss-blue-100 text-white pt-10 lg:pt-16 2xl:pt-20">
  <div class="border-b border-solid border-white/20 pb-10">
    <div class="container">
      <div class="lg:flex items-center flex-wrap mb-14">
        <div class="mb-8 lg:mb-0 lg:flex-1 [&_iframe]:w-full [&_iframe]:h-full [&_iframe]:border-0 [&_iframe]:min-h-[532px] [&_iframe]:max-sm:min-h-[340px]">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13335.4849972359!2d-111.7164678!3d33.3221813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872bad9f381cb2dd%3A0x32516eed701d8b9f!2sEvolution%20Plumbing%20and%20Misting!5e0!3m2!1sen!2sus!4v1715626284283!5m2!1sen!2sus" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="lg:w-[50.4%] lg:pl-[7%]">
          <form method="POST" action="mailer/index.php" id="form-id-2" class="validate form -mx[5px]">
            <div class="form-header lg:text-center mb-8 text-white/80">
              <h2 class="text-white">Get In Touch With Us</h2>
              <p>When you trust Evolution Plumbing and Misting, you can know the job will be done right the first time.</p>
            </div>

            <div class="form-section-0 flex flex-wrap">
              <div class="form-group px-[5px] w-full md:w-1/2 lg:w-1/2">
                <input class="form-control form-control-alt" placeholder="First Name" name="first-name" type="text" value="">
                <div class="messages"></div>
              </div>
              <div class="form-group px-[5px] w-full md:w-1/2 lg:w-1/2">
                <input class="form-control form-control-alt" placeholder="Last Name" name="last-name" type="text" value="">
                <div class="messages"></div>
              </div>
              <div class="form-group px-[5px] w-full">
                <input class="form-control form-control-alt" placeholder="Phone Number" name="phone" type="text" value="">
                <div class="messages"></div>
              </div>
              <div class="form-group px-[5px] w-full">
                <input class="form-control form-control-alt" placeholder="Email" name="email" type="email" value="">
                <div class="messages"></div>
              </div>
              <div class="form-group px-[5px] w-full">
                <textarea class="form-control form-control-alt" placeholder="Message" name="message" cols="50" rows="10"></textarea>
                <div class="messages"></div>
              </div>
              <div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
    			<div class="g-recaptcha-v2-visible" id="g-recaptcha-2"></div>
    			<div class="messages"></div>
    		  </div>
    		  <div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
    			<!-- You can enter a value here manually during local testing, That will bypass the validation -->
    			<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-2">
    			<div class="messages"></div>
    		  </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="submitButton btn btn-primary w-full">
                <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Submit
              </button>
            </div>
          </form>
        </div>
        
      </div>
      <ul class="list-none [&_i]:text-[12px] flex flex-wrap justify-center items-center gap-3 sm:gap-6 lg:gap-12 [&_a]:text-white [&_a:hover]:text-primary">
        <li>
          <a href="tel:4806626555" class="flex items-center flex-wrap">
            <span class="size-10 border border-solid border-white/10 flex items-center justify-center rounded-full">
              <i class="icon-phone size-8 bg-white/10 rounded-full flex items-center justify-center"></i>
            </span>
            <span class="flex-1 hidden sm:block pl-2">480-662-6555</span>
          </a>
        </li>
        <li>
          <a href="mailto:evlplumbing@gmail.com" class="flex items-center flex-wrap">
            <span class="size-10 border border-solid border-white/10 flex items-center justify-center rounded-full">
              <i class="icon-mail-alt size-8 bg-white/10 rounded-full flex items-center justify-center"></i>
            </span>
            <span class="flex-1 hidden sm:block pl-2">evlplumbing@gmail.com</span>
          </a>
        </li>
        <li>
          <a href="https://maps.app.goo.gl/D8B2HH2iWbJDfKCa7" class="flex items-center flex-wrap">
            <span class="size-10 border border-solid border-white/10 flex items-center justify-center rounded-full">
              <i class="icon-pin size-8 bg-white/10 rounded-full flex items-center justify-center"></i>
            </span>
            <span class="flex-1 hidden sm:block pl-2">1556 S Chaparral Blvd Gilbert, AZ 85296</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container py-[14px] max-sm:text-center sm:flex flex-wrap items-center justify-between">
    <div class="max-sm:[&_figure]:mb-4 [&_figure]:inline-block">
      <figure>
        <img src="./assets/images/logo.png" width="161" height="37" loading="lazy" alt="Image Description">
      </figure>
    </div>
    <span class="text-sm text-white/50"> Copyright &copy; <?php echo date('Y'); ?> All Rights Reserved.</span>
  </div>
</footer>

<div class="sticky-footer">
  <a href="tel:4806626555" class="btn btn-primary btn-block">Call Now</a>
</div>

</div> <!-- /.site-wrapper -->

<script src="lib/jquery.min.js"></script>
<script src="assets/js/underscore-min.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/builder.js"></script>
<script src="lib/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
 <script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script> 

</body>

</html>