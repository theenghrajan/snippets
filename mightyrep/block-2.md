```php
<?php
// ACF Fields
$title = get_field('ss_industries_title');
$industries = get_field('ss_industries'); // Repeater field
?>

<section class="list-item-section">
  <div class="container ss-container">
    <?php if ($title): ?>
      <div class="list-heading">
        <h2><?php echo esc_html($title); ?></h2>
      </div>
    <?php endif; ?>

    <div class="list-row">
      <?php if ($industries && is_array($industries)): ?>
        <?php foreach ($industries as $index => $industry): ?>
          <div class="col-list <?php echo ($index === 0) ? 'col-full' : ''; ?>">
            <div class="list-card">
              <?php if (!empty($industry['title'])): ?>
                <h3><?php echo esc_html($industry['title']); ?></h3>
              <?php endif; ?>

              <?php if (!empty($industry['content'])): ?>
                <div class="prose">
                  <?php echo wp_kses_post($industry['content']); ?>
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
