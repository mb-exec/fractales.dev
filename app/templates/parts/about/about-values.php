<?php
$list = [
  [
    'title' => 'Professionalism',
    'descr' => 'We are the team of highly skilled tech professionals. We separate tasks to work efficiently and never shy away from the most complex challenges. No matter the problem, we develop solutions that consistently exceed expectations.',
  ],
  [
    'title' => 'Team',
    'descr' => 'We believe that the team is the most valuable asset in any business. Together we are an important part of the whole. Thanks to the division of tasks and teamwork, we manage to achieve high results and work on solving complex problems.',
  ],
  [
    'title' => 'Service',
    'descr' => "When working on a project, we always immerse ourselves deeply in the client's business and work hard to achieve the result. We fully understand you, your goals, and your business, we keep our process lean, efficient, and results-oriented.",
  ],
]
?>

<section class="about-values sect">
  <div class="container">
    <h2 class="sect__title">Our values</h2>

    <ul class="about-values__list text-ls" data-animation="appear-bottom">
      <?php foreach ( $list as $item ) : ?>
        <li class="about-values__item">
          <h3 class="about-values__item-title"><?php echo $item['title'] ?></h3>
          <p class="about-values__item-descr"><?php echo $item['descr'] ?></p>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</section>