<?php
include 'header.php'; ?>

<section class="pb-14 sm:pb-20 lg:pb-24 2xl:pb-[120px]" id="top">
  <div class="container flex max-lg:items-center justify-center gap-4 sm:gap-8 lg:gap-16 max-lg:flex-wrap">
    <div class="w-full lg:w-1/2 [&_p]:text-primary-200">
      <picture class="[&_img]:rounded-tl-[100px] [&_img]:rounded-br-[100px] max-lg:[&_img]:w-full">
        <img src="./assets/images/about-us-block-img.jpg" alt="About Us Feature Image" width="615" height="614" loading="lazy">
      </picture>
      <div class="flex justify-center gap-6 mt-5 max-sm:flex-wrap max-sm:justify-start">
        <div class="">
          <i class="icon-quotation text-5xl lg:text-[63px] text-primary/[40%]"></i>
        </div>
        <div class="text-lg italic">
          <p>“Noa = Hebrew translation of “movement or motion” and Japanese translation of “my love, affection”</p>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 [&_p]:text-primary-300">
      <div class="flex items-center gap-2 [&_h2]:text-primary [&_h2]:h6 [&_h2]:mb-0 [&_h2]:uppercase">
        <span class="w-5 h-3 bg-gradient-to-r from-primary to-primary/[0.06] rounded-tl-lg rounded-br-lg"></span>
        <h2>About Us</h2>
        <span class="w-5 h-3 bg-gradient-to-r from-primary/[0.06] to-primary rounded-tr-lg rounded-bl-lg"></span>
      </div>
      <div class="relative pt-5 pb-6 mb-5 [&_h2]:font-semibold before:absolute before:w-[166px] before:h-[2px] before:bottom-0 before:bg-gradient-to-l from-primary/[0.06%] to-primary">
        <h2>Our <span class="text-primary">Approach</span></h2>
      </div>
      <p>At Noa Health, we offer female-focused services through an eclectic mix of Traditional Chinese Medicine and Japanese-style treatments, all performed in an intimate, tranquil space conducive to healing.</p>
      <p>Get to know our experienced team and how we can support you during your healing journey.</p>
      <div class="relative flex flex-col items-center justify-center">
        <picture class="w-full pt-4 pb-12 md:pb-14 2xl:pb-16 [&_img]:w-full">
          <img src="./assets/images/our-approach-block-img.jpg" alt="Our Approach Feature Image" width="592" height="351" loading="lazy">
        </picture>
        <div class="max-sm:w-fit w-full max-w-[545px] relative py-4 lg:py-9 px-4 md:px-8 lg:px-16 lg:pb-11 -mt-40 lg:-mt-48 bg-white before:absolute before:inset-0 before:bg-gradient-to-r before:from-primary/[0.02%] before:to-primary-200/[0.02%] border-primary/[0.14%] before:z-[-1] rounded-bl-[65px] rounded-tr-[65px] shadow border text-center [&_h3]:mb-0 [&_h3]:leading-[1.18]] [&_h3]:text-2xl sm:[&_h3]:text-3xl xl:[&_h3]:text-4xl [&_h3]:text-ss-dark-100/80">
          <h3>A place of integrity <span class="lowercase">and</span> care.</h3>
          <div class="flex flex-wrap items-center justify-between pt-4 lg:pt-8 max-sm:gap-20 max-sm:flex-wrap max-sm:justify-center max-sm:gap-y-6">
            <div>
              <a href="tel:2036355151" class="flex items-center gap-2 max-sm:flex-wrap max-sm:justify-center max-sm:gap-y-6 group">
                <span><i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-2 lg:p-3 group-hover:bg-primary group-hover:text-white transition-all"></i></span>
                <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">203-635-5151</strong>
              </a>
            </div>
            <a href="#header-form" class="btn btn-primary js-has-smooth">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {About Us} -->

