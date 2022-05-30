<?php
  function get_style_link($args) {
    $default_args = [
      'name' => '',
      'base_path' => "/assets/css/",
      'preload' => false,
    ];

    $args = array_merge($default_args, $args);

    $name = $args['name'];
    $base_path = $args['base_path'];
    $preload = $args['preload'];

    $files = scandir(__ROOT__ . $base_path);
    $style_name = '';
    
    if ($files !== false) {
      foreach ($files as $file_name) {
        if (strpos($file_name, $name) !== false) {
          $style_name = $file_name;
        }
      }
    } else {
      return '';
    }

    $site_url = get_site_url();

    if ($preload) {
      return '<link rel="preload" as="style" href="' . $site_url . $base_path . $style_name .  '">';
    }

    return '<link rel="stylesheet" href="' . $site_url . $base_path . $style_name . '">';
  }
?>