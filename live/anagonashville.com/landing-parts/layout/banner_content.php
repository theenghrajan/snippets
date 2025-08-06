<!-- Hero Banner section - starts -->
<section class="relative text-white z-10 flex flex-col justify-center min-h-[36.25rem] sm:min-h-[40rem] lg:min-h-[43rem]  py-12 lg:py-0 bg-no-repeat bg-center bg-cover lg:mb-36 xl:mb-40" style="background-image: url('./assets/images/hero-img-bg.png');">
  <div class="container">
    <div class="flex flex-wrap max-xl:items-center justify-between -mx-4 items-center">
      <div class="w-full lg:w-[55%] xl:w-[65%] [&_h1]:mb-6 md:[&_h1]:mb-8 lg:[&_h1]:mb-10 xl:[&_h1]:mb-11 px-4">
        <h1>#1 Commercial Cleaning Company In Nashville TN</h1>
        <div class="mb-6 sm:mb-8 lg:mb-10">
          <ul class="flex flex-wrap -mx-3 gap-y-4 lg:gap-y-7 [&_li]:flex [&_li]:gap-x-3 [&_i]:pt-1 [&_strong]:block">
            <li class="w-full lg:w-1/2 px-3 [&_i]:text-primary">
              <i class="icon-check"></i>
              <span class="text-base leading-[1.625] [&_strong]:text-lg [&_strong]:leading-[1.12]">
                <strong>Industry-Specific Cleaning Solutions:</strong> Expert cleaning tailored to your unique needs - Offices, Healthcare, Multi-Location Facilities & More
              </span>
            </li>

            <li class="w-full lg:w-1/2 px-3 [&_i]:text-primary">
              <i class="icon-check"></i>
              <span class="text-base leading-[1.625] [&_strong]:text-lg [&_strong]:leading-[1.12]">
                <strong>Enhanced Infection Control:</strong>High-touch disinfection services to safeguard your employees, customers, and patients
              </span>
            </li>

            <li class="w-full lg:w-1/2 px-3 [&_i]:text-primary">
              <i class="icon-check"></i>
              <span class="text-base leading-[1.625] [&_strong]:text-lg [&_strong]:leading-[1.12]">
                <strong>Transparent Service Tracking:</strong> Real-time work order management system for seamless communication and accountability
              </span>
            </li>

            <li class="w-full lg:w-1/2 px-3 [&_i]:text-primary">
              <i class="icon-check"></i>
              <span class="text-base leading-[1.625] [&_strong]:text-lg [&_strong]:leading-[1.12]">
                <strong>Peace of Mind:</strong> Fully licensed, insured, and backed by $10 million umbrella coverage
              </span>
            </li>
          </ul>
        </div>

        <div class="btn-wrap">
          <a href="#heroForm" target="_blank" class="btn btn-primary js-has-smooth">Get Your Free Quote</a>
        </div>
      </div>

      <div class="w-full lg:w-[45%] xl:w-[35%] px-4 max-lg:pt-9">
        <div class="relative z-10 max-lg:mb-16 bg-ss-blue/90 p-6 md:p-8 lg:p-10 lg:px-4 xl:px-12 xl:pt-12 xl:pb-9" id="heroForm">
          <?php require_once __DIR__ . '/../../landing-forms/hero_form.php'; ?>

          <figure class="absolute left-0 -bottom-[60px] w-full h-[60px] [&_img]:w-full [&_img]:h-full [&_img]:object-cover sm:[&_img]:object-fill lg:[&_img]:object-cover">
            <img src="./assets/images/form-bottom-triangle-shape.svg" alt="Triangle Shape" width="403" height="59">
          </figure>

          <figure class="max-lg:hidden absolute left-0 -bottom-[98px] lg:-bottom-[120px] w-full h-10 lg:h-14 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
            <img src="./assets/images/form-bottom-triangle-shape-shadow.png" alt="Triangle shape shadow" width="806" height="112" loading="lazy">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>