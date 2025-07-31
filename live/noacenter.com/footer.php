</main>

<footer class="site-footer relative before:bg-black/90 before:absolute before:top-0 before:bottom-0 before:right-0 before:left-0 before:z-[1]" style="background-image: url('assets/images/footer-bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
  <div class="container flex max-lg:flex-col relative z-[2] py-14">
    <div class="lg:w-1/2 xl:w-3/5">
      <picture>
        <img src="./assets/images/nova-health-acupuncture-logo.png" alt="Nova Health Acupuncture Logo" width="100" height="95" loading="lazy">
      </picture>
      <div class="text-white text-lg leading-[1.66] pb-6 [&_p]:mb-0 border-b border-b-solid border-b-white/15 lg:w-5/6">
        <p>Professional acupuncture services <br class="max-lg:hidden"> in Westport and Ridgefield, CT.</p>
      </div>
      <div class="flex flex-wrap pt-6">
        <div class="*:text-white [&_h5]:font-base [&_h5]:mb-1 [&_h5]:mt-[10px] [&_h5]:leading-normal font-lead sm:w-1/2">
          <h5>Reach Us Through</h5>
          <div class="space-y-[22px] *:text-white">
            <a href="tel:2036355151" class="flex items-center group hover:text-white">
              <span class="flex justify-center items-center size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full mr-[14px] group-hover:bg-white transition ease-in duration-150">
                <i class="icon-footer-phone group-hover:text-primary"></i>
              </span>
              203-635-5151
            </a>
            <a href="mailto:iris@noacenter.com" class="flex items-center group hover:text-white">
              <span class="flex justify-center items-center size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full mr-[14px] group-hover:bg-white transition ease-in duration-150">
                <i class="icon-footer-mail group-hover:text-primary"></i>
              </span>
              iris@noacenter.com
            </a>
            <a href="https://maps.app.goo.gl/EfFrAUiMLrqAucmo6" class="flex items-center group hover:text-white">
              <span class="flex justify-center items-center size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full mr-[14px] group-hover:bg-white transition ease-in duration-150">
                <i class="icon-footer-pin group-hover:text-primary"></i>
              </span>
              <span>
                37 Franklin St. Suite 1, Westport CT. 06880
              </span>
            </a>
          </div>
        </div>
        <div class="text-white [&_h5]:font-base [&_h5]:leading-normal sm:w-1/2 max-sm:mt-4">
          <h5 class="text-white">Available on</h5>
          <div class="flex">
            <a href="https://www.facebook.com/NoaHealthAcupuncture/" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
              <i class="text-white icon-facebook group-hover:text-primary"></i>
            </a>
            <a href="https://www.instagram.com/noahealthacupuncture/" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
              <i class="text-white icon-instagram group-hover:text-primary"></i>
            </a>
            <!-- <a href="tel:2129918680" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
                <i class="text-white icon-youtube group-hover:text-primary"></i>
            </a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="max-lg:mt-8 lg:w-1/2 xl:w-2/5 px-4 md:px-6 lg:px-9 pb-10 pt-12 lg:pt-14 lg:h-fit bg-white relative lg:-mt-28 shadow-black/20 shadow-[0px_6px_34px_0px] rounded-xl before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 before:w-52 before:h-3 before:rounded-b-full before:bg-primary-100 [&_h2]:text-[40px] [&_h2]:text-ss-gray-900">
      <h2 class="mb-4 lg:mb-6 xl:mb-[26px]">Contact <span class="text-primary">Us</span></h2>

      <form method="POST" action="mailer/index.php" id="form-id-1" class="validate form site-footer__form">

        <div class="form-section-0 md:flex md:flex-wrap -mx-[10px]">
          <div class="form-group w-full px-[10px]">
            <label for="f-name">Name</label>
            <input class="form-control" placeholder="i.e. John Doe" name="name" type="text" value="" id="f-name">
            <div class="messages"></div>
          </div>
          <div class="form-group md:flex-[0_0_50%] md:max-w-[50%] px-[10px]">
            <label for="f-email">Email</label>
            <input class="form-control" placeholder="i.e. john@mail.com" name="email" type="email" value="" id="f-email">
            <div class="messages"></div>
          </div>
          <div class="form-group md:flex-[0_0_50%] md:max-w-[50%] px-[10px]">
            <label for="f-phone">Phone</label>
            <input class="form-control" placeholder="i.e. 123-456-7890" name="phone" type="text" value="" id="f-phone">
            <div class="messages"></div>
          </div>
          <div class="form-group  w-full px-[10px]">
            <label for="Nxh9C">Which service do you need?</label>
            <select class="form-control" name="select-a-service" id="Nxh9C">
              <option value="">Select a service </option>
              <option value="Infertility Treatment">Infertility Treatment </option>
              <option value="Assisted Reproductive Technology (IUI & IVF)">Assisted Reproductive Technology (IUI & IVF) </option>
              <option value="Pregnancy">Pregnancy </option>
              <option value="Postpartum">Postpartum </option>
              <option value="Premenstrual Syndrome (PMS)">Premenstrual Syndrome (PMS) </option>
              <option value="Others">Others </option>
            </select>
            <!-- Add more options if needed -->
            <div class="messages"></div>
          </div>
          <div class="form-group w-full px-[10px]">
            <label for="f-message">Please leave a Message</label>
            <textarea class="form-control" placeholder="Message" name="query" cols="50" rows="10" id="f-message"></textarea>
            <div class="messages"></div>
          </div>
          <div class="form-group w-full px-[10px] m-0">
            <div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
            <div class="messages"></div>
          </div>
          <div class="form-group m-0">
            <!-- You can enter a value here manually during local testing, That will bypass the validation -->
            <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
            <div class="messages"></div>
          </div>
          <div class="form-group m-0">
            <!-- For dynamic email submject based on form -->
            <input type="hidden" class="form-control" name="form-name" value="Contact">
            <div class="messages"></div>
          </div>
        </div>
        <div class="form-footer pt-2 lg:pt-3 xl:pt-4">
          <button type="submit" class="submitButton btn btn-primary">
            <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Schedule an appointment
          </button>
        </div>
      </form>

    </div>
  </div>
  <div class="relative z-[2] bg-primary py-5 text-white text-center border-b border-white border-solid font-lead [&_p]:w-fit [&_p]:mx-auto [&_p]:mb-0">
    <p>
      &copy; <?php echo date('Y'); ?> <span class="uppercase">ACUPUNCTURE REMEDIES</span>&trade; - All Rights Reserved.
    </p>
  </div>
</footer>

<div class="sticky-footer">
  <a href="tel:2036355151" class="btn btn-primary btn-block rounded-none">(203) 635-5151</a>
</div>
<!-- /Sticky Footer -->

</div> <!-- /.site-wrapper -->

<script src="lib/jquery.min.js"></script>
<script src="lib/swiper/swiper-bundle.min.js"></script>
<script src="lib/fancybox/fancybox.umd.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/builder.js"></script>
<script src="assets/js/main.js"></script>
<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
<script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>
</body>

</html>