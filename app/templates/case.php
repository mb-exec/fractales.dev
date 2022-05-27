<?php 
/**
 * $case из app/db/single-cases  * 
 */
?>
<article class="case">
  <header class="case-hdr">
    <?php
      echo get_picture_tag([
        'class' => 'case-hdr__pic pic',
        'name'  => $case['hdr_img']['name'],
        'path'  => $case['imgs_folder'],
        'alt'   => $case['hdr_img']['alt'],
      ]);
    ?>
    <div class="container">
      <h1 class="case-hdr__title"><?php echo $case['title'] ?></h1>
    </div>
  </header>

  <section class="info sect sect--columns">
    <div class="container">

      <div class="sect--columns__inner">
        <span class="info__title sect--columns__inner-title text-ls"><?php echo $case['tag'] ?></span>

        <div class="sect--columns__inner-content text-ls">
          <p><?php echo $case['descr'] ?></p>

          <div class="info__lists text-ls">
            <div class="tools">
              <h3 class="tools__title">Services</h3>
              <ul class="tools__list">
                <?php foreach ( $case['services'] as $service ) : ?>
                  <li class="tools__list-item"><?php echo $service ?></li>
                <?php endforeach ?>
              </ul>
            </div>

            <div class="tools">
              <h3 class="tools__title">Technology</h3>
              <ul class="tools__list">
                <?php foreach ( $case['technology'] as $tech ) : ?>
                  <li class="tools__list-item"><?php echo $tech ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <?php foreach ( $case['sections'] as $section ) : ?>

    <section class="sect sect--columns">
      <div class="container">

        <div class="sect--columns__inner">
          <span class="case__sect-title sect--columns__inner-title"><?php echo $section['name'] ?></span>

          <div class="sect--columns__inner-content text-ls">
            
            <?php if (!empty($section['title'])) : ?>
              <h2 class="case__text-title"><?php echo $section['title'] ?></h2>
            <?php endif ?>

            <p class="case__text-content">
              <?php echo $section['text'] ?> 
            </p>
          </div>
        </div>
        
      </div>

      <?php
        echo get_picture_tag([
          'class' => 'pic',
          'name' => $section['img_name'],
          'path' => $case['imgs_folder'],
          'alt' => $section['img_alt'],
        ]);
      ?>
    </section>

  <?php endforeach ?>

  <?php
    $templates = $case['templates'];

    if (isset($templates) && count($templates) > 0) {
      foreach ( $templates as $template ) {
        require 'parts/' . $template;
      }
    }
  ?>

</article>

<section class="next-project sect">
  <div class="container">
    <h2 class="sect__title">Next project</h2>

    <?php
      $filtered_cases = array_filter($db['cases'], function($var) {
        global $case;
        return $var !== $case;
      });
      $random_case_name = array_rand($filtered_cases);
      echo get_case_card($db['cases'][$random_case_name], 0, true, 'div')
    ?>

  </div>
</section>