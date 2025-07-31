</main>

<footer class="site-footer pt-[88px]">
  <div class="bg-ss-gray-900 pt-12 lg:pt-16 xl:pt-[97px] pb-10">
    <div class="container">
      <div class="flex flex-row-reverse flex-wrap justify-between -mx-5">
        <div class="w-full px-5 lg:w-1/2 max-lg:mb-10">
          <div class="-mt-28 lg:-mt-32 xl:-mt-44 max-w-[570px] max-lg:mx-auto">
            <form method="POST" action="mailer/index.php" id="form-id-1" class="validate form shadow-[0px_2px_20px_rgba(0,0,0,.1)] py-[48px] lg:px-[34px]">
              <div class="mb-3 text-center form-header">
                <h2>Get In Touch</h2>
              </div>

              <div class="flex flex-wrap form-section-0">
                <div class="w-full form-group">
                  <input class="form-control" placeholder="Name" name="full-name" type="text" value="">
                  <div class="messages"></div>
                </div>
                <div class="form-group w-full lg:w-[50%] lg:pr-2">
                  <input class="form-control" placeholder="Email" name="email" type="email" value="">
                  <div class="messages"></div>
                </div>
                <div class="w-full lg:w-[50%] lg:pl-2 form-group">
                  <input class="form-control" placeholder="Phone" name="phone" type="text" value="">
                  <div class="messages"></div>
                </div>
                <div class="w-full form-group">
                  <input class="form-control" placeholder="Address" name="address" type="text" value="">
                  <div class="messages"></div>
                </div>
                <div class="w-full form-group">
                  <input class="form-control" placeholder="Subject" name="subject" type="text" value="">
                  <div class="messages"></div>
                </div>
                <div class="w-full form-group [&_textarea]:h-[126px]">
                  <textarea class="form-control" placeholder="Message..." name="message" cols="50" rows="10"></textarea>
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <!-- You can enter a value here manually during local testing, That will bypass the validation -->
                  <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
                  <div class="messages"></div>
                </div>
                <div class="form-group m-0">
                  <input type="hidden" class="form-control" name="formName" value="Footer" id="footerForm">
                  <div class="messages"></div>
                </div>
              </div>
              <div class="form-footer mt-[28px]"> <button type="submit" class="w-full submitButton btn btn-primary">
                  <svg class="w-4 h-4 mr-3 -ml-1 text-white animate-spin loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  Submit </button></div>
            </form>
          </div>
        </div>
        <div class="w-full px-5 text-sm text-white lg:w-[45%]">
          <div class="text-center max-w-[440px] mx-auto">
            <div class="max-w-[280px] lg:max-w-[316px] inline-block mb-[38px]">
              <figure>
                <img src="./assets/images/footer-logo.png" width="346" height="116" loading="lazy" alt="Footer Logo">
              </figure>
            </div>
            <p>We specialize in creating stunning, functional designs that suit your lifestyle and expectations.</p>
            <ul class="flex flex-wrap items-center justify-center gap-8 mt-10">
              <li class="text-center group cursor-pointer">
                <i class="icon-footer-mail group-hover:opacity-70 transition-all text-[45px] inline-block px-8 pb-4 mb-4 border-b border-b-white lg:px-12 lg:mb-6 "></i>
                <a href="mailto:info@hammonddb.com" class="block text-lg font-medium text-white lg:text-xl hover:text-white" data-cmp-ab="2">info@hammonddb.com</a>
              </li>
              <li class="text-center group cursor-pointer">
                <i class="icon-footer-phone group-hover:opacity-70 transition-all text-[45px] inline-block px-8 pb-4 mb-4 border-b border-b-white lg:px-12 lg:mb-6">
                </i>
                <a href="tel:5038264383" class="block text-lg font-medium text-white lg:text-xl hover:text-white" data-cmp-ab="2">503-826-4383</a>
              </li>
            </ul>
          </div>
          <div class="pt-4 text-center border-t border-white/[0.15] mt-10 lg:mt-14 lg:pb-4">
            <span>Copyright © <?php echo date('Y'); ?>. All rights reserved.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</div> <!-- /.site-wrapper -->

<script src="lib/jquery.min.js"></script>
<script src="lib/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/builder.js"></script>
<script src="assets/js/main.js"></script>

<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
<script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>

</body>

</html>