<section class="bg-primary/10 py-10 md:py-16 lg:py-20 border-l-[3px] border-primary/[0.7]">
  <div class="container">
    <div class="flex items-center gap-2 [&_h2]:text-primary [&_h2]:h6 [&_h2]:mb-0 [&_h2]:uppercase mb-[14px]">
      <span class="w-5 h-3 bg-gradient-to-r from-primary to-primary/[0.06] rounded-tl-lg rounded-br-lg"></span>
      <h2>Our Services</h2>
      <span class="w-5 h-3 bg-gradient-to-r from-primary/[0.06] to-primary rounded-tr-lg rounded-bl-lg"></span>
    </div>
    <div class="flex max-sm:flex-col justify-between [&_h3]:h2 pb-4 xl:pb-10">
      <h3>Acupuncture Services Specializing <span class="text-primary"><span class="lowercase">in</span> Woman’s Health</span></h3>
    </div>
    <!-- Slider main container -->
    <div class="swiper services-slider">
      <!-- If we need navigation buttons -->
      <div class="swiper-buttons">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="flex flex-col items-end justify-between h-full bg-white rounded-lg">
            <div class="p-4 [&_h4]:mb-3 [&_p]:line-clamp-5 rounded-t-lg">
              <h4>Infertility Treatment</h4>
              <p>Acupuncture a is natural, gentle treatment that produces results for fertility challenges or discomfort. If you wish to minimize medications, acupuncture is a great place to start! It also supports those who experience:</p>
              <!-- <div>
                <a data-fancybox="" data-src="#content-1" href="#">Read More...</a>
                <div id="content-1" class="hidden">
                  <div class="flex justify-center items-center">
                    <picture class="h-full [&_img]:w-full [&_img]:h-full">
                      <img src="assets/images/services-slider-acupuncture-infertility-fancybox.jpg" alt="Fancybox Image" width="900" height="1087" loading="lazy">
                    </picture>
                    <div class="bg-primary-100 p-4 h-full">
                      <h5>A place of healing and hope.</h5>
                      <p>Acupuncture a is natural, gentle treatment that produces results for fertility challenges or discomfort. If you wish to minimize medications, acupuncture is a great place to start! It also supports those who experience:</p>
                      <ul class="list-disc mb-4 list-inside">
                        <li>elevated FSH</li>
                        <li>advanced maternal age</li>
                        <li>poor ovarian response or egg quality</li>
                        <li>low estradiol</li>
                        <li>Polycystic Ovarian Syndrome (PCOS)</li>
                        <li>anovulation</li>
                        <li>frequent miscarriages</li>
                        <li>multiple failed IUI/IVF cycles</li>
                      </ul>
                      <h6>Benefits of acupuncture for infertility</h6>
                      <ul class="list-disc mb-4 list-inside">
                        <li>Increases blood flow to the uterus, thickening the lining and supporting implantation</li>
                        <li>Balances the endocrine system and reproductive hormones</li>
                        <li>Reduces stress levels</li>
                        <li>Regulates menstruation and ovulation</li>
                      </ul>
                      <h6>Impacts on stress and hormonal imbalances</h6>
                      <p>Studies show women with high stress levels are up to 93% less likely to conceive. Stress not only reduces blood flow to your reproductive organs, but it can also inhibit communication between your brain, pituitary and ovaries, creating a hormonal disconnect throughout your endocrine system.</p>
                      <p>Acupuncture can help soothe your nervous system by releasing endorphins, reversing the effects of stress and regulating hormones.</p>
                      <p>It also helps to regulate hormonal imbalances by starting at the source: the hypothalamic-pituitary-ovarian axis, responsible for releasing the right hormones from your endocrine system in the appropriate amounts.</p>
                    </div>
                  </div>
                </div>
              </div> -->
              <a href="https://noacenter.com/infertility-treatment/" target="_blank">Read More...</a>
            </div>
            <picture class="w-full [&_img]:w-full [&_img]:rounded-b-lg">
              <img src="./assets/images/services-slider-acupuncture-infertility.jpg" alt="Slider Image" width="397" height="240" loading="lazy">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col items-end justify-between h-full bg-white rounded-lg">
            <div class="p-4 [&_h4]:mb-3 [&_p]:line-clamp-5 rounded-t-lg">
              <h4>Assisted Reproductive Technology (IUI & IVF)</h4>
              <p>Assisted reproductive technology (ART) treatments, combined with acupuncture and/or herbal medicine, boost your chances for IVF success! Research has shown acupuncture can increase the efficacy of IVF procedures up to 45%.</p>
              <!-- <div>
                <a data-fancybox="" data-src="#content-2" href="#">Read More...</a>
                <div id="content-2" class="hidden">
                  <div class="flex justify-center items-center">
                    <picture class="h-full [&_img]:w-full [&_img]:h-full">
                      <img src="assets/images/services-slider-assited-reproductive-technology-fancybox.jpg" alt="Fancybox Image" width="900" height="1087" loading="lazy">
                    </picture>
                    <div class="bg-primary-100 p-4 h-full">
                      <h5>Empowering you through acupuncture.</h5>
                      <p>Assisted reproductive technology (ART) treatments, combined with acupuncture and/or herbal medicine, boost your chances for IVF success! Research has shown acupuncture can increase the efficacy of IVF procedures up to 45%.</p>
                      <p>Our team will work alongside your reproductive endocrinologist, supporting their efforts and protocol every step of the way.</p>
                      <h6>How acupuncture complements ART</h6>
                      <p>It is recommended that patients receive a minimum of nine weeks of consistent acupuncture treatment while following our comprehensive lifestyle recommendations.</p>
                      <p>During this time, we focus on regulating imbalances that may be occurring elsewhere in the body, which is a different approach than Western medicine. Any imbalance, whether digestive, menstrual, emotional or dietary, needs to be restored to maximize a person’s fertile potential.</p>
                      <p><span class="font-bold">Preparation:</span> A full series of Traditional Chinese Medical treatments in advance of ART procedures works to improve your overall health and regulate your nervous, endocrine and reproductive systems, allowing optimal possibilities for conception. Acupuncture treatments contribute to a smoother ART procedure if given prior to embryo retrieval.</p>
                      <p><span class="font-bold">During fertility medication protocol:</span> Acupuncture reduces medication side effects, which can vary from mood swings to indigestion. It also increases blood flow to your uterus, thickening the endometrial lining and preparing it for implantation.</p>
                      <p><span class="font-bold">Embryo transfer:</span> We will provide acupuncture before and after your transfer, which will increase your chances of achieving pregnancy by reducing stress, relaxing the uterus and reducing cramping.</p>
                    </div>
                  </div>
                </div>
              </div> -->
              <a href="https://noacenter.com/assisted-reproductive-technology/" target="_blank">Read More...</a>
            </div>
            <picture class="w-full [&_img]:w-full [&_img]:rounded-b-lg">
              <img src="./assets/images/services-slider-assited-reproductive-technology.jpg" alt="Slider Image" width="397" height="240" loading="lazy">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col items-end justify-between h-full bg-white rounded-lg">
            <div class="p-4 [&_h4]:mb-3 [&_p]:line-clamp-5 rounded-t-lg">
              <h4>Pregnancy</h4>
              <p>As complementary care that offers benefits through all three trimesters, acupuncture is growing in popularity as a drug-free alternative to help women address common complaints and maintain a healthy pregnancy.</p>
              <!-- <div>
                <a data-fancybox="" data-src="#content-2" href="#">Read More...</a>
                <div id="content-2" class="hidden">
                  <div class="flex justify-center items-center">
                    <picture class="h-full [&_img]:w-full [&_img]:h-full">
                      <img src="assets/images/services-slider-assited-reproductive-technology-fancybox.jpg" alt="Fancybox Image" width="900" height="1087" loading="lazy">
                    </picture>
                    <div class="bg-primary-100 p-4 h-full">
                      <h5>A safe pregnancy treatment with virtually no side effects.</h5>
                      <p>As complementary care that offers benefits through all three trimesters, acupuncture is growing in popularity as a drug-free alternative to help women address common complaints and maintain a healthy pregnancy.</p>
                      <p>Our team will work alongside your reproductive endocrinologist, supporting their efforts and protocol every step of the way.</p>
                      <h6>How acupuncture complements ART</h6>
                      <p>It is recommended that patients receive a minimum of nine weeks of consistent acupuncture treatment while following our comprehensive lifestyle recommendations.</p>
                      <p>During this time, we focus on regulating imbalances that may be occurring elsewhere in the body, which is a different approach than Western medicine. Any imbalance, whether digestive, menstrual, emotional or dietary, needs to be restored to maximize a person’s fertile potential.</p>
                      <p><span class="font-bold">Preparation:</span> A full series of Traditional Chinese Medical treatments in advance of ART procedures works to improve your overall health and regulate your nervous, endocrine and reproductive systems, allowing optimal possibilities for conception. Acupuncture treatments contribute to a smoother ART procedure if given prior to embryo retrieval.</p>
                      <p><span class="font-bold">During fertility medication protocol:</span> Acupuncture reduces medication side effects, which can vary from mood swings to indigestion. It also increases blood flow to your uterus, thickening the endometrial lining and preparing it for implantation.</p>
                      <p><span class="font-bold">Embryo transfer:</span> We will provide acupuncture before and after your transfer, which will increase your chances of achieving pregnancy by reducing stress, relaxing the uterus and reducing cramping.</p>
                    </div>
                  </div>
                </div>
              </div> -->
              <a href="https://noacenter.com/pregnancy/" target="_blank">Read More...</a>
            </div>
            <picture class="w-full [&_img]:w-full [&_img]:rounded-b-lg">
              <img src="./assets/images/services-slider-pregnancy.jpg" alt="Slider Image" width="397" height="240" loading="lazy">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col items-end justify-between h-full bg-white rounded-lg">
            <div class="p-4 [&_h4]:mb-3 [&_p]:line-clamp-5 rounded-t-lg">
              <h4>Postpartum</h4>
              <p>A baby’s birth can trigger so many emotions, from excitement and joy to fear and anxiety.Elation aside, the birth process is highly traumatic on the mother’s body. She not only faces the immediate responsibilities of caring for her newborn, but simultaneously deals with the pain and discomfort of her own body’s emotional and physical distress.</p>
              <!-- <div>
                <a data-fancybox="" data-src="#content-2" href="#">Read More...</a>
                <div id="content-2" class="hidden">
                  <div class="flex justify-center items-center">
                    <picture class="h-full [&_img]:w-full [&_img]:h-full">
                      <img src="assets/images/services-slider-assited-reproductive-technology-fancybox.jpg" alt="Fancybox Image" width="900" height="1087" loading="lazy">
                    </picture>
                    <div class="bg-primary-100 p-4 h-full">
                      <h5>A safe pregnancy treatment with virtually no side effects.</h5>
                      <p>As complementary care that offers benefits through all three trimesters, acupuncture is growing in popularity as a drug-free alternative to help women address common complaints and maintain a healthy pregnancy.</p>
                      <p>Our team will work alongside your reproductive endocrinologist, supporting their efforts and protocol every step of the way.</p>
                      <h6>How acupuncture complements ART</h6>
                      <p>It is recommended that patients receive a minimum of nine weeks of consistent acupuncture treatment while following our comprehensive lifestyle recommendations.</p>
                      <p>During this time, we focus on regulating imbalances that may be occurring elsewhere in the body, which is a different approach than Western medicine. Any imbalance, whether digestive, menstrual, emotional or dietary, needs to be restored to maximize a person’s fertile potential.</p>
                      <p><span class="font-bold">Preparation:</span> A full series of Traditional Chinese Medical treatments in advance of ART procedures works to improve your overall health and regulate your nervous, endocrine and reproductive systems, allowing optimal possibilities for conception. Acupuncture treatments contribute to a smoother ART procedure if given prior to embryo retrieval.</p>
                      <p><span class="font-bold">During fertility medication protocol:</span> Acupuncture reduces medication side effects, which can vary from mood swings to indigestion. It also increases blood flow to your uterus, thickening the endometrial lining and preparing it for implantation.</p>
                      <p><span class="font-bold">Embryo transfer:</span> We will provide acupuncture before and after your transfer, which will increase your chances of achieving pregnancy by reducing stress, relaxing the uterus and reducing cramping.</p>
                    </div>
                  </div>
                </div>
              </div> -->
              <a href="https://noacenter.com/postpartum/" target="_blank">Read More...</a>
            </div>
            <picture class="w-full [&_img]:w-full [&_img]:rounded-b-lg">
              <img src="./assets/images/services-slider-postpartum.jpg" alt="Slider Image" width="397" height="240" loading="lazy">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="flex flex-col items-end justify-between h-full bg-white rounded-lg">
            <div class="p-4 [&_h4]:mb-3 [&_p]:line-clamp-5 rounded-t-lg">
              <h4>Premenstrual Syndrome (PMS)</h4>
              <p>In a recent scientific study, the success rate of acupuncture in treating PMS symptoms was 77.8%, versus 5.9% in a placebo group. Acupuncture rebalances and increases the body’s flow of energy, which becomes disrupted over time by stress, overwork and poor dietary habits. Restoring the body’s balance can stabilize hormonal fluctuations, reducing anxiety, mastalgia (breast pain), insomnia, headaches and other PMS symptoms.</p>
              <!-- <div>
                <a data-fancybox="" data-src="#content-2" href="#">Read More...</a>
                <div id="content-2" class="hidden">
                  <div class="flex justify-center items-center">
                    <picture class="h-full [&_img]:w-full [&_img]:h-full">
                      <img src="assets/images/services-slider-assited-reproductive-technology-fancybox.jpg" alt="Fancybox Image" width="900" height="1087" loading="lazy">
                    </picture>
                    <div class="bg-primary-100 p-4 h-full">
                      <h5>A safe pregnancy treatment with virtually no side effects.</h5>
                      <p>As complementary care that offers benefits through all three trimesters, acupuncture is growing in popularity as a drug-free alternative to help women address common complaints and maintain a healthy pregnancy.</p>
                      <p>Our team will work alongside your reproductive endocrinologist, supporting their efforts and protocol every step of the way.</p>
                      <h6>How acupuncture complements ART</h6>
                      <p>It is recommended that patients receive a minimum of nine weeks of consistent acupuncture treatment while following our comprehensive lifestyle recommendations.</p>
                      <p>During this time, we focus on regulating imbalances that may be occurring elsewhere in the body, which is a different approach than Western medicine. Any imbalance, whether digestive, menstrual, emotional or dietary, needs to be restored to maximize a person’s fertile potential.</p>
                      <p><span class="font-bold">Preparation:</span> A full series of Traditional Chinese Medical treatments in advance of ART procedures works to improve your overall health and regulate your nervous, endocrine and reproductive systems, allowing optimal possibilities for conception. Acupuncture treatments contribute to a smoother ART procedure if given prior to embryo retrieval.</p>
                      <p><span class="font-bold">During fertility medication protocol:</span> Acupuncture reduces medication side effects, which can vary from mood swings to indigestion. It also increases blood flow to your uterus, thickening the endometrial lining and preparing it for implantation.</p>
                      <p><span class="font-bold">Embryo transfer:</span> We will provide acupuncture before and after your transfer, which will increase your chances of achieving pregnancy by reducing stress, relaxing the uterus and reducing cramping.</p>
                    </div>
                  </div>
                </div>
              </div> -->
              <a href="https://noacenter.com/womens-health/" target="_blank">Read More...</a>
            </div>
            <picture class="w-full [&_img]:w-full [&_img]:rounded-b-lg">
              <img src="./assets/images/services-slider-premenstrual-syndrome.jpg" alt="Slider Image" width="397" height="240" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="flex flex-wrap justify-center items-center -mx-4">
      <div class="flex-1 sm:flex-[0_0_50%] lg:flex-[0_0_33.33%] px-4">
        <div class="flex flex-col items-end justify-between h-full bg-white box-shadow rounded-lg">
          <div class="p-4 [&_h4]:mb-3 [&_p]:line-clamp-5 rounded-t-lg">
            <h4>Fertility Imbalance</h4>
            <p>Acupuncture a is natural, gentle treatment that produces results for fertility challenges or discomfort. If you wish to minimize medications, acupuncture is a great place to start! It also supports those who experience:</p>
            <div>
              <a data-fancybox="" data-src="#content-1" href="#">Read More...</a>
              <div id="content-1" class="flex">

              </div>
            </div>
          </div>
          <picture class="w-full [&_img]:w-full [&_img]:rounded-b-lg">
            <img src="./assets/images/swiper-slider-img-01.jpg" alt="Slider Image" width="397" height="240" loading="lazy">
          </picture>
        </div>
      </div>
    </div> -->
    <div class="flex items-center justify-center pt-5 sm:pt-10 xl:pt-[52px]">
      <a href="#header-form" class="btn btn-primary js-has-smooth">Book now</a>
    </div>
