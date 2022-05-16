<?php
function get_script_link($args)  
{
  $default_args = [
    'name' => '', 
    'ver' => '1.0.0', 
    'base_path' => "/assets/js/",
  ];

  $args = array_merge($default_args, $args);

  $name = $args['name'];
  
  if ( $name === '' ) {
    return false;
  }
  
  $site_url = get_site_url();
  $base_path = $args['base_path'];
  $ver = $args['ver'];

  return '<script defer src="' .  $site_url . $base_path . $name . '.js?ver=' . $ver . '"></script>';
}
