</main>

<?php $social_media = acf_repeater('ss_social_media'); ?>
<footer class="site-footer bg-ss-blue-100 md:py-4 py-2">
  <div class="container">
    <?php if (!empty($social_media)) { ?>
      <ul class="flex items-center justify-center gap-6 max-xl:[&_img]:max-h-9 max-md:[&_img]:max-h-7">
        <?php foreach ($social_media as $sm) {
          $social_icon = acf_subfield($sm, 'ss_social_icon');
          $icon_url = wp_get_attachment_url($social_icon);
          $link = acf_subfield($sm, 'ss_link');
        ?>
          <li>
            <a href="<?php echo $link['url'] ? $link['url'] : '#'; ?>" target="_blank" class="hover:opacity-65">
              <img src="<?php echo !empty($icon_url) ? $icon_url : get_theme_file_uri('/lp/assets/images/facebook.svg'); ?>" alt="Facebook" width="32" height="32" loading="lazy">
            </a>
          </li>
        <?php
        } ?>
      </ul>
    <?php } ?>
  </div>
</footer>

</div> <!-- /.site-wrapper -->

<?php wp_footer(); ?>
</body>

</html>