</section>
<!-- /Section {Our Services} -->

<section class="relative py-10 md:py-12 lg:py-14 xl:py-20 bg-gradient-primary">
  <div class="container">
    <div class="flex itemms-center flex-wrap gap-y-6 md:-mx-4">
      <div class="w-full lg:w-1/2 md:px-4 xl:max-w-[620px]">
        <div class="block-content text-white mb-6 md:mb-8 lg:mb-[42px] [&_p]:text-base [&_p]:leading-[30px] [&_p]:capitalize [&_a]:text-white/75 [&_a]:underline hover:[&_a]:text-white visited:[&_a]:text-ss-dark/50 focus:[&_a]:text-ss-grey">
          <div class="text-white [&_span]:uppercase [&_span]:h6 [&_span]:font-lead [&_span]:font-semibold [&_span]:leading-[30px] mb-2 md:mb-3 lg:mb-4">
            <span class="relative z-[1] px-[29px] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-5 before:h-3 before:bg-gradient-to-r before:from-white before:to-white/[0.06] before:rounded-tl-lg before:rounded-br-lg after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:w-5 after:h-3 after:bg-gradient-to-r after:from-white/[0.06] after:to-white after:rounded-tr-lg after:rounded-bl-lg">Benefits</span>
          </div>

          <h2 class="mb-4 text-white normal-case lg:mb-6">HOW WE CAN HELP</h2>
          <p>For 20+ years, our team has worked with folks who seek balance in their lives. Our patients come to us with a wide range of acute and chronic ailments, and display continued signs of improvement through our customized treatment plans.</p>
          <p>We focus our services on women’s health disorders and concerns, along with other conditions like chronic pain, Lyme disease, allergies, migraines and more. We also offer cosmetic acupuncture treatments.</p>
        </div>
        <div class="mt-8 btn-wrap">
          <a href="#header-form" class="btn btn-secondary js-has-smooth">Schedule your healing session</a>
        </div>
      </div>

      <div class="w-full lg:w-1/2 md:px-4">
        <div class="relative h-full w-full [&_img]:object-cover">
          <picture class="h-full w-full [&_img]:h-full [&_img]:w-full [&_img]:rounded-tr-[120px] [&_img]:rounded-bl-[120px]">
            <img src="./assets/images/young-woman-crystal-healing-session.png" alt="Massage" width="624" height="512" loading="lazy" />
          </picture>

          <div class="bg-white rounded-tl-[40px] rounded-tr-[5px] rounded-bl-[40px] rounded-br-[5px] shadow inline-block absolute top-auto bottom-[14px] right-[14px]">
            <div class="flex gap-2 items-center relative group py-3 lg:py-[15px] px-3 sm:pr-4 md:pr-5 lg:pr-6 xl:pr-7 md:pl-4 xl:pl-5">
              <a href="tel:2036355151" class="stretched-link">
                <span>
                  <i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-3 group-hover:bg-primary group-hover:text-white transition-all"></i>
                </span>
              </a>
              <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">203-635-5151</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Benefits} -->

