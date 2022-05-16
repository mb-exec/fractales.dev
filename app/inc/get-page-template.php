<?php
/**
 * Получить название страницы `index.php -> index`
 */
function get_page_template() 
{
  $script = $_SERVER['SCRIPT_NAME'];
  $script = array_pop( explode( '/', $script ) );
  return preg_replace('/\W|php/', '', $script);
}
