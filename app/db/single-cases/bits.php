<?php
  $bits = [
    'title' => 'BITS DIGITAL DESIGN<br>digital markeitng agency',
    'tag' => 'Corporate  website',
    'card_descr' => '',
    'imgs_folder' => $site_url . '/assets/img/cases/bits/',
    'card_img_alt' => '',
    'page_link' => $site_url . '/cases/bits',

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
    'about' => 'The main task  of the project is to create a website for digital markeitng agency with focus on international markets und business development in IT and Digital.',

    // секция design
    'design' => [
      'strong' => 'Emphasized the direction of the agency',
      'text' => "It was necessary to show manufacturability and modernity through the visual. To do this, we used an acid green color  on a dark background as a reference to digitalization. And moving geometric figures show dynamics and are  a reference to mathematics."
    ],

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

    'sections' => [
      [
        'title' => 'CASES',
        'strong' => 'Portfolio',
        'text' => "The key point of trust and professionalism is the presence of cases. We have added a case view on click without reloading the page. The user can immediately get acquainted with the communication.",

        'img_name' => 'cases',
        'img_alt' => ''
      ]
    ],

    /**
     * не стандартные секции
     */
    'templates' => [
      // 'name/name-results.php',
      // в шаблоне case.php путь для подключения будет выглядеть как parts/name/name-results.php
    ]
  ];
?>