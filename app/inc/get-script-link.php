<?php
  function get_script_link($args) {
    $default_args = [
      'name' => '',
      'base_path' => "/assets/js/",
      'preload' => false,
    ];

    $args = array_merge($default_args, $args);

    $name = $args['name'];
    $base_path = $args['base_path'];
    $preload = $args['preload'];

    $files = scandir(__ROOT__ . $base_path);
    $script_name = '';
    
    if ($files !== false) {
      foreach ($files as $file_name) {
        if (strpos($file_name, $name) !== false) {
          $script_name = $file_name;
        }
      }
    } else {
      return '';
    }
    
    $site_url = get_site_url();

    if ($preload) {
      return '<link rel="preload" as="script" href="' . $site_url . $base_path . $script_name .  '">';
    }

    return '<script defer src="' .  $site_url . $base_path . $script_name . '"></script>';
  }
?>