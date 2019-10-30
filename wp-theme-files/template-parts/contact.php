<?php if (get_field("contact_form", "options")):
  $sliderOpts = get_field("budget_slider", "options");
  ?>
  <div class="contact-stripe text-center pb-5 pt-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12" id="contact_form"
             data-min="<?php echo $sliderOpts["min"]; ?>"
             data-max="<?php echo $sliderOpts["max"]; ?>"
             data-increment="<?php echo $sliderOpts["increment"]; ?>"
             data-default="<?php echo $sliderOpts["default"]; ?>">
          <h2 class="my-4">Let Us Know How We Can Help</h2>

          <?php
          $code = '[contact-form-7 id="' . get_field("contact_form", "options") . '"]';
          echo do_shortcode($code);
          ?>
        </div>
      </div>
    </div>
  </div>
<?php endif;