<section class="py-10 md:py-12 lg:py-14 xl:py-[120px]">
  <div class="container">
    <div class="max-w-[1188px] mx-auto">
      <div class="text-center max-w-[940px] mx-auto mb-8">
        <div class="[&_span]:uppercase [&_span]:text-primary mb-[14px] [&_span]:h6 [&_span]:font-semibold [&_span]:leading-[30px] [&_span]:font-lead">
          <span class="relative z-[1] px-[29px] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-5 before:h-3 before:bg-gradient-to-r before:from-primary before:to-primary/[0.06] before:rounded-tl-lg before:rounded-br-lg after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:w-5 after:h-3 after:bg-gradient-to-r after:from-primary after:to-primary/[0.06] after:rounded-tr-lg after:rounded-bl-lg">faq’s</span>
        </div>
        <h2 class="mb-4">Frequently Asked <span class="text-primary">Questions</span></h2>
      </div>

      <div class="accordion md:-mx-4 mb-8 lg:mb-10 xl:mb-[50px]">
        <div class="w-full md:px-4">
          <div class="space-y-4 lg:space-y-6">
            <div class="accordion-item relative bg-white rounded-[10px] border border-[#141414]/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow-[0px_8px_32px_0px] [&.itemActive]:shadow-[rgba(99,65,165,0.16)] itemActive">
              <button class="accordionBtn text-[#141414] text-[20px] lg:text-[22px] leading-[30px] font-semibold font-base relative pl-4 lg:pl-6 py-[18px] lg:py-[27px] pr-[52px] md:pr-[60px] lg:pr-[72px] w-full text-left transition-all duration-300 lg:[&.active]:pb-[23px] [&:after]:content-['\e900'] [&:after]:text-[#141414] [&.active:after]:content-['\e90b'] [&:after]:leading-[1] [&:after]:font-icomoon [&:after]:absolute [&:after]:top-[50%] [&:after]:translate-y-[-50%] [&:after]:right-[12px] lg:[&:after]:right-[20px] [&:after]:text-[12px] lg:[&:after]:text-[16px] [&:after]:h-9 lg:[&:after]:h-11 [&:after]:w-9 lg:[&:after]:w-11 [&:after]:bg-white [&:after]:flex [&:after]:items-center [&:after]:justify-center [&:after]:rounded-full [&:after]:border [&_after]:border-[#141414]/20 [&:after]:font-normal [&:after]:transition-all [&:after]:duration-300 [&.active:after]:bg-primary [&.active:after]:text-white [&.active:after]:border-transparent [&.active:after]:shadow active">
                Arrival Time
              </button>

              <div class="accordionBody px-4 pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-[#141414]/8 [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p class="mb-0">For your first appointment we ask you to complete the patient intake form (Online). Please try to arrive 5-minutes before your appointment to ensure a timely start and full treatment.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->

            <div class="accordion-item relative bg-white rounded-[10px] border border-[#141414]/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow-[0px_8px_32px_0px] [&.itemActive]:shadow-[rgba(99,65,165,0.16)]">
              <button class="accordionBtn text-[#141414] text-[20px] lg:text-[22px] leading-[30px] font-semibold font-base relative pl-4 lg:pl-6 py-[18px] lg:py-[27px] pr-[52px] md:pr-[60px] lg:pr-[72px] w-full text-left transition-all duration-300 lg:[&.active]:pb-[23px] [&:after]:content-['\e900'] [&:after]:text-[#141414] [&.active:after]:content-['\e90b'] [&:after]:leading-[1] [&:after]:font-icomoon [&:after]:absolute [&:after]:top-[50%] [&:after]:translate-y-[-50%] [&:after]:right-[12px] lg:[&:after]:right-[20px] [&:after]:text-[12px] lg:[&:after]:text-[16px] [&:after]:h-9 lg:[&:after]:h-11 [&:after]:w-9 lg:[&:after]:w-11 [&:after]:bg-white [&:after]:flex [&:after]:items-center [&:after]:justify-center [&:after]:rounded-full [&:after]:border [&_after]:border-[#141414]/20 [&:after]:font-normal [&:after]:transition-all [&:after]:duration-300 [&.active:after]:bg-primary [&.active:after]:text-white [&.active:after]:border-transparent [&.active:after]:shadow">
                How long is a treatment?
              </button>
              <div class="accordionBody hidden pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-[#141414]/8 [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p class="mb-0">Your first visit will take approximately one hour. If you have limited time, please inform us before your appointment begins and we will adjust the length of your treatment accordingly. For subsequent visits, please allow 45-minutes.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->

            <div class="accordion-item relative bg-white rounded-[10px] border border-[#141414]/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow-[0px_8px_32px_0px] [&.itemActive]:shadow-[rgba(99,65,165,0.16)]">
              <button class="accordionBtn text-[#141414] text-[20px] lg:text-[22px] leading-[30px] font-semibold font-base relative pl-4 lg:pl-6 py-[18px] lg:py-[27px] pr-[52px] md:pr-[60px] lg:pr-[72px] w-full text-left transition-all duration-300 lg:[&.active]:pb-[23px] [&:after]:content-['\e900'] [&:after]:text-[#141414] [&.active:after]:content-['\e90b'] [&:after]:leading-[1] [&:after]:font-icomoon [&:after]:absolute [&:after]:top-[50%] [&:after]:translate-y-[-50%] [&:after]:right-[12px] lg:[&:after]:right-[20px] [&:after]:text-[12px] lg:[&:after]:text-[16px] [&:after]:h-9 lg:[&:after]:h-11 [&:after]:w-9 lg:[&:after]:w-11 [&:after]:bg-white [&:after]:flex [&:after]:items-center [&:after]:justify-center [&:after]:rounded-full [&:after]:border [&_after]:border-[#141414]/20 [&:after]:font-normal [&:after]:transition-all [&:after]:duration-300 [&.active:after]:bg-primary [&.active:after]:text-white [&.active:after]:border-transparent [&.active:after]:shadow">
                How do I prepare before treatment?
              </button>
              <div class="accordionBody hidden pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-[#141414]/8 [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p>Prior to your arrival, be sure you’re NOT coming in on an empty stomach. A light meal beforehand is recommended.</p>
                <p>There is no dress code at our office, come as you are. Should your session require any disrobing, you will be draped where necessary and with your utmost comfort in mind.</p>
                <p>Acupuncture promotes relaxation and does so by reducing the heart rate. If you are planning exercise and acupuncture on the same day, we would recommend the order of exercise first followed by acupuncture. The reverse order may be counter-intuitive.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->

            <div class="accordion-item relative bg-white rounded-[10px] border border-[#141414]/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow-[0px_8px_32px_0px] [&.itemActive]:shadow-[rgba(99,65,165,0.16)]">
              <button class="accordionBtn text-[#141414] text-[20px] lg:text-[22px] leading-[30px] font-semibold font-base relative pl-4 lg:pl-6 py-[18px] lg:py-[27px] pr-[52px] md:pr-[60px] lg:pr-[72px] w-full text-left transition-all duration-300 lg:[&.active]:pb-[23px] [&:after]:content-['\e900'] [&:after]:text-[#141414] [&.active:after]:content-['\e90b'] [&:after]:leading-[1] [&:after]:font-icomoon [&:after]:absolute [&:after]:top-[50%] [&:after]:translate-y-[-50%] [&:after]:right-[12px] lg:[&:after]:right-[20px] [&:after]:text-[12px] lg:[&:after]:text-[16px] [&:after]:h-9 lg:[&:after]:h-11 [&:after]:w-9 lg:[&:after]:w-11 [&:after]:bg-white [&:after]:flex [&:after]:items-center [&:after]:justify-center [&:after]:rounded-full [&:after]:border [&_after]:border-[#141414]/20 [&:after]:font-normal [&:after]:transition-all [&:after]:duration-300 [&.active:after]:bg-primary [&.active:after]:text-white [&.active:after]:border-transparent [&.active:after]:shadow">
                What if I need to cancel?
              </button>
              <div class="accordionBody hidden pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-[#141414]/8 [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p class="mb-0">As a courtesy to our staff and other patients, please allow 24-hours notice for cancellations and rescheduling. Missed appointments or cancellations that occur less than 24- hours before the scheduled appointment are subject to a fee of $100 or one docked session.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->
          </div>
        </div>
      </div> <!-- /Accordion -->

      <div class="flex flex-col items-center justify-center gap-6 btn-group sm:flex-row sm:gap-y-0 sm:gap-x-8 lg:gap-x-10">
        <div>
          <a href="tel:2036355151" class="uppercase btn btn-primary">Call today</a>
        </div>
        <div class="relative flex items-center gap-2 group">
          <a href="tel:2036355151" class="stretched-link">
            <span><i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-3 group-hover:bg-primary group-hover:text-white transition-all"></i></span>
          </a>
          <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">203-635-5151</strong>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {FAQ} -->

