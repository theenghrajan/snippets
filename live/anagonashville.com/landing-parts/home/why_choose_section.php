<?php
$choose_items_data = [
 [
  'main_text' => '30+',
  'desc' => '<p>Years Of Superior <br>Commercial Cleaning</p>',
 ],
 [
  'main_text' => '98.5%',
  'desc' => '<p>Client Retention <br>Rate</p>',
 ],
 [
  'main_text' => '2M sq. ft',
  'desc' => '<p>cleaned across Middle <br>Tennessee</p>',
 ],
]
?>

<!-- Start Why Choose Anago Section -->
<section class="pt-10 lg:pt-14 pb-5 lg:pb-7" style="background-image: url('./assets/images/why-choose-ango-bg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
 <div class="container">
  <?php
  // Block title component
  block_title(array(
   'additional-class' => 'mb-8 lg:mb-12 [&_h2]:mb-0',
   'maxwidth' => 1132,
   'block-align' => 'center',
   'content-align' => 'center',
   'title' => 'Why Choose Anago',
  ));
  ?>

  <div class="flex flex-wrap justify-center overflow-hidden">
   <?php foreach ($choose_items_data as $index => $item) :
   ?>
    <div class="relative md:mb-5 w-full md:w-1/2 lg:w-1/3 before:absolute before:w-full before:h-0.5 before:bg-gradient-to-l before:from-transparent before:via-[#07213570] before:to-transparent md:before:-right-1 md:before:w-0.5 md:before:h-full md:before:bg-gradient-to-b max-md:before:bottom-0 last:before:hidden">
     <div class="text-center p-6 h-full">
      <h3 class="text-3xl lg:text-[42px] text-ss-dark-300/90 font-bold mb-4"><?php echo $item['main_text']; ?></h3>
     <?php echo $item['desc']; ?>
     </div>
    </div>
    <!-- item -->
   <?php endforeach; ?>
  </div>
 </div>
</section>
<!-- Ends Why Choose Anago Section -->