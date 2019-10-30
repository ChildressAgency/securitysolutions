<?php get_header(); ?>

  <div class="stripe hero-stripe gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-6  d-flex flex-column justify-content-center align-items-center align-items-md-end">
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
          <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/shield.png" alt=""/>
        </div>
      </div>
    </div>
  </div>

<?php get_template_part("template-parts/stripes");

if (have_rows("differences", "options")): ?>
  <div class="container-fluid shield pb-5">
    <h2 class="text-center py-4"><?php the_field("list_1_title") ?></h2>

    <div class="row justify-content-center">
      <?php while (have_rows("differences", "options")):
        the_row();
        ?>
        <a class="col-6 col-md-3 text-center mb-4" href="<?php echo get_permalink(get_page_by_path("about")) ?>">
          <img src="<?php the_sub_field("icon_yellow"); ?>"
               alt="<?php the_sub_field("title"); ?>"/>
          <h6 class="mt-3"><?php the_sub_field("title") ?></h6>
        </a>
      <?php
      endwhile; ?>
    </div>
  </div>
<?php endif;

if (have_rows("employees_list", "options")): ?>
  <div class="employees" style="background-image: url('<?php the_field("employees_background_image", "options"); ?>')">
    <div class="shade">
      <div class="container pb-5">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <h2 class="text-center mt-5 py-4 white"><?php the_field("list_2_title") ?></h2>
            <p><?php the_field("employees_header_text", "options"); ?></p>
          </div>
        </div>

        <ol class="row justify-content-center">
          <?php while (have_rows("employees_list", "options")):
            the_row();
            ?>
            <li class="col-12 col-lg-7 my-4"><?php the_sub_field("list_item") ?></li>
            <div class="w-100"></div>
          <?php
          endwhile; ?>
        </ol>
      </div>
    </div>
  </div>
<?php endif;


get_template_part("template-parts/contact");

get_footer();
