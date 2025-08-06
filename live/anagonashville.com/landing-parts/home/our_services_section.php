<?php
$services_card_data = [
 [
  'icon' => 'icon-personalized',
  'title' => 'Detailed & Personalized',
  'desc' => '<p>We collaborate with you to develop a comprehensive cleaning strategy that is tailored to the unique requirements of your facility. Each time our teams sanitize your space, they adhere to a customized checklist.</p>',
 ],
 [
  'icon' => 'icon-customize-plan',
  'title' => 'Customize Your Plan',
  'desc' => "<p>Our services can be customized based on the specific needs of your business. We even work with you on a comfortable budget. We are able to work around your schedule, cleaning as little or as often as you'd like. Again, all janitorial services are customizable</p>",
 ],
 [
  'icon' => 'icon-benefit',
  'title' => 'Reap The Benefits',
  'desc' => '<p>Our commercial cleaning services in Nashville TN will help you keep up appearances, enhancing the brand and image of your business. This clean environment also improves productivity by reducing sick days through the removal of germs and bacteria. Let us be your commercial cleaning ninjas!</p>',
 ],
]
?>

<!-- Starts Our Services section -->
<section class="bg-gradient-to-b from-primary/10 to-primary/0 py-10 md:py-18 lg:py-24">
 <div class="container">
  <?php
  // Block title component
  block_title(array(
   'additional-class' => 'mb-8 lg:mb-12 [&_h2]:mb-0',
   'maxwidth' => 1132,
   'block-align' => 'center',
   'content-align' => 'center',
   'title' => 'Our Services',
  ));
  ?>
  <div class="flex flex-wrap justify-center -mx-4 xl:-mx-5">
   <?php foreach ($services_card_data as $item) : ?>
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 xl:px-5 mb-8 md:mb-10">
     <div class="py-8 px-5 bg-ss-grey-100 shadow-[0px_1px_47px_0px_rgba(0,0,0,0.07)] h-full max-md:text-center">
      <div class="max-md:flex-col flex max-md:gap-2 gap-4 items-center max-md:mb-2 mb-4 max-md:[&_h3]:mb-0 [&_h3]:font-semibold">
       <?php if (!empty($item['icon'])) : ?>
        <span class="size-14 flex items-center justify-center bg-primary/10 rounded-full text-[32px]">
         <i class="<?php echo $item['icon']; ?>"></i>
        </span>
        <h3 class="text-[22px]"><?php echo $item['title']; ?></h3>
      </div>
     <?php endif; ?>
     <?php echo $item['desc']; ?>
     </div>
    </div>
    <!-- item -->
   <?php endforeach; ?>
  </div>
  <div class="text-center mt-2">
   <a href="#heroForm" class="btn btn-primary js-has-smooth">Get Your Free Quote</a>
  </div>
 </div>
</section>
<!-- Ends Our Services section -->