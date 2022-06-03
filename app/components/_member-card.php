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
  global $webp_support, $site_url;

  $photo = $member['photo'];
  $name = $member['name'];
  $position = $member['position'];
  $class = $class !== '' ? ' ' . $class : ''; 
  $animation_attr = $animation === true 
    ? ' data-animation="appear-bottom"'
    : '';
  
  $file_ext = $webp_support ? 'webp' : 'jpg';

  return <<<EOL
    <$tag class="member$class"$animation_attr>
      <div class="member__pic">
        <img src="$site_url/assets/img/placeholder.svg" data-src="$photo.$file_ext" alt="$name photo" class="member__img lazy">
      </div>

      <span class="member__name">$name</span>
      <p class="member__position">$position</p>
    </$tag>
  EOL;
}
?>