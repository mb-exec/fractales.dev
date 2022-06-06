<?php
  function get_img_preload($args) {
    $default_args = [
      'href' => '',
      'media_query' => '',
      'imagesrcset' => '',
      'imagesizes' => ''
    ];

    $_args = [];
    if (is_string($args)) {
      $_args['href'] = $args;
    } else {
      $_args = array_merge($default_args, $args);
    }

    $href = '';
    $media_attr = '';
    $srcset_attr = '';
    $sizes_attr = '';

    if (!empty($_args['href'])) {
      $href = ' href="' . $_args['href'] . '"';
    }

    if (!empty($_args['media_query'])) {
      $media_attr = ' media="' . $_args['media_query'] . '"';
    }

    if (!empty($_args['imagesrcset'])) {
      $srcset_attr = ' imagesrcset="' . $_args['imagesrcset'] . '"';
    }

    if (!empty($_args['imagesizes'])) {
      $sizes_attr = ' imagesizes="' . $_args['imagesizes'] . '"';
    }

    return '<link rel="preload" as="image"' . $href . $media_attr . $srcset_attr . $sizes_attr . '/>';
  }
?>