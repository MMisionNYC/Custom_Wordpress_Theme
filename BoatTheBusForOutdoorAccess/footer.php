    <!-- footer -->
    <footer class="footer">
<a href="<?php echo site_url('/home'); ?>">
<img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-footer-callout-image')) ?>" alt="Logo" class="footer__logo footer__item" /></a>

    <div class="organize__footerlinks">
      <li class="footer__item socialfoot">
      <a href="https://www.facebook.com/theBOATbus">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-footer-callout-facebooklogo')) ?>" class="footersociallogo" />
        <div class="footertext"><?php echo get_theme_mod('boat-footer-callout-facebook') ?></div></a>
      </li>
      <li class="footer__item socialfoot">
      <a href="https://www.instagram.com/theBOATbus/">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-footer-callout-instagramlogo')) ?>" class="footersociallogo" />
        <div class="footertext"><?php echo get_theme_mod('boat-footer-callout-instagram') ?></div></a>
      </li>
      <li class="footer__item socialfoot">
      <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FtheBOATbus">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-footer-callout-twitterlogo')) ?>" class="footersociallogo" />
      <div class="footertext"><?php echo get_theme_mod('boat-footer-callout-twitter') ?></div></a>
      </li>
      <li class="footer__item socialfoot">
      <a href="https://www.paypal.com/donate?token=4cJNOSOMzIGavtKCBPKTCHn9V1j4Es_bq_qoazkcw9lsAJhO9hnQughbKqk0EuR4o168zz1FZ3AyinqG">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-footer-callout-donatelogo')) ?>" class="footersociallogo donatelogo" />
      <div class="footertext"><?php echo get_theme_mod('boat-footer-callout-donate') ?></div></a>
      </li>
  </div>
<?php wp_footer(); ?>
    </footer>
  </body>
    </html>
