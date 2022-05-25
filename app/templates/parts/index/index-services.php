<?php
  $services = [
    [
      'title' => 'Websites development',
      'descr' => 'We provide solutions ranging from development of the front end user experience to the back end API connections and application builds.',
      'list' => [
        'Websites',
        'eCommerce',
        'Directory & Listings'
      ]
    ],
    [
      'title' => 'Design and Branding',
      'descr' => 'We create a holistic image of the company that distinguishes it from competitors. Through visual, we convey the ideas of the brand and the values ​​of the company to the consumer.',
      'list' => [
        'Brand Identity',
        'Graphic Design',
        'Motion Design'
      ]
    ],
    [
      'title' => 'Software Development',
      'descr' => 'We develop technological solutions for non-standard tasks: web platforms, enterprise web development, back-end & custom software. We analyze customer tasks and take it into account in the software architecture development.',
      'list' => [
        'PWA',
        'Web Services',
        'Management Platforms'
      ]
    ],
    [
      'title' => 'UX/UI design',
      'descr' => 'We pay close attention to UX design because we know that it directly influences user decisions. We always conduct UX research and analyze user behavior in order to help him navigate the site and get the desired result.',
      'list' => [
        'UX reserch',
        'Wireframes',
        'Web & Mobile Interfaces'
      ]
    ],
    [
      'title' => 'Data Engineering',
      'descr' => 'We help effectively store, manage, and leverage critical information assets. Our experts batch and analyze your data in real time to produce actionable insights through predictive analytics and machine learning, making business transformation possible.',
      'list' => [
        'Big Data',
        'Internet of Things',
        'Machine Learning'
      ]
    ],
  ]
?>

<section id="services" class="services sect">
  <div class="container">
    <h2 class="sect__title">What we do?</h2>

    <ol class="services__list">
      <?php 
        $i = 0;
        foreach ( $services as $s ) : 
        $animation_direction = $i % 2 ? 'appear-left' : 'appear-right';
      ?>
        <li class="service text-ls" data-animation="<?php echo $animation_direction ?>">
          <h3 class="service__title"><?php echo $s['title'] ?></h3>
          <div class="service__bottom">            
            <p class="service__descr"><?php echo $s['descr'] ?></p>
            <ul class="service__list">
              <?php foreach ( $s['list'] as $item ) : ?>
                <li class="service__list-item"><?php echo $item ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </li>
      <?php 
        $i++;
        endforeach 
      ?>
    </ol>
  </div>
</section>