<?php 
  require 'app/templates/header.php';
  $img_ext = $webp_support ? 'webp' : 'jpg';
  $img_path_xs = $site_url.'/assets/img/about-page/hero-xs.'.$img_ext;
  $img_path_lg = $site_url.'/assets/img/about-page/hero-lg.'.$img_ext;
  $img_xs_width = getimagesize($img_path_xs)[0];
  $img_lg_width = getimagesize($img_path_lg)[0];
  $src_set = "$img_path_xs {$img_xs_width}w, $img_path_lg {$img_lg_width}w";
?>

<section class="about-hero">
  <div class="container">
    <h1 class="title-lg">fractales dev</h1>
    <p class="about-hero__descr text-ls">Focusing on individual details, we create a high-quality holistic product</p>
    <div class="about-hero__pic">
      <img 
        src="<?php echo $site_url ?>/assets/img/about-page/hero-xs.webp" 
        srcset="<?php echo $src_set ?>"        
        alt="#"
        decoding="async"
      >
    </div>
  </div>
</section>

<?php
require 'app/templates/parts/about/about-us.php';
require 'app/templates/parts/about/about-values.php';
require 'app/templates/parts/about/about-team.php';
?>

<?php require 'app/templates/footer.php' ?>