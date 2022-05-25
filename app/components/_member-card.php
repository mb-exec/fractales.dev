<?php
/**
 * Структура из файла `app/db/_team.php`
 * 
 * $member['photo'] - url вида `http://%sitename%/assets/img/team/%name%` (в папке должны лежать два файла %name%.jpg & %name%.webp)
 * 
 * $member -> 
 * `[
 *    'name' => string,
 *    'position' => string,
 *    'photo' => string, 
 * ]`
 */
function get_member_card($member, $class = '', $animation = false, $tag = 'li') {
  $photo = $member['photo'];
  $name = $member['name'];
  $position = $member['position'];
  $class = $class !== '' ? ' ' . $class : ''; 
  $animation_attr = $animation === true 
    ? ' data-animation="appear-bottom"'
    : '';

  return <<<EOL
    <$tag class="member$class"$animation_attr>
      <picture class="member__pic">
        <source srcset="$photo.webp" type="image/webp">
        <img loading="lazy" src="$photo.jpg" alt="$name photo" class="member__img">
      </picture>

      <h4 class="member__name">$name</h4>
      <p class="member__position">$position</p>
    </$tag>
  EOL;
}
?>