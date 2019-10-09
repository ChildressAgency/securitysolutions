<?php if (have_rows("stripes")): ?>
  <?php while (have_rows("stripes")):
    the_row();
    $image_alignment = get_sub_field("image_alignment");
    $image = get_sub_field("image");
    ?>
    <div class="stripe image-<?php echo $image_alignment ?>">
      <div class="container">
        <div class="row">
          <?php if ($image_alignment == "left"): ?>
            <div class="col-md-6">
              <div class="stripe-blue-left"></div>
              <div class="image">
                <img src="<?php echo $image ?>" alt=""/>
              </div>
            </div>
          <?php endif; ?>

          <div class="col-md-6  d-flex flex-column justify-content-center
              align-items-<?php echo $image_alignment == "right" ? "end" : "start" ?>">
            <div class="stripe-text">
              <h2><?php echo get_sub_field("title") ?></h2>
              <div>
                <?php echo get_sub_field("body") ?>
              </div>
            </div>
          </div>

          <?php if ($image_alignment == "right"): ?>
            <div class="col-md-6">
              <div class="stripe-blue-right"></div>
              <div class="image">
                <img src="<?php echo $image ?>" alt=""/>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile ?>
<?php endif ?>
