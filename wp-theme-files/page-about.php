<?php get_header(); ?>

<?php get_template_part("template-parts/page-header") ?>

<?php get_template_part("template-parts/stripes");

if (have_rows("differences", "options")): ?>
  <div class="container pb-5">
    <h2 class="text-center py-4">Ways We're Different</h2>

    <div class="row justify-content-center">
      <?php while (have_rows("differences", "options")):
        the_row();
        ?>
        <div class="col-sm-12 col-md-6 mb-4 d-flex flex-column flex-lg-row text-center text-lg-left align-items-center">
          <img class="float-md-left m-4"
               src="<?php the_sub_field("icon_blue"); ?>"
               alt="<?php the_sub_field("title"); ?>"/>
          <div class="content">
            <h3 class="mb-3"><?php the_sub_field("title") ?></h3>
            <p><?php the_sub_field("description") ?></p>
          </div>
        </div>
      <?php
      endwhile; ?>
      <div class="col-12 text-center">
        <a class="yellow-btn" href="<?php echo get_permalink(get_page_by_path("contact")) ?>">Contact Us</a>
      </div>
    </div>
  </div>
<?php endif;

get_template_part("template-parts/contact") ?>

<?php get_footer();
