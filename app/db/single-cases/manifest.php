<?php
  $manifest = [
    'title' => 'Digital media magazine for modern women',
    'tag' => 'Services',

    'card_descr' => 'Together with the customer, we transformed the Instagram account into a large digital resource with well-thought-out section navigation.',

    'imgs_folder' => $site_url . '/assets/img/cases/manifest/',
    'card_img_alt' => 'Manifest case preview',

    'page_link' => $site_url . '/cases/manifest',

    // для секции с основной информацией
    'descr' => '',

    'services' => [
      'Web services',
      'UX/UI design',
    ],
    'technology' => [
      'CSS 3',
      'HTML 5',
      'WordPress',
    ],

    // секция about
    'about' => "Manifest — digital media magazine about fashion, beauty, personal growth, expertise and philosophy of conscious consumption for modern women.<br><br>The magazine brings together experts from various fields - beauty, psychology, health, ecology and conscious consumption. The idea of ​​the project is to simply and easily tell about everything that is important for a modern woman.",

    // секция design
    // 'design' => [
    //   'strong' => '',
    //   'text' => ""
    // ],

    // изображения для секций
    'imgs' => [
      'header' => [
        'name' => 'hdr',
        'alt' => 'Site preview on laptop'
      ],
      'about' => [
        'name' => 'about',
        'alt' => 'Site preview on mobile'
      ]
      ],

    'sections' => [
      [
        'title' => 'MAIN PAGE',
        'strong' => '',
        'text' => "",

        'img_name' => 'main-page',
        'img_alt' => ''
      ],
      [
        'title' => 'WEEKLY HOROSCOPE',
        'strong' => '',
        'text' => "",

        'img_name' => 'horoscope',
        'img_alt' => ''
      ],
      [
        'title' => 'MANIFESTO PAGES',
        'strong' => '',
        'text' => "",

        'img_name' => 'manifesto-pages',
        'img_alt' => ''
      ],
      [
        'title' => 'ARTICLE PAGES',
        'strong' => '',
        'text' => "",

        'img_name' => 'article-pages',
        'img_alt' => ''
      ],
      [
        'title' => 'AUTHORS',
        'strong' => '',
        'text' => "",

        'img_name' => 'authors',
        'img_alt' => ''
      ]
    ],

    'templates' => [
      'fuenf/fuenf-results.php',
    ]
  ]
?>