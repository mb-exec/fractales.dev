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

    // секция about
    'about' => '',

    // секция design
    'design' => [
      'strong' => '', // тег <strong></strong> вместо заголовка
      'text' => ""
    ],

    /**
     * изображения для секций
     * выводится через функцию get_picture_tag()
     * поля header \ about \ design используются в шаблоне, далее можно добавлять свои
     * так же необходимо называть и изображения для первых трех секции 
     */
    'imgs' => [
      'header' => [ 
        'name' => 'hdr', // префикс для изображения hdr-{xs, sm, md, lg}.jpg и 
        'alt' => 'Site preview on laptop'
      ],
      'about' => [
        'name' => 'about',
        'alt' => 'Site preview on mobile'
      ],
      'design' => [
        'name' => 'design',
        'alt' => ''
      ]
    ],

    /**
     * остальные секции
     * стандартный шаблон для секции, который состоит из заголовка блока 'title', 'strong' - сам заголовок
     * 'img_name' - название файла с изображением 
    */
    'sections' => [
      [
        'title' => 'PRODUCT CARD',
        'strong' => 'Detailed product description and size guide',
        'text' => "The singularity and modernity of education are concentrated with the help of animation, non-standard grid and graphic elements. Running lines with the brand name complement the overall style and contribute to the formation of the brand image. Large photos allow you to see the clothes in the smallest detail.",

        'img_name' => 'product-card',
        'img_alt' => ''
      ],
      [
        'title' => 'PURCHASE',
        'strong' => 'Focus on ease of ordering',
        'text' => "Despite the fact that we made a landing, it works like a full-fledged online store - you can select a product, view it from all sides and order.<br><br>You can pay for the goods through PayPal or immediately with a bank card using the Stripe service. We connected both payment methods using the API.",

        'img_name' => 'purchase',
        'img_alt' => ''
      ]
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