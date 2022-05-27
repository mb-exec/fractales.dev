<?php
  $orange = [
    'name' => 'ORANGE<br>beauty salon chain',
    'tag' => 'Services', 
    'card_descr' => 'We did a redesign: we changed the architecture of the site and the corporate identity.',
    'imgs_folder' => $site_url . '/assets/img/cases/orange/',
    'card_img_alt' => '',
    'page_link' => $site_url . '/cases/orange',

    // для секции с основной информацией
    'hdr_img' => [
      'name' => 'hdr',
      'alt' => '4 mobile screens'
    ],

    'descr' => 'We did a redesign: we changed the architecture of the site and the corporate identity.<br><br>
    Increased the number of visitors on the site, increased customer loyalty to the company.',

    'services' => [
      'Websites development', 
      'UX/UI design',
    ],
    'technology' => [
      'CSS 3',
      'HTML 5',
      'WordPress',
    ],

    'sections' => [
      [
        'name' => 'ABOUT PROJECT',
        'name' => '',
        'text' => "Orange is working offline business with 10 beauty salons. The value of the service is a friendly atmosphere, long—term relationships with customers, individual approach.<br><br>
        more than 100 services that differ in configuration and cost from salon to salon.",

        'img_name' => 'about',
        'img_alt' => 'Site preview on mobile'
      ],
      [
        'name' => 'SERVICE SECTION',
        'title' => 'Emphasized the uniqueness of the service',
        'text' => "We created a special emotion, atmosphere around each service and presented a section with services in the form of a familiar Instagram feed, which helps attract new customers and increase brand confidence.",

        'img_name' => 'service-section',
        'img_alt' => ''
      ],
      [
        'name' => 'SERVICE PAGE',
        'title' => 'Detailed description of the service',
        'text' => "We paid special attention to the \"Work\" section to encourage the client to book an appointment. We brought out prices for each service and predicted the atmosphere of the salon, due to the interior photo on the background. On the service pages, the client has an opportunity to take advantage of current promotions or go to the brand's cosmetics store.",

        'img_name' => 'service-page',
        'img_alt' => ''
      ],
      [
        'name' => 'MASTERS',
        'title' => 'Focus on the ease of choice',
        'text' => "There are more than 250 masters in the staff of the salon, so convenient sorting and a separate section of information for each specialist have been thought out. We give the client the opportunity to book an appointment not only for a specific service, but also for a specific master.",

        'img_name' => 'masters',
        'img_alt' => 'master popup preview'
      ],
      [
        'name' => 'SERVICE CARD',
        'title' => 'Description and advantages',
        'text' => "Since the salon has more than 100 services, we created a compact form of cards with a visual reflection, a detailed description and an indication of the duration of services. Some services do not have a separate page, so all cards reveal the essence of the service and lead the client to book an appointment.",

        'img_name' => 'service-card',
        'img_alt' => ''
      ],
      [
        'name' => 'SALONS SECTION',
        'title' => 'Convenience of choice',
        'text' => "Special attention was paid to the section with salons. You can quickly sort by metro and go to the information for a specific salon.",

        'img_name' => 'salon',
        'img_alt' => ''
      ],
      [
        'name' => 'SORTING',
        'title' => 'Quick search',
        'text' => "In cosmetology, services are divided into several types between which you can easily switch and sort by the purpose of the visit.",

        'img_name' => 'sorting',
        'img_alt' => ''
      ],
      [
        'name' => 'STOCK',
        'title' => 'Advantageous offer',
        'text' => "On the pages of services we offer the client the opportunity to take advantage of current promotions.",

        'img_name' => 'stock',
        'img_alt' => ''
      ]
    ],
    
    'templates' => [
      'orange/article-footer.php',
    ]
  ];
?>