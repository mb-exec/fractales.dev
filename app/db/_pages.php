<?php
  $site_url = get_site_url();
  $webp_or_jpeg = $webp_support ? 'webp' : 'jpg';

  $pages = [
    // скрипты и стили для всех страниц
    'global' => [
      'scripts' => [
        'main'
      ],

      'styles' => [
        'style'
      ],
    ], 

    // настройки для каждой страницы    
     'index' => [
      'title' => 'Custom Web Design & Web Development | fractales dev',
      'description' => 'Our team of IT specialists create quality digital products that emphasize the individuality of your business, bring customers and enhance the corporate image of the company. We specialize in website and web service development, design and branding.',
      'scripts' => [
        'swiper-bundle.min', 
        'index-page',
      ],
      'styles' => [
        'index-page',
      ],
      'og' => [
        'type' => 'website',
        'url' => $site_url,
        'img' => "$site_url/assets/img/main-share.png",
        'img_type' => 'image/png',
      ]
    ],

    '404' => [
      'title' => '404 not found',
      'styles' => [
        'error-page'
      ]
    ],

    'policy' => [
      'title' => 'Policy',
      'styles' => [
        'policy'
      ]
    ],

    'about' => [
      'title' => 'Our team of specialists | fractales dev',
      'description' => 'We believe that the team is the most valuable asset in any business. Each of us is a professional in his field. This helps to separate tasks and work efficiently.',
      'scripts' => [
        'about',
      ],
      'styles' => [
        'about'
      ],
      'og' => [
        'type' => 'website',
        'url' => "$site_url/about",
        'img' => "$site_url/assets/img/main-share.png",
        'img_type' => 'image/png',
      ],
      'preloads' => [
        'imgs' => [
          [
            'href' => "$site_url/assets/img/about-page/hero-lg.$webp_or_jpeg",
            'media_query' => '(min-width: 767.98px)',
          ],
          [
            'href' => "$site_url/assets/img/about-page/hero-xs.$webp_or_jpeg",
            'media_query' => '(max-width: 767.98px)',
          ]
        ]
      ]
    ],
    
    'works' => [
      'title' => 'Our works | fractales dev ',
      'description' => "We take a conscious approach to every project and always immerse ourselves deeply in the client's business and work hard to achieve the result.",
      'scripts' => [],
      'styles' => [
        'works',
      ],
      'og' => [
        'type' => 'website',
        'url' => "$site_url/works",
        'img' => "$site_url/assets/img/main-share.png",
        'img_type' => 'image/png',
      ],
    ],

    'fuenf' => [
      'title' => 'FUENF X THE BRVTALIST collaboration | fractales dev',
      'description' => 'We created a modern landing page to present the new FUENF collection.',
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/fuenf",
        'img' => "$site_url/assets/img/cases/fuenf/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],

    'manifest' => [
      'title' => 'Digital media magazine MANIFEST | fractales dev',
      'description' => "We created a stylish women's digital magazine. Transformed the Instagram account into a large digital resource with well-thought-out section navigation.",
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/manifest",
        'img' => "$site_url/assets/img/cases/manifest/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],

    'gingerjoys' => [
      'title' => 'Author’s gifts GINGER JOYS | fractales dev',
      'description' => "We have created a unique design and developed a functional online store for marketplace for author's gifts.",
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/gingerjoys",
        'img' => "$site_url/assets/img/cases/gingerjoys/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],

    'orange' => [
      'title' => 'Beauty salon chain ORANGE | fractales dev',
      'description' => "We created a brand identity for a beauty salons chain and based on it we developed a redesign of their website.",
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/orange",
        'img' => "$site_url/assets/img/cases/orange/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],

    'bits' => [
      'title' => 'Digital marketing agency BITS | fractales dev',
      'description' => "We created a concise modern corporate website for an international design agency.",
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/bits",
        'img' => "$site_url/assets/img/cases/bits/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],

    'profitnes' => [
      'title' => 'Weight loss course PROFITNESS | fractales dev',
      'description' => "We made a web application that forms an individual nutrition and training plan, taking into account all user’s preferences and restrictions. ",
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/profitnes",
        'img' => "$site_url/assets/img/cases/profitnes/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],

    'imperator' => [
      'title' => 'Antique salon IMPERATOR GALLERY | fractales dev',
      'description' => "We developed an eCommerce landing page that conveys the atmosphere of the gallery and the exclusivity of the items.",
      'scripts' => [],
      'styles' => [
        'case',
      ],
      'og' => [
        'type' => 'article',
        'url' => "$site_url/cases/imperator",
        'img' => "$site_url/assets/img/cases/imperator/preview.jpg",
        'img_type' => 'image/jpeg',
      ],
    ],
  ];

  /**
   * Названия для главных картинок у каждого кейса 'hdr', 
   * добавляем прелоад для всех кейсов, чтобы не писать отдельно у каждого
   */
  foreach (
    ['fuenf', 'manifest', 'gingerjoys', 'orange', 'bits', 'profitnes', 'imperator-gallery'] as $case_name) {
    $pages[$case_name]['preloads']['imgs'] = [
      [
        'href' => "$site_url/assets/img/cases/$case_name/hdr-xs.$webp_or_jpeg",
        'media_query' => '(max-width: 767.98px)',
      ],
      [
        'href' => "$site_url/assets/img/cases/$case_name/hdr-sm.$webp_or_jpeg",
        'media_query' => '(min-width: 767.98px) and (max-width: 1023.98px)',
      ],
      [
        'href' => "$site_url/assets/img/cases/$case_name/hdr-md.$webp_or_jpeg",
        'media_query' => '(min-width: 1023.98px) and (max-width: 1279.98px)',
      ],
      [
        'href' => "$site_url/assets/img/cases/$case_name/hdr-lg.$webp_or_jpeg",
        'media_query' => '(min-width: 1279.98px)',
      ],
    ];
  }
?>