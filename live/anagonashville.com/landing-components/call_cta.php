<?php
function call_cta($args = array())
{
 // Default values
 $defaults = array(
  'additional-class' => '',             // Custom wrapper class
  'phone' => '615-813-4711',            // Displayed phone number
  'tel' => '6158134711',                // Used in tel: link (digits only)
 );

 $settings = array_merge($defaults, $args);

 // Escape all dynamic content
 $wrapperClass = htmlspecialchars($settings['additional-class'], ENT_QUOTES, 'UTF-8');
 $phone = htmlspecialchars($settings['phone'], ENT_QUOTES, 'UTF-8');
 $tel = htmlspecialchars(preg_replace('/[^0-9]/', '', $settings['tel']), ENT_QUOTES, 'UTF-8');
?>

 <div class="flex items-center group relative <?php echo $wrapperClass; ?>">
  <div class="max-sm:hidden border-white border-solid border rounded-full p-1">
   <span class="size-11 [&_i]:text-primary bg-white stretch-link rounded-full flex items-center justify-center group-hover:bg-primary/5 group-hover:[&_i]:text-white">
    <i class="icon-phone" aria-hidden="true"></i>
   </span>
  </div>
  <div class="flex-1 [&_span]:transition-all [&_span]:duration-300 pl-2 lg:pl-3">
   <span class="text-ss-gray-900 lg:text-2xl font-bold text-white group-hover:text-white">
    <?php echo $phone; ?>
   </span>
  </div>
  <a href="tel:<?php echo $tel; ?>" class="stretched-link" aria-label="Call <?php echo $phone; ?>"></a>
 </div>

<?php
}
?>