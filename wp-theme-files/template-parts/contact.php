<?php if (get_field("contact_form", "options")): ?>
  <div class="contact-stripe text-center py-5">
    <?php
    $code = '[contact-form-7 id="' . get_field("contact_form", "options") . '"]';
    echo do_shortcode($code);
    ?>
  </div>
<?php endif;
