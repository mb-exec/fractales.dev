<?php require 'app/templates/header.php' ?>

<section class="error-page">
  <div class="container">
    <div class="error-page__inner">  
      <h1>404</h1>
      <p class="text-ls">Page not found</p>
      <p class="text-ls">This page is missing or your assembled the link incorrectly.</p>
      <a href="<?php echo $site_url ?>" class="error-page__link btn text-ls frame-hover">
        Go to main page <span class="small-arrow"></span>
        <span class="frame-hover__top"></span>
        <span class="frame-hover__bottom"></span>
      </a>
    </div>
  </div>

</section>

<?php require 'app/templates/footer.php' ?>