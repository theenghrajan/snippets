<?php
function block_title($args = [])
{
 // Default values
 $defaults = array(
  'additional-class' => '',
  'maxwidth' => 898,
  'subtitle' => '',
  'title' => '',
  'description' => '',
  'block-align' => 'left',   // center, left, right
  'content-align' => 'left', // center, left, right
  'variant' => 'primary',      // primary, secondary
 );

 // Merge user arguments with defaults
 $settings = array_merge($defaults, $args);

 // Tailwind classes for block alignment (works in all PHP versions)
 if ($settings['block-align'] === 'left') {
  $blockAlignClass = 'mr-auto';
 } elseif ($settings['block-align'] === 'right') {
  $blockAlignClass = 'ml-auto';
 } else {
  $blockAlignClass = 'mx-auto';
 }

 // Tailwind classes for text alignment
 if ($settings['content-align'] === 'left') {
  $contentAlignClass = 'text-left';
 } elseif ($settings['content-align'] === 'right') {
  $contentAlignClass = 'text-right';
 } else {
  $contentAlignClass = 'text-center';
 }

 // Variants (add more if needed)
 $variants = array(
  'primary' => array(
   'subtitle' => '',
   'title' => 'text-primary',
   'description' => ''
  ),
  'secondary' => array(
   'subtitle' => 'text-white',
   'title' => 'text-white',
   'description' => 'text-white'
  ),
 );

 // Fallback if variant is not found
 $variantColors = isset($variants[$settings['variant']]) ? $variants[$settings['variant']] : $variants['primary'];

 $additionalClass = $settings['additional-class'];
?>

 <header class="<?php echo $contentAlignClass; ?> <?php echo $blockAlignClass; ?> <?php echo $additionalClass; ?>" style="max-width: <?php echo $settings['maxwidth']; ?>px;">
  <?php if (!empty($settings['subtitle'])): ?>
   <span class="font-lead font-medium text-base <?php echo $variantColors['subtitle']; ?>">
    <?php echo $settings['subtitle']; ?>
   </span>
  <?php endif; ?>

  <?php if (!empty($settings['title'])): ?>
   <h2 class="mb-6 <?php echo $variantColors['title']; ?>">
    <?php echo $settings['title']; ?>
   </h2>
  <?php endif; ?>

  <?php if (!empty($settings['description'])): ?>
   <p class="<?php echo $variantColors['description']; ?>">
    <?php echo $settings['description']; ?>
   </p>
  <?php endif; ?>
 </header>
<?php
}
?>