<?php
  function get_img_preload($args) {
    $default_args = [
      'href' => '',
      'media_query' => ''
    ];

    $_args = [];
    if (is_string($args)) {
      $_args['href'] = $args;
    } else {
      $_args = array_merge($default_args, $args);
    }

    $media_attr = '';

    if (!empty($_args['media_query'])) {
      $media_attr = ' media="' . $_args['media_query'] . '"';
    }

    return '<link rel="preload" as="image" href="' . $_args['href'] . '"' . $media_attr . '/>';
  }
?>