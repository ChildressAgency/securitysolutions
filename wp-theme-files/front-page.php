<?php get_header(); ?>

  <div class="stripe hero-stripe gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-6  d-flex flex-column justify-content-center align-items-end">
          <div class="stripe-text">
            <h2><?php echo get_field("title") ?></h2>
            <div>
              <?php echo get_field("body") ?>
            </div>

            <?php if (get_field("button_text")): ?>
              <a href="<?php echo get_field("button_destination") ?>" class="yellow-btn">
                <?php echo get_field("button_text") ?>
              </a>
            <?php endif ?>
          </div>
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_template_directory_uri() ?>/img/shield.png" alt=""/>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <?php get_template_part("template-parts/stripes") ?>
  </div>

<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
