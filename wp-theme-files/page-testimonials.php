<?php get_header(); ?>

<?php get_template_part("template-parts/page-header") ?>

<?php get_template_part("template-parts/stripes") ?>

<?php
$services = get_posts(array(
  'post_type' => 'testimonial',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'ASC'
));
$odd = false;
for ($i = 0; $i < count($services); $i += 2):
  $odd = !$odd; ?>
  <div class="container-fluid">
    <div class="row testimonials <?php echo $odd ? "flex-md-row-reverse" : "" ?>">
      <div class="col-sm-12 col-md-6 blue <?php echo $odd ? "justify-content-md-start" : "justify-content-md-end" ?>">
        <p class="text-left <?php echo $odd ? "text-md-right right" : "text-md-left" ?>">
          <?php echo $services[$i]->post_content ?>
          <br/>
          <b><?php echo get_field("author", $services[$i]->ID) ?></b>
        </p>
      </div>
      <div class="col-sm-12 col-md-6 <?php echo $odd ? "justify-content-md-end" : "justify-content-md-start" ?>">
        <p class="text-left <?php echo $odd ? "text-md-left" : "text-md-right right" ?>">
          <?php echo $services[$i + 1]->post_content ?>
          <br/>
          <b><?php echo get_field("author", $services[$i + 1]->ID) ?></b>
        </p>
      </div>
    </div>
  </div>
<?php endfor ?>

<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
