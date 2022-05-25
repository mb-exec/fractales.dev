<?php require 'app/templates/header.php' ?>

<section class="about-hero">
  <div class="container">
    <h1 class="title-lg" data-animation="appear-left">fractales dev</h1>
    <p class="about-hero__descr text-ls" data-animation="appear-right">Focusing on individual details, we create a high-quality holistic product</p>
    <picture class="about-hero__pic" data-animation="appear-right">
      <source media="(min-width: 767.98px)" srcset="<?php echo $site_url ?>/assets/img/about-page/hero-lg.webp" type="image/webp">
      <source media="(min-width: 767.98px)" srcset="<?php echo $site_url ?>/assets/img/about-page/hero-lg.jpg" type="image/jpeg">

      <source media="(max-width: 767.98px)" srcset="<?php echo $site_url ?>/assets/img/about-page/hero-xs.webp" type="image/webp">
      <img loading="lazy" src="<?php echo $site_url ?>/assets/img/about-page/hero-xs.jpg" alt="#" class="about-hero__img">
    </picture>
  </div>
</section>

<?php
require 'app/templates/parts/about/about-us.php';
require 'app/templates/parts/about/about-values.php';
require 'app/templates/parts/about/about-team.php';
?>

<?php require 'app/templates/footer.php' ?>