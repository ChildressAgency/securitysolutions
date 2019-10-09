<?php get_header(); ?>

  <div class="hero-stripe gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <img src="<?php echo get_template_directory_uri() ?>/img/shield.png" style="height: 460px;" alt=""/>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <?php get_template_part("template-parts/stripes/stripes") ?>
  </div>

<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
