<?php require dirname(__DIR__, 2) . '/app/functions.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no, viewport-fit=cover">

  <meta name="description" content="<?php echo $page['description'] ?>">

  <title><?php echo $page['title'] ?></title>

  <?php 
    // styles
      foreach ( $pages['global']['styles'] as $style_name => $ver ) {
        echo get_style_link($style_name);
      }

      foreach ( $page['styles'] as $style_name => $ver ) {
        echo get_style_link($style_name);
      }

    // scripts
    foreach ( $pages['global']['scripts'] as $script_name => $ver ) {
      echo get_script_link($script_name, $ver);
    }  

    foreach ( $page['scripts'] as $script_name => $ver ) {
      echo get_script_link($script_name, $ver);
    } 
  ?>
  <!-- FAV -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_url ?>/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $site_url ?>/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $site_url ?>/fav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $site_url ?>/fav/site.webmanifest">
  <link rel="mask-icon" href="<?php echo $site_url ?>/fav/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ff7842">
  <meta name="theme-color" content="#ffffff">
  <!-- FAV -->
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" class="noise body-noise">
  <filter id="noise" x="0" y="0">
    <feTurbulence type="fractalNoise" baseFrequency=".45" numOctaves="3" stitchTiles="stitch"/>
    <feBlend mode="screen"/>
  </filter>
  <rect filter="url(#noise)" class="noise__rect" height="100%" width="100%"/>
</svg>

<header class="hdr" animation="appear-top">
  <svg xmlns="http://www.w3.org/2000/svg" class="noise hdr__noise">
    <rect filter="url(#noise)" class="noise__rect" height="100%" width="100%"/>
  </svg>

  <div class="container">
    <div class="hdr__inner">
      <a href="<?php echo $site_url ?>" class="hdr__logo">
        <img loading="lazy" src="<?php echo $site_url ?>/assets/img/logo.svg" alt="Лого" class="hdr__logo-img">
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