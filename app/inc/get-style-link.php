<?php
  function get_style_link($name, $ver = '1.0.0', $base_path = "/assets/css/") {
    $site_url = get_site_url();

    return '<link rel="stylesheet" href="' . $site_url . $base_path . $name . '.css?ver=' . $ver . '">';
  }
?>