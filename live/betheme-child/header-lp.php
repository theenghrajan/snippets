<!DOCTYPE html>
<?php
if ($_GET && key_exists('mfn-rtl', $_GET)) :
    echo '<html class="no-js" lang="ar" dir="rtl">';
else :
?>
    <html class="no-js<?php echo mfn_user_os(); ?>" <?php language_attributes(); ?><?php mfn_tag_schema(); ?>>
<?php endif; ?>

<!-- head -->

<head>

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T28WMNZ');</script>
<!-- End Google Tag Manager -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192427032-18"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-192427032-18');
</script>
    <link rel="preload" as="image" href="https://nexumgroupinc.com/wp-content/uploads/2015/11/Umbrella_PointOfView.png">
    <!-- meta -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?php
    if (mfn_opts_get('responsive')) {
        if (mfn_opts_get('responsive-zoom')) {
            echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
        } else {
            echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />';
        }
    }
    ?>
    <?php //wp_head(); 
    ?>
    <title>Nexum Group INC</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>/favicon-16x16.png" sizes="16x16" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/lp-style.css">
    <!-- <link rel="stylesheet" href="<?php //echo get_stylesheet_directory_uri(); ?>/assets/css/lp-style-01.css"> -->
    <!-- <link rel="stylesheet" href="<?php //echo get_stylesheet_directory_uri(); ?>/assets/css/lp-style-02.css"> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script type='text/javascript' src='/wp-content/plugins/gravityforms/js/jquery.json-1.3.js'></script>
    <script type='text/javascript' src='/wp-content/plugins/gravityforms/js/gravityforms.min.js'></script>
</head>

<!-- body -->

<body>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T28WMNZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="lp-wrapper">
        <header id="lp-header" class="lp-header">
            <div class="container">
                <div class="lp-header__item">
                    <figure class="lp-header__logo">
                        <img width="245" height="69" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nexum-logo-white-alt.png" alt="Nexum Group Logo">
                    </figure>
                </div><!-- /.lp-header__item -->
                <div class="lp-header__item">
                    <div class="lp-header__contact">
                        <div class="lp-header__contact-item">
                            <a href="tel:8772851694" class="phone-button">
                                <span>Call Us For Any Enquiry</span>
                                (877) 285-1694
                            </a>
                        </div>
                        <div class="lp-header__contact-item">
                            <a href="#formBanner" class="btn btn-light btn-sm js-has-smooth">Request A Free Quote</a>
                        </div>
                    </div>
                </div><!-- /.lp-header__item -->
            </div>
        </header><!-- /.lp-header -->

        <main id="lp-main" class="lp-content">