<section class="bg-black/[0.03] py-8 lg:py-16 lg:pb-36 xl:pb-44">
  <div class="container">
    <div class="[&_span]:uppercase [&_span]:text-primary mb-[14px] [&_span]:h6 [&_span]:font-semibold [&_span]:leading-[30px] [&_span]:font-lead">
      <span class="relative z-[1] px-[29px] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-5 before:h-3 before:bg-gradient-to-r before:from-primary before:to-primary/[0.06] before:rounded-tl-lg before:rounded-br-lg after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:w-5 after:h-3 after:bg-gradient-to-r after:from-primary after:to-primary/[0.06] after:rounded-tr-lg after:rounded-bl-lg">testimonials</span>
    </div>
    <div class="swiper testimonials-slider pb-[1px]">
      <div class="flex max-sm:flex-col gap-y-4 justify-between [&_h3]:h2 pb-4 sm:pb-10">
        <h3>What our<span class="text-primary"> patients say</span></h3>
        <div class="flex gap-4 max-sm:self-center">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="swiper-wrapper">
        <div class="h-auto swiper-slide">
          <div class="slider-content w-full h-full pl-8 pr-4 bg-white rounded-lg pt-9 pb-7">
            <div class="flex items-center justify-between">
              <div class="flex items-center mb-6">
                <span class="capitalize text-[22px]">Mary Rose McDonough</span>
              </div>
              <div class="relative px-4 py-3 bg-primary rounded-s-[5px]  shadow mb-6 -mr-[34px] flex justify-center items-center gap-1 after:w-0 after-h-0 after:border-[17px] after:border-solid after:border-transparent
              after:border-l-primary after:absolute after:-bottom-[17px] after:-right-[17px]">
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
              </div>
            </div>
            <p>Iris treated me last January as I began trying to conceive after a miscarriage. After my first session I found out I was already pregnant at the time of my first visit and just didn’t know it. She took excellent care of me every other week during my first trimester—it helped significantly with morning sickness and anxiety. I’m very grateful to her help, her gentle nature, and the gift of balanced energy that she gave me.
            </p>
          </div>
        </div><!-- /slideer slide -->

        <div class="h-auto swiper-slide">
          <div class="slider-content w-full h-full pl-8 pr-4 bg-white rounded-lg pt-9 pb-7">
            <div class="flex items-center justify-between">
              <div class="flex items-center mb-6">
                <span class="capitalize text-[22px]">Jamie Adams Benjamin </span>
              </div>
              <div class="relative px-4 py-3 bg-primary rounded-s-[5px] shadow mb-6 -mr-[34px] flex justify-center items-center gap-1 after:w-0 after-h-0 after:border-[17px] after:border-solid after:border-transparent
              after:border-l-primary after:absolute after:-bottom-[17px] after:-right-[17px]">
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
              </div>
            </div>
            <p>Iris is truly delightful to work with. She instantly made me feel comfortable. She is professional and really knows what she's doing. I would highly recommend her to anyone looking to get acupuncture done! I will be a repeat patient 🙂
            </p>
          </div>
        </div><!-- /slideer slide -->

        <div class="h-auto swiper-slide">
          <div class="slider-content w-full h-full pl-8 pr-4 bg-white rounded-lg pt-9 pb-7">
            <div class="flex items-center justify-between">
              <div class="flex items-center mb-6">
                <span class="capitalize text-[22px]">M M.</span>
              </div>
              <div class="relative px-4 py-3 bg-primary rounded-s-[5px]  shadow mb-6 -mr-[34px] flex justify-center items-center gap-1 after:w-0 after-h-0 after:border-[17px] after:border-solid after:border-transparent
              after:border-l-primary after:absolute after:-bottom-[17px] after:-right-[17px]">
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
              </div>
            </div>
            <p>Had an amazing session with Iris- she is a highly gifted acupuncturist! I cannot recommend her highly enough. With intuitive skill, she can pinpoint your blocks, address health issues and maintain well-being. I feel profoundly relaxed after seeing her!</p>
          </div>
        </div><!-- /slideer slide -->

        <div class="h-auto swiper-slide">
          <div class="slider-content w-full h-full pl-8 pr-4 bg-white rounded-lg pt-9 pb-7">
            <div class="flex items-center justify-between">
              <div class="flex items-center mb-6">
                <span class="capitalize text-[22px]">Debbie G.</span>
              </div>
              <div class="relative px-4 py-3 bg-primary rounded-s-[5px]  shadow mb-6 -mr-[34px] flex justify-center items-center gap-1 after:w-0 after-h-0 after:border-[17px] after:border-solid after:border-transparent
              after:border-l-primary after:absolute after:-bottom-[17px] after:-right-[17px]">
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
                <i class="icon-star text-ss-yellow"></i>
              </div>
            </div>
            <p>I am so happy to have found Iris! She successfully helped me with fertility issues I have been struggling with for the past few years. Iris instantly understood my frustrations and put me at ease with her knowledge and expertise. She has a wonderful practice in NYC as well as Westport. I will continue to go to her office throughout my pregnancy and beyond. I feel very fortunate for finding NOA!! Thank you Iris for everything!!!
            </p>
          </div>
        </div><!-- /slideer slide -->
        <!-- /Slider Wrapper -->
      </div>
    </div>
</section>
<!-- /Section {Testimonials} -->

<?php
include 'footer.php';
