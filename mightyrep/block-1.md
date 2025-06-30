```php
<?php
// ACF Fields
$title = get_field('ss_benefits_title');
$intro = get_field('ss_benefits_intro');
$benefits = get_field('ss_benefits_items'); // Repeater field
?>

<section class="media-section">
  <div class="container ss-container">
    <div class="media-row">
      <div class="media-info">
        <?php if ($title): ?>
          <h2><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if ($intro): ?>
          <div class="prose">
            <?php echo wp_kses_post($intro); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="list-item-section">
  <div class="container ss-container">
    <div class="list-row">
      <?php if ($benefits && is_array($benefits)): ?>
        <?php foreach ($benefits as $benefit): ?>
          <div class="col-list">
            <div class="list-card">
              <?php if (!empty($benefit['title'])): ?>
                <h3><?php echo esc_html($benefit['title']); ?></h3>
              <?php endif; ?>

              <?php if (!empty($benefit['content'])): ?>
                <div class="prose">
                  <?php echo wp_kses_post($benefit['content']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
```
