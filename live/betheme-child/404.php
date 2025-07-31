<?php
get_header();
?>
<section class="error404-page">
    <div class="container">
        <div class="error404-wrap">
            <figure class="error404-img">
                <img width="685" height="514" loading="lazy" src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/404-image.png" alt="404 image">
            </figure>
            <div class="error404-text">
                <p>The page you requested could not be found. We're working on it :)</p>
            </div>
            <div class="back-btn">
                <a href="/" class="button button_theme button_theme--alt button-lg">Go to Homepage</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
