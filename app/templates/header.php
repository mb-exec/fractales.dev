<?php require dirname(__DIR__, 2) . '/app/functions.php' ?>

<!DOCTYPE html>
<html lang="en" <?php echo isset($page['og']) ? 'prefix="og: http://ogp.me/ns#"' : '' ?>>
<head>
  <meta charset="UTF-8">
  <title><?php echo $page['title'] ?></title>

  <?php if(!empty($page['description'])) : ?>
    <meta name="description" content="<?php echo $page['description'] ?>">
  <?php endif ?>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=2.0">
  <meta name="HandheldFriendly" content="True"/>

  <!-- PRELOAD -->
  <?php
    $fonts = [
      // 'Heebo-Regular',
      'Panchang-Medium',
      'Panchang-Semibold',
      'Poppins-Regular',
      // 'Poppins-Medium',
    ];

    foreach ( $fonts as $font ) : ?>
    <link rel="preload" href="<?php echo "$site_url/assets/fonts/$font.woff" ?>" as="font" type="font/woff" crossorigin="anonymous"/>
  <?php endforeach ?>

  <?php 
    // images
    echo get_img_preload("$site_url/assets/img/logo.svg");
    echo get_img_preload("$site_url/assets/img/icons/burger.svg");

    if (isset($page['preloads']['imgs']) ) {
      foreach ($page['preloads']['imgs'] as $preload_img) {
        echo get_img_preload($preload_img);
      }
    } 

    // styles
    foreach ( $pages['global']['styles'] as $style_name ) {
      echo get_style_link(['name' => $style_name, 'preload' => true]);
    }

    foreach ( $page['styles'] as $style_name ) {
      echo get_style_link(['name' => $style_name, 'preload' => true]);
    }    
  ?>    
  <link rel="preconnect" href="https://polyfill.io">
  <!-- PRELOAD -->

  <!-- STYLES & SCRIPTS -->  
  <?php 
    // styles
      foreach ( $pages['global']['styles'] as $style_name ) {
        echo get_style_link(['name' => $style_name]);
      }

      foreach ( $page['styles'] as $style_name ) {
        echo get_style_link(['name' => $style_name]);
      }
  ?>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=fetch%2CIntersectionObserver%2CIntersectionObserverEntry"></script>
  <?php
    // scripts
    foreach ( $pages['global']['scripts'] as $script_name ) {
      echo get_script_link(['name' => $script_name]);
    }  

    foreach ( $page['scripts'] as $script_name ) {
      echo get_script_link(['name' => $script_name]);
    } 
  ?>  
  <!-- STYLES & SCRIPTS -->
  <!-- FAV -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_url ?>/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $site_url ?>/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $site_url ?>/fav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $site_url ?>/fav/site.webmanifest">
  <link rel="mask-icon" href="<?php echo $site_url ?>/fav/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ff7842">
  <meta name="theme-color" content="#ffffff">
  <!-- FAV -->

  <?php if (isset($page['og'])) : ?>
    <meta property="og:title" content="<?php echo $page['title'] ?>">
    <meta property="og:description" content="<?php echo $page['description'] ?>"/>
    <meta property="og:type" content="<?php echo $page['og']['type'] ?>"/>
    <meta property="og:image" content="<?php echo $page['og']['img'] ?>"/>
    <meta property="og:image:type" content="<?php echo $page['og']['img_type'] ?>" />
    <meta property="og:url" content= "<?php echo $page['og']['url'] ?>"/>
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:site_name" content="Fractales dev" />
  <?php endif ?>
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" class="noise body-noise">
    <filter id="noise" x="0" y="0">
      <feTurbulence type="fractalNoise" baseFrequency=".45" numOctaves="3" stitchTiles="stitch"/>
      <feBlend mode="screen" in2="floodFill"/>
    </filter>
    <rect filter="url(#noise)" class="noise__rect" height="100%" width="100%"/>
  </svg>

  <header class="hdr">
    <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__noise">
      <rect filter="url(#noise)" class="noise__rect" height="100%" width="100%"/>
    </svg>

    <div class="container">
      <div class="hdr__inner">
        <a href="<?php echo $site_url ?>" class="hdr__logo">
          <img src="<?php echo $site_url ?>/assets/img/logo.svg" alt="Лого" width="200" height="35" class="hdr__logo-img" decoding="async">
        </a>

        <button class="burger" title="toggle menu"></button>

        <div class="hdr__menu">          
          <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__menu-noise">
            <rect filter="url(#noise)" class="noise__rect" height="100%" width="100%"/>
          </svg>
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item"><a href="<?php echo $site_url ?>/#services" class="nav__link">Services</a></li>
              <li class="nav__item"><a href="<?php echo $site_url ?>/works" class="nav__link">Works</a></li>
              <li class="nav__item"><a href="<?php echo $site_url ?>/about" class="nav__link">About</a></li>
              <li class="nav__item"><a href="#contacts" class="nav__link">Contacts</a></li>
            </ul>
          </nav>

          <div class="hdr__contacts">
            <a class="hdr__contacts-link" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
            <a class="hdr__contacts-link" href="tel:<?php echo $tel_link ?>"><?php echo $tel ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main">