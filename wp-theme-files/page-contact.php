<?php get_header(); ?>

<?php get_template_part("template-parts/page-header") ?>

<?php get_template_part("template-parts/stripes") ?>

  <div class="py-5">
    <div class="container">
      <div class="row contact-info justify-content-center">
        <div class="col-sm-12 col-md-10 text-center">
          <h2><?php the_field("contact_top") ?></h2>

          <h1>
            <?php echo get_field("phone", "options") ?>
            <span class="d-none d-md-inline"> | </span>
            <a href="mailto:<?php echo get_field("email", "options") ?>" class="d-none d-md-block">
              <?php echo get_field("email", "options") ?>
            </a>
            <a href="mailto:<?php echo get_field("email", "options") ?>" class="d-block d-md-none">
              Email Us
            </a>
          </h1>

          <h2><?php the_field("contact_bottom") ?></h2>

        </div>
      </div>
    </div>
  </div>

<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
