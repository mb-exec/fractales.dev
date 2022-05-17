<?php
$steps_list = [
  [
    'icon' => 'focus',
    'title' => 'Focus on the user',
    'descr' => 'We analyze the target audience and conduct research. We make the product convenient and functional for those who will interact with it.'
  ],
  [
    'icon' => 'stack',
    'title' => 'Optimal Tech Stack',
    'descr' => 'We select a stack of technologies depending on the requirements for the project, we find the most relevant and effective solutions. This approach allows you to get a convenient and safe product that can be easily scaled.'
  ],
  [
    'icon' => 'fill',
    'title' => 'Fill with meaning',
    'descr' => 'Regardless of the subject matter and business objectives, the user interacts with the resource through visuals and text. We create a clear image of the company and talk to a person in a human language.'
  ],
  [
    'icon' => 'develop',
    'title' => 'Develop and promote',
    'descr' => 'We do everything necessary for the site to bring customers and make a profit. We think over a strategy, predict budgets, implement end-to-end analytics, set up and run advertising campaigns.'
  ],
];

$team = $db['team'];
?>

<section class="about sect text-ls">
  <div class="container">
    <h2 class="sect__title">About us</h2>

    <div class="about__inner">
      <h3 class="about__title about__title--steps">HOW WE WORK</h3>

      <div class="about__content">
        <div class="about__steps">
          <div class="swiper-wrapper">
            <?php foreach ( $steps_list as $step ) : 
              $icon = $site_url . '/assets/img/icons/steps-' . $step['icon'] . '.svg';
              $title = $step['title'];
              $descr = $step['descr'];
            ?>

              <div class="step swiper-slide">
                <img src="<?php echo $icon ?>" alt="<?php echo $title ?>" class="step__icon">
                <h4 class="step__title"><?php echo $title ?></h4>
                <p class="step__descr"><?php echo $descr ?></p>
              </div>

            <?php endforeach ?>
          </div>
          <div class="about__steps-pagination"></div>
        </div>
      </div>
    </div>

    <div class="about__inner">
      <h3 class="about__title about__title--team">MEET THE TEAM</h3>

      <div class="about__content">
        <div class="about__team">
          <div class="about__team-nav">
            <button class="arrow arrow-prev">
              <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.646446 3.64644C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976309 4.7308 0.659727 4.53553 0.464465C4.34027 0.269202 4.02369 0.269202 3.82843 0.464465L0.646446 3.64644ZM21 3.5L1 3.5L1 4.5L21 4.5L21 3.5Z"/>
              </svg>
            </button>
            <button class="arrow arrow-next">
              <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5L20 4.5V3.5L0 3.5L0 4.5Z"/>
              </svg>
            </button>
          </div>

          <div class="about__team-drag">DRAG</div>
          
          <div class="swiper-wrapper">
            <?php foreach ( $team as $member) : 
              $foto_jpg = $site_url . $member['photo'] . '.jpg';
              $foto_webp = $site_url . $member['photo'] . '.webp';
              $name = $member['name'];
              $position = $member['position'];
            ?>
              <div class="member swiper-slide">
                <picture class="member__pic">
                  <source srcset="<?php echo $foto_webp ?>" type="image/webp">
                  <img src="<?php echo $foto_jpg ?>" alt="<?php echo $name ?> photo" class="member__img">
                </picture>

                <h4 class="member__name"><?php echo $name ?></h4>
                <p class="member__position"><?php echo $position ?></p>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>