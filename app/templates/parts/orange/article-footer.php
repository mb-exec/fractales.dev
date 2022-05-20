<section class="sect">
  <?php
    echo get_picture_tag([
      'class' => 'pic',
      'name' => $case['imgs']['preresult']['name'],
      'path' => $case['imgs_folder'],
    ]);
  ?>
</section>

<section class="results sect sect--columns">
  <div class="container">

    <div class="results__inner sect--columns__inner">
      <h2 class="case__sect-title sect--columns__inner-title">RESULT</h2>

      <div class="sect--columns__inner-content text-ls">
        <ul class="results__list">
          <li class="results__list-item"><b>100</b>Service cards</li>
          <li class="results__list-item"><b>2</b>Click to book</li>
        </ul>
      </div>
    </div>

  </div>
</section>