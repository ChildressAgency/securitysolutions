<?php get_header(); ?>

<?php get_template_part("template-parts/page-header") ?>

<?php get_template_part("template-parts/stripes") ?>

<?php

$services = new WP_Query(array(
  'post_type' => 'service',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'ASC'
));

?>

  <div class="stripe services-list">
    <div class="container">
      <div id="services-carousel" class="carousel slide carousel-fade row" data-ride="carousel">
        <div class="col-12 col-md-6 p-0">
          <div class="stripe-blue-left">
            <div class="stripe-text">
              <div id="services" class="services-anchor"></div>
              <h2 class="py-3">Our Services:</h2>

              <ul class="carousel-indicators">
                <?php foreach ($services->posts as $i => $svc): ?>
                  <li data-target="#services-carousel" data-slide-to="<?php echo $i ?>"
                      class="<?php if ($i === 0) echo "active" ?>">
                    <?php echo $svc->post_title ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>

        <div class="carousel-inner col-12 col-md-6">
          <?php foreach ($services->posts as $i => $svc): ?>
            <div class="carousel-item <?php if ($i === 0) echo "active" ?>">
              <div class="carousel-caption">
                <p>
                  <?php echo get_field("short_description", $svc->ID) ?>
                </p>
                <a class="yellow-btn" href="<?php the_permalink($svc->ID) ?>">Learn More</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>


<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
