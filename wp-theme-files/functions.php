<?php
//add_action('wp_footer', 'show_template');
function show_template()
{
  global $template;
  print_r($template);
}

add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn()
{
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
    wp_register_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', false, null, true);
    wp_register_script('jquery-ui-touch-punch', '//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js', false, null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui');
    wp_enqueue_script('jquery-ui-touch-punch');
  }
}

add_action('wp_enqueue_scripts', 'cai_scripts');
function cai_scripts()
{
  wp_register_script(
    'bootstrap-popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_register_script(
    'cai-scripts',
    get_stylesheet_directory_uri() . '/js/custom-scripts.min.js',
    array('jquery', 'bootstrap-scripts'),
    '',
    true
  );

  wp_register_script(
    'simplebar-js',
    'https://cdnjs.cloudflare.com/ajax/libs/simplebar/4.2.3/simplebar.min.js',
    array(),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
  wp_enqueue_script('cai-scripts');
  wp_enqueue_script('simplebar-js');
}

add_filter('script_loader_tag', 'cai_add_script_meta', 10, 2);
function cai_add_script_meta($tag, $handle)
{
  switch ($handle) {
    case 'jquery':
      $tag = str_replace('></script>', ' integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-popper':
      $tag = str_replace('></script>', ' integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-scripts':
      $tag = str_replace('></script>', ' integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', $tag);
      break;
  }

  return $tag;
}

add_action('wp_enqueue_scripts', 'cai_styles');
function cai_styles()
{
  wp_register_style(
    'google-fonts',
    'https://fonts.googleapis.com/css?family=Maitree:400,700|Nunito+Sans:400,600,700|Nunito:700'
  );

  wp_register_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.6.3/css/all.css'
  );

  wp_register_style(
    'cai-fonts',
    get_stylesheet_directory_uri() . '/fonts.css'
  );

  wp_register_style(
    'cai-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_register_style(
    'jquery-ui-css',
    '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
  );

  wp_register_style(
    'simplebar-css',
    '//cdnjs.cloudflare.com/ajax/libs/simplebar/4.2.3/simplebar.min.css'
  );

  wp_enqueue_style('google-fonts');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('cai-fonts');
  wp_enqueue_style('jquery-ui-css');
  wp_enqueue_style('simplebar-css');
  wp_enqueue_style('cai-css');
}

add_filter('style_loader_tag', 'cai_add_css_meta', 10, 2);
function cai_add_css_meta($link, $handle)
{
  switch ($handle) {
    case 'fontawesome':
      $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
      break;
  }

  return $link;
}

add_action('after_setup_theme', 'cai_setup');
function cai_setup()
{
  register_nav_menus(array(
    'nav-menu' => 'Header Navigation'
  ));

  load_theme_textdomain('cai', get_stylesheet_directory_uri() . '/languages');
}

add_filter('wp_get_attachment_image_attributes', function ($attr) {
  if (isset($attr['class']) && 'custom-logo' === $attr['class'])
    $attr['class'] = 'custom-logo img-fluid';

  return $attr;
});

add_action('init', 'cai_create_post_types');
function cai_create_post_types()
{
  register_post_type("testimonial", array(
    "public" => true,
    "menu_icon" => "dashicons-awards",
    "labels" => array(
      "name" => "Testimonial",
      "singular" => "Testimonial",
      'search_items' => 'Search Testimonials',
      'all_items' => 'All Testimonials',
      'edit_item' => 'Edit Testimonial',
      'update_item' => 'Update Testimonial',
      'add_new_item' => 'Add New Testimonial',
      'menu_name' => 'Testimonials',
    ),
    'supports' => array('editor')
  ));
  register_post_type("service", array(
    "public" => true,
    "menu_icon" => "dashicons-businessman",
    "labels" => array(
      "name" => "Service",
      "singular" => "Service",
      'search_items' => 'Search Services',
      'all_items' => 'All Services',
      'edit_item' => 'Edit Service',
      'update_item' => 'Update Service',
      'add_new_item' => 'Add New Service',
      'menu_name' => 'Services',
    )
  ));
  flush_rewrite_rules();
}

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';
require_once dirname(__FILE__) . '/includes/custom-fields.php';
