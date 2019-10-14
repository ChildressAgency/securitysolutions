<?php get_header(); ?>

<?php get_template_part("template-parts/page-header");

the_post();

$services = new WP_Query(array(
  'post_type' => 'service',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'ASC'
));
?>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <h2><?php the_title() ?></h2>

        <?php the_content() ?>
      </div>
    </div>
  </div>

  <div class="other-services py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <h2>Other Services</h2>
        </div>
        <?php while ($services->have_posts()): $services->the_post(); ?>
          <div class="col-12 col-md-5">
            <a href="<?php the_permalink(); ?>">
              <?php the_title() ?>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>


<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
