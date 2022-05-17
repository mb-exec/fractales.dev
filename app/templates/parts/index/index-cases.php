<section id="works" class="cases sect">
  <div class="container">    
    <h2 class="sect__title">Works</h2>

    <ul class="works__list">
      <?php 
        $i = 0;
        foreach ( $db['cases'] as $name => $case ) {
          if ( $i === 3 ) break;
          echo get_case_card( $case, $i );
          $i++;
        }
      ?>
    </ul>

    <a href="works" class="cases__show-more">Show more</a>
  </div>
</section>