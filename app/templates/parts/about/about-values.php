<?php
$list = [
  [
    'title' => 'Professionalism',
    'descr' => 'Each of us is a professional in his field. This helps to separate tasks and work efficiently. We have an extensive list of skills, love interesting projects and are constantly learning to be in the thick of events and trends.',
  ],
  [
    'title' => 'Team',
    'descr' => 'We believe that the team is the most valuable asset in any business. Media Harbor is not just people. Together we are an important part of the whole. Together we manage to achieve high results and work on solving complex problems.',
  ],
  [
    'title' => 'Service',
    'descr' => 'When working on a project, we always immerse ourselves deeply in the client\'s business and work hard to achieve the result. As a result, effective products are obtained that both customers and ourselves are satisfied with.',
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