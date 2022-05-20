<?php
  $gingerjoys = [
    'title' => 'GINGERJOYS<br>author\'s gifts',
    'tag' => 'Online shopping',

    'card_descr' => 'We have created a unique design and developed a functional online store. In two days, we transferred 6,500 products to the site, reduced the transaction cycle to two clicks.',

    'imgs_folder' => $site_url . '/assets/img/cases/gingerjoys/',
    'card_img_alt' => 'Gingerjoys case preview',

    'page_link' => $site_url . '/cases/gingerjoys',

    // для секции с основной информацией
    'descr' => 'We have created a unique design and developed a functional online store.<br><br>In two days, we transferred 6,500 products to the site, reduced the transaction cycle to two clicks.',

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
    'about' => "Ginger Joys is a marketplace for author's gifts. All products are created with a unique design in a limited or single copy. Each of them has its own story, its own style and its own reason for inspiration. And what is even more important - their own soul, which the master or designer put there.",

    // секция design
    'design' => [
      'strong' => 'Emphasized the uniqueness of the brand',
      'text' => "We conveyed the special atmosphere of the store through a set of illustrations in the corporate colors."
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
      ],
      'preresult' => [
        'name' => 'overview',
        'alt' => ''
      ]
    ],
    // остальные секции
    'sections' => [
      [
        'title' => 'PRODUCT CATALOG',
        'strong' => 'Convenient search',
        'text' => "With the help of plain tiles, discreet colors and large images, you can quickly and conveniently find the product. We solved the search problem by using additional product filters by hashtags.",

        'img_name' => 'product-catalog',
        'img_alt' => 'product catalog preview'
      ],
      [
        'title' => 'PRODUCT CARD',
        'strong' => 'Detailed product description',
        'text' => "",

        'img_name' => 'product-card',
        'img_alt' => 'product card preview'
      ],
      [
        'title' => 'PURCHASE',
        'strong' => 'Focus on ease of ordering',
        'text' => "",

        'img_name' => 'purchase',
        'img_alt' => 'purchase preview'
      ],
      [
        'title' => 'AUTHORS',
        'strong' => 'Immersion in the history of the gift',
        'text' => "A section with photos of designers and their quotes that reflect the history of their crafts has been thought out.",

        'img_name' => 'authors',
        'img_alt' => 'authors preview'
      ]
    ],

    'templates' => [
      'gingerjoys/article-footer.php',
    ]
  ]
?>