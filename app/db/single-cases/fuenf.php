<?php
  $fuenf = [
    'title' => 'FUENF X THE BRVTALIST collaboration catalog',
    'tag' => 'Online shopping',
    'card_descr' => 'With the help of a landing page, a new FUENF collection was presented. We focused on products and conveyed the atmosphere of the brand.',
    'imgs_folder' => $site_url . '/assets/img/cases/fuenf/',
    'card_img_alt' => 'Fuenf case preview',
    'page_link' => $site_url . '/cases/fuenf',

    // для секции с основной информацией
    'descr' => 'With the help of a landing page, a new FUENF collection was presented. We focused on products and conveyed the atmosphere of the brand. We thought over a product card and a convenient purchase process, and also implemented the possibility of buying in two ways - using PayPal or a credit card.',

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
    'about' => 'FUENF is a young and dynamic berlin-based brand, founded in 2017, that oscillates between streetstyle and nonchalant elegance, bringing digital culture and fashion together.<br><br>Fuenf and The Brvtalist collaboration introduces new classics – designed with attention to detail and sustainably produced.',

    // секция design
    'design' => [
      'strong' => 'Emphasized the uniqueness of the brand',
      'text' => "The singularity and modernity of education are concentrated with the help of animation, non-standard grid and graphic elements. Running lines with the brand name complement the overall style and contribute to the formation of the brand image. Large photos allow you to see the clothes in the smallest detail.<br><br>Thanks to the minimalistic design, we focus the user's attention on the photos of the new collection"
    ],

    // изображения для секций
    'imgs' => [
      'header' => [
        'name' => 'hdr',
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

    // остальные секции
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

    'templates' => [
      'fuenf/fuenf-results.php',
    ]
  ];
?>