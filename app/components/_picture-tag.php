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
 * @param boolean $args['lazy']
 */

function get_picture_tag($args) {
  $default_args = [
    'class'  => '',
    'decode' => 'async',
    'alt' => '',
    'lazy' => true,
  ];

  $_args = array_merge($default_args, $args);
  
  $name = $_args['name'];
  $path = $_args['path'];
  $alt = $_args['alt'];
  $decoding = $_args['decode'];

  $class = $_args['class'] === '' 
    ? '' 
    : 'class="' . $_args['class'] . '"';  

  $lazy = $_args['lazy'] ? ' loading="lazy"' : ''; 

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
      <source media="(max-width: 767.98px)" srcset="$src-xs.jpg" type="image/jpeg">
      <img $lazy src="$src-lg.jpg" alt="$alt" decoding="$decoding">
    </picture>
  EOL;

  return $html;
}
?>