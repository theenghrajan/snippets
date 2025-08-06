<?php

$testimonials = [
 [
  'name' => 'Doniesha D.',
  'title' => 'Fast Service, Fair Prices',
  'content' => '<p>My daughter\'s dad is contracted through Anago and I was referred because he has been with them for years. His business is thriving</p>',
  'stars' => 5,
  'link' => '#',
 ],
 [
  'name' => 'Ian P.',
  'title' => 'Fast Service, Fair Prices',
  'content' => '<p>They have done a great job for us at Computer Pros! We highly recommend these folks.</p>',
  'stars' => 5,
  'link' => '#',
 ],
 [
  'name' => 'Daniel G.',
  'title' => 'Fast Service, Fair Prices',
  'content' => '<p>I needed quick service and William made it happen.  These guys know all about great service!</p>',
  'stars' => 5,
  'link' => '#',
 ],
];


?>

<!-- Starts The Anago Difference section -->
<section class="pt-12 md:pt-16 lg:pt-[100px] pb-6 md:pb-9 lg:pb-[50px]">
 <div class="container">
  <?php
  // Block title component
  block_title(array(
   'additional-class' => 'mb-8 lg:mb-12 [&_h2]:mb-0',
   'maxwidth' => 1132,
   'block-align' => 'center',
   'content-align' => 'center',
   'title' => 'The Anago Difference',
  ));
  ?>
  <div class="flex flex-wrap justify-center -mx-2.5">
   <?php foreach ($testimonials as $testimonial): ?>
    <div class="w-full md:w-1/2 lg:w-1/3 px-2.5 mb-5">
     <div class="px-4 py-[30px] shadow-[0px_0px_10px_#0000001A] rounded-[5px] h-full flex flex-col justify-between">
      <div class="text-center">
       <h3><?php echo $testimonial['name']; ?></h3>
       <span class="block bg-primary mx-auto w-10 h-[1px] my-4"></span>
       <p><?php echo $testimonial['title']; ?></p>
       <div class="flex gap-[2px] justify-center mt-4 mb-6 [&_i]:text-[10px]">
        <?php for ($i = 0; $i < $testimonial['stars']; $i++): ?>
         <i class="icon-star"></i>
        <?php endfor; ?>
       </div>
      </div>
      <div class="text-center">
       <?php echo $testimonial['content'] ?>
      </div>
      <div class="text-center mt-5">
       <!-- <a href="<?php /* echo $testimonial['link']; */?>" class="btn border-none p-0 mt-auto text-sm">Read More</a> -->
      </div>
     </div>
    </div>
   <?php endforeach; ?>
  </div>
 </div>
</section>
<!-- Ends The Anago Difference section -->