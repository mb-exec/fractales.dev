<?php 
$about_us_list = [
  [
    'title' => '',
    'data-number' => 5,
    'descr' => 'Years on the market'
  ],
  [
    'title' => '+',
    'data-number' => 30,
    'descr' => 'Modern and scalable technologies'
  ],
  [
    'title' => '+',
    'data-number' => 50,
    'descr' => 'Successful projects'
  ]
];
?>

<section class="about-us sect sect--columns">
  <div class="container">
    <h2 class="sect__title">About us</h2>

    <div class="sect--columns__inner" data-animation="appear-bottom">
      <h3 class="sect--columns__inner-title">HOW WE WORK</h3>

      <div class="sect--columns__inner-content text-ls">
        <p class="about-us__descr">We pay attention to functionality, visuality, usefulness and business process architecture. When working on a product, we think about how it will help the business and the client.</p>
      </div>
    </div>

    <ul class="about-us__list" data-animation="appear-right">
          <?php foreach ( $about_us_list as $item ) : ?>
            <li class="about-us__item">
              <h4 class="about-us__item-title">
                <span class="js-num-grow" number="<?php echo $item['data-number'] ?>">0</span><?php echo $item['title'] ?>
              </h4>
              <p class="about-us__item-descr text-ls"><?php echo $item['descr'] ?></p>
            </li>
          <?php endforeach ?>
        </ul>
  </div>
</section>