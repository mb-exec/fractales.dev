<?php
  $pages = [
    // скрипты и стили для всех страниц
    'global' => [
      'scripts' => [
        'main'
      ],

      'styles' => [
        'style' => '1.0.0',
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
        'index-page' => '1.0.0'
      ],
      'og' => [
        'description' => '',
        'type' => 'website',
        'url' => get_site_url(),
        'img' => '',
      ]
    ],

    'about' => [
      'title' => 'Our team of specialists | fractales dev',
      'description' => 'We believe that the team is the most valuable asset in any business. Each of us is a professional in his field. This helps to separate tasks and work efficiently.',
      'scripts' => [
        'about',
      ],
      'styles' => [
        'about' =>  '1.0.0',
      ],
      'preloads' => [
        [
          'as' => '',
          'href' => ''
        ]
      ]
    ],
    
    'works' => [
      'title' => 'Our works | fractales dev ',
      'description' => "We take a conscious approach to every project and always immerse ourselves deeply in the client's business and work hard to achieve the result.",
      'scripts' => [],
      'styles' => [
        'works' =>  '1.0.0',
      ],
    ],

    'fuenf' => [
      'title' => 'FUENF X THE BRVTALIST collaboration | fractales dev',
      'description' => 'We created a modern landing page to present the new FUENF collection.',
      'scripts' => [],
      'styles' => [
        'case' =>  '1.0.0',
        'fuenf' =>  '1.0.0'
      ]
    ],

    'manifest' => [
      'title' => 'Digital media magazine MANIFEST | fractales dev',
      'description' => "We created a stylish women's digital magazine. Transformed the Instagram account into a large digital resource with well-thought-out section navigation.",
      'scripts' => [],
      'styles' => [
        'case' =>  '1.0.0',
      ],
    ],

    'gingerjoys' => [
      'title' => 'Author’s gifts GINGER JOYS | fractales dev',
      'description' => "We have created a unique design and developed a functional online store for marketplace for author's gifts.",
      'scripts' => [],
      'styles' => [
        'case' =>  '1.0.0',
      ],
    ],

    'orange' => [
      'title' => 'Beauty salon chain ORANGE | fractales dev',
      'description' => "We created a brand identity for a beauty salons chain and based on it we developed a redesign of their website.",
      'scripts' => [],
      'styles' => [
        'case' =>  '1.0.0',
      ],
    ],

    'bits' => [
      'title' => 'Digital marketing agency BITS | fractales dev',
      'description' => "We created a concise modern corporate website for an international design agency.",
      'scripts' => [],
      'styles' => [
        'case' =>  '1.0.0',
      ],
    ],

    'profitnes' => [
      'title' => 'Weight loss course PROFITNESS | fractales dev',
      'description' => "We made a web application that forms an individual nutrition and training plan, taking into account all user’s preferences and restrictions. ",
      'scripts' => [],
      'styles' => [
        'case' =>  '1.0.0',
      ],
    ],
  ]
?>