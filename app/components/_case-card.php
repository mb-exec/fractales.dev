<?php
function get_case_card($case, $index = 0, $animation = true, $tag = 'li') {
  global $webp_support;

  $animation_attr = '';
  
  if ($animation === true) {
    $animation_direction = $index % 2 ? 'appear-left' : 'appear-right';
    $animation_attr = ' data-animation="' . $animation_direction . '"';
  }

  $link = $case['page_link'];
  $imgs_folder = $case['imgs_folder'];
  $img_alt = $case['card_img_alt'];
  $case_tag = $case['tag'];
  $title = $case['title'];
  $descr = $case['card_descr'];

  $img_ext = $webp_support ? 'webp' : 'jpg';

  return <<<EOL
    <$tag class="case-preview"$animation_attr>
      <a href="$link" class="case-preview__link frame-hover frame-hover--big">
        <span class="frame-hover__top"></span>
        <span class="frame-hover__bottom"></span>
        <div class="case-preview__pic">
          <img loading="lazy" src="{$imgs_folder}preview.$img_ext" alt="$img_alt" class="case-preview__img">
        </div>

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