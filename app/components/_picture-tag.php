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
  global $webp_support, $site_url;

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
  $lazy = $_args['lazy'];

  $wrapper_class = $_args['class'] !== '' 
    ? 'class="' . $_args['class'] . '"'
    : '';

  $src = $path . $name;
  $file_ext = $webp_support ? 'webp' : 'jpg';

  $xs_width = getimagesize("$src-xs.jpg")[0];
  $sm_width = getimagesize("$src-sm.jpg")[0];
  $md_width = getimagesize("$src-md.jpg")[0];
  $lg_width = getimagesize("$src-lg.jpg")[0];
    
  $lazy_class = '';
  $src_set = '';  
  $data_srcset = '';

  if ($lazy) {
    $lazy_class = 'class="lazy"';
    $src_set = 'srcset="' . $site_url .'/assets/img/placeholder.svg"';
    $data_srcset = <<<EOL
      data-srcset="
        $src-xs.$file_ext {$xs_width}w,
        $src-sm.$file_ext {$sm_width}w,
        $src-md.$file_ext {$md_width}w,
        $src-lg.$file_ext {$lg_width}w"
    EOL;
    $data_srcset = str_replace(["\r", "    ", "\n"], '', $data_srcset);
  } else {
    $src_set = <<<EOL
      srcset="
        $src-xs.$file_ext {$xs_width}w,
        $src-sm.$file_ext {$sm_width}w,
        $src-md.$file_ext {$md_width}w,
        $src-lg.$file_ext {$lg_width}w"
    EOL;

    $src_set = str_replace(["\r", "    ", "\n"], '', $src_set);
  }

  $sizes = <<<EOL
    sizes="
      (max-width: 767.98px) 100px,
      (min-width: 767.98px) 720px,
      (min-width: 1023.98px) 960px,
      (min-width: 1279.98px) 1200px,
      100w"
  EOL;

  $sizes = str_replace(["\r", "    ", "\n"], '', $sizes);
  
  $html = <<<EOL
    <div $wrapper_class>
      <img $lazy_class
      src="$src-lg.$file_ext" 
      $src_set
      $data_srcset
      $sizes
      alt="$alt" decoding="$decoding"
      />
    </div>
  EOL;

  return $html;
}
?>