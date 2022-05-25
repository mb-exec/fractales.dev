<?php
  $services = [
    [
      'title' => 'Websites development',
      'descr' => 'We create websites that highlight the brand identity, bring customers and enhance the corporate image of the company.',
      'list' => [
        'Corporate website',
        'Online shopping',
        'Landing Pages'
      ]
    ],
    [
      'title' => 'Design and branding',
      'descr' => 'We create a holistic image of the company that reflects its values and distinguishes it from competitors. We convey brand ideas to the consumer through metaphors.',
      'list' => [
        'Corporate identity',
        'Graphic design',
        'Brand packaging'
      ]
    ],
    [
      'title' => 'Web services',
      'descr' => 'We develop technological solutions for non-standard tasks: portals, services, personal accounts. We explore JTBD and CJM and understand what drives users.',
      'list' => [
        'Dashboards',
        'Services',
        'Personal accounts'
      ]
    ],
    [
      'title' => 'UX/UI design',
      'descr' => 'We develop technological solutions for non-standard tasks: portals, services, personal accounts. We explore JTBD and CJM and understand what drives users.',
      'list' => [
        'UX reserch',
        'Prototype',
        'Design concept'
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