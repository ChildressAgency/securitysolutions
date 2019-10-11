<?php if (get_field("title")): ?>
  <div class="container-fluid page-header">
    <div class="row">
      <div class="col-md-6 col-sm-12 title">
        <h1><?php echo get_field("title") ?></h1>
      </div>
      <div class="col-md-6 col-sm-12 image"
           style="background-image: url('<?php echo get_field("image") ?>')">
      </div>
    </div>
  </div>
<?php endif;

