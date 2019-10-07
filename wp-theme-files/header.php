<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo get_bloginfo('name');
    if (get_bloginfo('description')): echo ' | ' . get_bloginfo('description'); endif; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.typekit.net/lrf4jzs.css">
  <?php wp_head(); ?>
</head>
<body>
