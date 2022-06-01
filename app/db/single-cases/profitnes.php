<?php
  $profitnes = [
    'title' => 'Personalized Nutrition Plan<br>and Workout Routine App',
    'tag' => 'Dashboards', 
    'card_descr' => 'We made a web application that based on the user filling out the questionnaire, forms an individual nutrition and training plan, taking into account all preferences and restrictions.',
    'imgs_folder' => $site_url . '/assets/img/cases/profitnes/',
    'card_img_alt' => '',
    'page_link' => $site_url . '/cases/profitnes',

    // для секции с основной информацией
    'hdr_img' => [
      'name' => 'hdr',
      'alt' => '4 mobile screens'
    ],

    'descr' => 'We made a web application that based on the user filling out the questionnaire, forms an individual nutrition and training plan, taking into account all preferences and restrictions.',

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
        'title' => '',
        'text' => "ProFitnessLife is a weekly healthy body course. Target audience – girls and women who want to lose weight or maintain their current weight. They do not want to search for information on their own and are ready to trust experienced instructors.",

        'img_name' => 'about',
        'img_alt' => 'Site preview on mobile'
      ],
      [
        'name' => 'QUESTIONNAIRE',
        'title' => 'An individual nutrition and training plan is formed on the basis of a questionnaire',
        'text' => "The users answer questions about their health and goals for the course. On the basis of personal data, effective programs for the course are compiled.<br><br>
        The Harrison-Benedict formula is used to calculate daily calories. It takes into account gender, height, weight and age. The goal of the participant also affects the calorie content, whether he wants to lose weight, maintain weight or gain muscle mass.<br><br>
        Before starting the course, the participant indicates food preferences: unwanted products can be excluded from the diet. The menu will be formed according to preferences.<br><br>
        The course forms the habit of proper nutrition: 5 meals a day in the form of breakfast, lunch, dinner and two snacks. Each dish has a detailed recipe.<br><br>
        The participant indicates the problem areas to which he wants to pay the most attention and possible restrictions for health reasons. As a result, trainings are selected individually for the characteristics of the participant.",

        'img_name' => 'questionnaire',
        'img_alt' => ''
      ],
      [
        'name' => 'PROGRESS',
        'title' => 'The user’s account reflects all the data of the participant',
        'text' => "The user’s account reflects all the data of the participant: height, weight, body parameters. Graphs and daily reports allow you to visually monitor your personal progress.<br><br>
        Also in the management system the participant sees the amount of  macronutrient and his daily calorie intake.<br><br>
        If desired, the user can upload the photos to see the result of training and proper nutrition.",

        'img_name' => 'progress',
        'img_alt' => ''
      ],
      [
        'name' => 'MEAL PLAN',
        'title' => 'Personal meal plan',
        'text' => "In the “Meal Plan” section, you can not only find a daily diet with recipes, but also nutrition rules and tips for choosing products.<br><br>
        A dish in the menu can be replaced - the system will offer you the most suitable analogue in terms of calorie content.",

        'img_name' => 'meal-plan',
        'img_alt' => ''
      ],
      [
        'name' => '',
        'title' => 'Product cart',
        'text' => "According to your diet, the service automatically generates a list of products for the week that you need to prepare meals.<br><br>
        Tips duplicate the list of allowed products and make the process of buying products more convenient.",

        'img_name' => 'product-card',
        'img_alt' => ''
      ],
      [
        'name' => 'TRAINING PLAN',
        'title' => 'Workout video',
        'text' => "Each week, the participant has three workouts, each of which is divided into separate exercises. Within one workout there are also warm-up and stretching exercises. For ease of viewing, all videos can be played in a convenient video player",

        'img_name' => 'training-plan',
        'img_alt' => ''
      ],
    ],

    /**
     * не стандартные секции
     */
    'templates' => [
      'profitnes/article-footer.php',
    ]
  ];
?>