<?php
  $manifest = [
    'title' => 'Digital media magazine for modern women',
    'tag' => 'Services',

    'card_descr' => 'Together with the customer, we transformed the Instagram account into a large digital resource with well-thought-out section navigation.',

    'imgs_folder' => $site_url . '/assets/img/cases/manifest/',
    'card_img_alt' => 'Manifest case preview',

    'page_link' => $site_url . '/cases/manifest',

    // для секции с основной информацией
    'hdr_img' => [
      'name' => 'hdr',
      'alt' => 'Desktop preview and 2 mobile screens'
    ],

    'descr' => "We prepared a stylish women's digital magazine for launch. Together with the customer, we transformed the Instagram account into a large digital resource with well-thought-out section navigation. Expanded the audience and increased brand awareness.",

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
    'about' => "Manifest is a digital media magazine about fashion, beauty, personal growth, expertise and philosophy of conscious consumption for modern women.<br><br>The magazine brings together experts from various fields - beauty, psychology, health, ecology and conscious consumption. The idea of ​​the project is to simply and easily tell about everything that is important for a modern woman.",

    'sections' => [
      [
        'name' => 'ABOUT PROJECT',
        'title' => '',
        'text' => "Manifest is a digital media magazine about fashion, beauty, personal growth, expertise and philosophy of conscious consumption for modern women.<br><br>The magazine brings together experts from various fields - beauty, psychology, health, ecology and conscious consumption. The idea of ​​the project is to simply and easily tell about everything that is important for a modern woman.",

        'img_name' => 'about',
        'img_alt' => ''
      ],
      [
        'name' => 'MAIN PAGE',
        'title' => 'Lightweight and uncluttered interface',
        'text' => "To present articles on the site, a broken grid was used for more interesting presentation of information. Between information sections with articles, a diluting section with a quote from a famous person was added, which changes every day and inspires the reader.<br><br>
        Also on the main page there is a section with expert articles, expert answers and the ability to subscribe to the newsletter.",

        'img_name' => 'main-page',
        'img_alt' => ''
      ],
      [
        'name' => 'WEEKLY HOROSCOPE',
        'title' => '',
        'text' => "Exclusive horoscope for all zodiac signs from a personal astrologer. Readers can find out what events await them each week.",

        'img_name' => 'horoscope',
        'img_alt' => ''
      ],
      [
        'name' => 'MANIFESTO PAGES',
        'title' => 'Separate pages with filtering for each category',
        'text' => "All articles on the site are divided into five large headings, which are also divided into narrower subheadings. It is easy to switch from one manifest to another on the site, and the presence of subcategories works like filtering.",

        'img_name' => 'manifesto-pages',
        'img_alt' => ''
      ],
      [
        'name' => 'ARTICLE PAGES',
        'title' => 'Considered possible options for presenting information',
        'text' => "To retain the user, we used a thematic selection of materials on the topic of the article and an endless scroll of articles similar to scrolling in social networks.<br><br>
        We thought over possible options for presenting information in the article. We set up heading levels, lists, tables, audio and video fragments, quotes, callouts from the text, and various image alignment options.",

        'img_name' => 'article-pages',
        'img_alt' => ''
      ],
      [
        'name' => 'AUTHORS',
        'title' => 'Emphasis on attracting authors',
        'text' => "We focused on attracting authors. We rendered a separate page with a convenient switching application form.<br><br>
        To make it profitable for authors to cooperate with the magazine, a separate author page has been developed, which contains brief information about the expert, photos and his articles and answers. So each author has his own column in the magazine, his own voice, his own name.<br><br>
        The emphasis on the \"Become an author\" page was also made in the menu, making the transition to the page in the form of a button that attracts attention.",

        'img_name' => 'authors',
        'img_alt' => ''
      ]
    ],

    'templates' => [
      'manifest/manifest-results.php',
    ]
  ]
?>