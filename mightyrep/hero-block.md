```php
<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');
$cta = get_sub_field('cta');
?>

<section class="hero bg-blue-50 py-16">
    <div class="container mx-auto px-4">
        <?php if($subtitle): ?>
        <p class="text-blue-500 font-semibold mb-2"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>
        
        <h1 class="text-4xl font-bold mb-6"><?php echo esc_html($title); ?></h1>
        
        <div class="prose max-w-3xl mb-8">
            <?php echo wp_kses_post($content); ?>
        </div>
        
        <?php if($cta): ?>
        <a href="<?php echo esc_url($cta['url']); ?>" 
           target="<?php echo esc_attr($cta['target']); ?>" 
           class="btn btn-primary">
           <?php echo esc_html($cta['title']); ?>
        </a>
        <?php endif; ?>
    </div>
</section>
```