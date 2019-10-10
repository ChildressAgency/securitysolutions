<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 text-center pt-5 py-3">

        <div class="container pb-3">
          <div class="row">
            <div class="logo text-center col-md-6 col-sm-12">
              <?php if (has_custom_logo()) the_custom_logo() ?>
            </div>
            <div class="col-md-6 col-sm-12 text-left">
              <nav class="col navbar navbar-expand-md navbar-light pt-1">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'nav-menu',
                  'depth' => 2,
                  'container' => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'header-navbar',
                  'menu_class' => 'nav navbar-nav flex-column',
                  'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                  'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>
              </nav>
            </div>
          </div>
        </div>

        <small class="copyright pt-5">Copyright &copy; <?php echo date("Y"); ?> | Website Designed by
          <a href="https://childressagency.com/">Childress Agency</a></small>
      </div>
      <div class="col-md-3 col-sm-12 social">
        <?php if (get_field("facebook_url", "option")) : ?>
          <a href="<?php echo get_field("facebook_url", "option") ?>">
            <i class="fab fa-facebook-square"></i>
          </a>
        <?php endif ?>

        <?php if (get_field("linkedin_url", "option")) : ?>
          <a href="<?php echo get_field("linkedin_url", "option") ?>">
            <i class="fab fa-linkedin"></i>
          </a>
        <?php endif ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
