<?php require 'app/templates/header.php' ?>

<section class="about-hero">
  <div class="container">
    <h1 class="title-lg">fractales dev</h1>
    <p class="about-hero__descr text-ls">Focusing on individual details, we create a high-quality holistic product</p>
    <picture class="about-hero__pic">

      <?php if ($webp_support) : ?>
        <source media="(min-width: 767.98px)" srcset="<?php echo $site_url ?>/assets/img/about-page/hero-lg.webp" type="image/webp">
        <img loading="lazy" src="<?php echo $site_url ?>/assets/img/about-page/hero-xs.webp" alt="#" class="about-hero__img">
      <?php else : ?>
        <source media="(min-width: 767.98px)" srcset="<?php echo $site_url ?>/assets/img/about-page/hero-lg.jpg" type="image/jpeg">
        <img loading="lazy" src="<?php echo $site_url ?>/assets/img/about-page/hero-xs.jpg" alt="#" class="about-hero__img">      
      <?php endif ?>
    </picture>
  </div>
</section>

<?php
require 'app/templates/parts/about/about-us.php';
require 'app/templates/parts/about/about-values.php';
require 'app/templates/parts/about/about-team.php';
?>

<?php require 'app/templates/footer.php' ?>