<?php get_header(); ?>

<?php get_template_part("template-parts/page-header") ?>

<?php get_template_part("template-parts/stripes") ?>

  <div class="py-5">
    <div class="container">
      <div class="row contact-info justify-content-center">
        <div class="col-sm-12 col-md-10 text-center">
          <h2>Reach us by phone or through email.</h2>

          <h1>
            <?php echo get_field("phone", "options") ?> |
            <a href="mailto:<?php echo get_field("email", "options") ?>">
              <?php echo get_field("email", "options") ?>
            </a>
          </h1>

          <h2>Or fill out our pre-generated form below and we will contact you back as soon as possible.</h2>

        </div>
      </div>
    </div>
  </div>

<?php get_template_part("template-parts/contact") ?>

<?php get_footer();
