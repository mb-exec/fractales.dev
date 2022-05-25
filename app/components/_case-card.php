<?php
function get_case_card($case, $index = 0, $animation = true, $tag = 'li') {
  $animation_attr = '';
  
  if ($animation === true) {
    $animation_direction = $index % 2 ? 'appear-left' : 'appear-right';
    $animation_attr = ' data-nimation="' . $animation_direction . '"';
  }

  $link = $case['page_link'];
  $imgs_folder = $case['imgs_folder'];
  $img_alt = $case['card_img_alt'];
  $case_tag = $case['tag'];
  $title = $case['title'];
  $descr = $case['card_descr'];

  return <<<EOL
    <$tag class="case-preview"$animation_attr>
      <a href="$link" class="case-preview__link frame-hover frame-hover--big">
        <span class="frame-hover__top"></span>
        <span class="frame-hover__bottom"></span>
        <picture class="case-preview__pic">
          <source srcset="$imgs_folder/preview.webp" type="image/webp">
          <img loading="lazy" src="$imgs_folder/preview.jpg" alt="$img_alt" class="case-preview__img">
        </picture>

        <div class="case-preview__descr text-ls">
          <div class="case-preview__type">$case_tag</div>
          <h3 class="case-preview__title">$title</h3>
          <p class="case-preview__text">$descr</p>

          <div class="case-preview__view-case">View case <span class="small-arrow"></span></div>
        </div>
      </a>
    </$tag>
  EOL;
}
?>