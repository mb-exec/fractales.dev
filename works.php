<?php require 'app/templates/header.php' ?>

<section class="works">
  <div class="container">
    <h1 class="works__title title-lg">Works</h1>

    <ul class="works__list">
      <?php 
        $i = 0;
        foreach ( $cases as $name => $case ) {
          echo get_case_card( $case, $i );
          $i++;
        }
      ?>
    </ul>
  </div>
</section>

<?php require 'app/templates/footer.php' ?>