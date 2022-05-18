<?php
/**
 * В папке должны быть файлы вида 
 * `name-{xs, sm, md, lg}.jpg`, `name-{xs, sm, md, lg}.webp`
 * @param array $args
 * 
 * @param string $args['class']
 * @param string $args['path'] путь к папке с изображениями
 * @param string $args['name'] название файла
 * @param string $args['alt'] 
 * @param string $args['decode'] default async [https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Img#attr-decoding]
 */

function get_picture_tag($args) {
  $default_args = [
    'class'  => '',
    'decode' => 'async',
    'alt' => '',
  ];

  $_args = array_merge($default_args, $args);

  $class = $_args['class'] === '' ? '' : 'class="' . $_args['class'] . '"'; 
  $decoding = $_args['decode'];
  $alt = $_args['alt'];
  $path = $_args['path'];
  $name = $_args['name'];

  $src = $path . $name;

  $html = <<<EOL
    <picture $class>
      <source media="(min-width: 1279.98px)" srcset="$src-lg.webp" type="image/webp">
      <source media="(min-width: 1279.98px)" srcset="$src-lg.jpg" type="image/jpeg">

      <source media="(min-width: 1023.98px)" srcset="$src-md.webp" type="image/webp">
      <source media="(min-width: 1023.98px)" srcset="$src-md.jpg" type="image/jpeg">

      <source media="(min-width: 767.98px)" srcset="$src-sm.webp" type="image/webp">
      <source media="(min-width: 767.98px)" srcset="$src-sm.jpg" type="image/jpeg">

      <source media="(max-width: 767.98px)" srcset="$src-xs.webp" type="image/webp">
      <img loading="lazy" src="$src-xs.jpg" alt="$alt" decoding="$decoding">
    </picture>
  EOL;

  return $html;
}
?>