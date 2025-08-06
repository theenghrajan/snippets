<section class="pb-12 md:pb-16 lg:pb-[100px] pt-6 md:pt-9 lg:pt-[50px]">
  <div class="container">
    <div class="max-w-[475px] text-center mx-auto mb-6 md:mb-9 lg:mb-[50px]">
      <?php
      // Block title component
      block_title(array(
        'additional-class' => 'mb-8 lg:mb-12 [&_h2]:mb-0 [&_h2]:leading-normal',
        'maxwidth' => 1132,
        'block-align' => 'center',
        'content-align' => 'center',
        'title' => 'Get In Touch With Us For A Fast, Free Quote.',
      ));
      ?>
    </div>
    <div class="flex flex-wrap">
      <div class="w-full lg:w-1/2 [&_iframe]:w-full [&_iframe]:h-full max-lg:[&_iframe]:min-h-[517px]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3302994990518!2d-86.6943898!3d36.0854356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88646eff9239901d%3A0xee4a90623b48a28d!2sAnago%20of%20Nashville!5e0!3m2!1sen!2snp!4v1754285503203!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="w-full lg:w-1/2">
        <div class="bg-primary p-4 md:p-6 lg:p-8 footer-form">
          <?php require_once __DIR__ . '/../../landing-forms/get_in_touch_form.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>