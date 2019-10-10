<?php

add_action('acf/init', 'cai_add_custom_fields');
function cai_add_custom_fields()
{
  acf_add_options_page("Theme Settings");
}
