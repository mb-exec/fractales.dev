<?php
  // информация для шаблона ./app/templates/case.php
  $name = [
    'title' => '',
    'tag' => 'Online shopping', // [Online shopping, Corporate identity & website] и т.п.
    'card_descr' => '',
    'imgs_folder' => $site_url . '/assets/img/cases/%name%/',
    'card_img_alt' => '',
    'page_link' => $site_url . '/cases/%name%',

    // для секции с основной информацией
    'hdr_img' => [
      'name' => 'hdr',
      'alt' => '',
    ],
    'descr' => '',

    'services' => [
      'Websites development', 
      'UX/UI design',
    ],
    'technology' => [
      'CSS 3',
      'HTML 5',
      'WordPress',
    ],

    /**
     * остальные секции
     * стандартный шаблон для секции, который состоит из заголовка блока 'title', 'strong' - сам заголовок
     * 'img_name' - название файла с изображением 
    */
    'sections' => [
      [
        'name' => 'PRODUCT CARD',
        'title' => 'Detailed product description and size guide',
        'text' => "The singularity and modernity of education are concentrated with the help of animation, non-standard grid and graphic elements. Running lines with the brand name complement the overall style and contribute to the formation of the brand image. Large photos allow you to see the clothes in the smallest detail.",

        'img_name' => 'product-card', // <- название изображения `product-card.jpg`
        'img_alt' => ''
      ],
    ],

    /**
     * не стандартные секции
     */
    'templates' => [
      'name/name-results.php',
      // в шаблоне case.php путь для подключения будет выглядеть как parts/name/name-results.php
    ]
  ];
?>