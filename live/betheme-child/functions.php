<?php
// gravity form on landing page
gravity_form_enqueue_scripts(3, $is_ajax);

add_filter('gform_confirmation', function ($confirmation, $form) {
    $isRedirect = isset($confirmation['redirect']) && $confirmation['redirect'];

    $trackingCode = "<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        event: 'GFFormSubmission',
        formId: 'gf_{$form['id']}',
        formName: '{$form['title']}'"
        . ($isRedirect ? ",\neventCallback: function(){window.location.href = '" . esc_url_raw($confirmation['redirect']) . "';}" : "") . "
    });
</script>";

    if ($isRedirect) {
        $confirmation = $trackingCode;
    } else {
        $confirmation .= $trackingCode;
    }

    return $confirmation;
}, 10, 2);

/**
 * ACF
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));
}

//Gravity form redirection to thank you page
add_action('wp_footer', 'redirect_cf7');
function redirect_cf7()
{
?>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
            if ('35' == event.detail.contactFormId) {
                location = 'https://nexumgroupinc.com/thank-you/'
            } else if ('448' == event.detail.contactFormId) {
                location = 'https://nexumgroupinc.com/thank-you/';
            } else if ('408' == event.detail.contactFormId) {
                location = 'https://nexumgroupinc.com/payment/';
            } else {
                location = 'https://nexumgroupinc.com/confirmation/ ';
            }
        }, false);
    </script>
<?php
}