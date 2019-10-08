<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo get_bloginfo('name');
    if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.typekit.net/kli5keq.css">
  <?php wp_head(); ?>
</head>
<body>

<header class="navigation">
  <div class="container">
    <div class="row align-items-left">
      <div class="logo col-md-3">
        <?php if (has_custom_logo()) the_custom_logo() ?>
      </div>

      <nav class="col navbar navbar-expand-md navbar-light pt-1">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'nav-menu',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'header-navbar',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </nav>

      <div class="col-md-2 social">

      </div>
    </div>
  </div>
</header>
