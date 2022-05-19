<?php
  function get_script_link($name, $ver = '1.0.0', $base_path = "/assets/js/") {
    $site_url = get_site_url();

    return '<script defer src="' .  $site_url . $base_path . $name . '.js?ver=' . $ver . '"></script>';
  }
?>