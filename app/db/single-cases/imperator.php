<?php
  $imperator = [
    'title' => 'IMPERATOR GALLERY<br>e-commerce platform',
    'tag' => 'Online shopping',
    'card_descr' => 'We create a convenient and attractive e-commerce platform for searching and buying antique goods.',
    'imgs_folder' => $site_url . '/assets/img/cases/imperator/',
    'card_img_alt' => 'Fuenf case preview',
    'page_link' => $site_url . '/cases/imperator',

    // для секции с основной информацией
    'hdr_img' => [
      'name' => 'hdr',
      'alt' => ''
    ],

    'descr' => 'Store for collectors with a wide selection of antiques and vintage items. All copies are purchased at well-known world auctions with a guarantee of authenticity and quality, and before being on the shelves and showcases, each item passes through the hands of experts.',

    'services' => [
      'Websites development',
      'UX/UI design',
    ],
    'technology' => [
      'CSS 3',
      'HTML 5',
      'WordPress',
    ],

    // остальные секции
    'sections' => [
      [
        'name' => 'ABOUT PROJECT',
        'title' => '',

        'text' => "It is necessary to create a landing page for an antique salon. The visual component should make site visitors feel the value of the product, its individuality and features.",

        'img_name' => 'about',
        'img_alt' => ''
      ],
      [
        'name' => 'DESIGN',
        'title' => 'Inspired by the charm of past epochs',
        'text' => "The main task was to develop a landing page that would convey the atmosphere of the gallery and the exclusivity of the items. The magnificent antique Forum was chosen as an accent font to further emphasize the value and status of the project.<br><br>
        Shades of brown were used as colors. Noble brown as accents emphasizes the aesthetics and uniqueness of the production.",

        'img_name' => 'design',
        'img_alt' => ''
      ],
      [
        'name' => 'CATALOG',
        'title' => 'Comfortable and attractive',
        'text' => "To visually show the importance and individuality of the items, large images were used and the cards were placed at a great distance from each other. We added a hover effect with brief information about the product.",

        'img_name' => 'catalog',
        'img_alt' => ''
      ],
    ],

    'templates' => [
      'imperator/imperator-results.php',
    ]
  ];
?>