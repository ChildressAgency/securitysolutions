<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo get_bloginfo('name');
    if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

<header class="navigation">
  <div class="container">
    <div class="row flex-wrap-reverse flex-md-wrap align-items-left">
      <div class="logo col-12 col-md-3 mt-3 text-center text-md-left">
        <?php if (has_custom_logo()) the_custom_logo() ?>
      </div>

      <nav class="col navbar navbar-expand-md navbar-light p-0">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'nav-menu',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'header-navbar',
          'menu_class' => 'nav navbar-nav flex-column flex-md-row align-items-stretch',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </nav>

      <div class="col-12 d-flex d-md-none navbar-light justify-content-center align-items-center pt-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="social col-12">
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
</header>
