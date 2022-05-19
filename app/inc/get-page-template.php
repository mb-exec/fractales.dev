<?php
/**
 * Получить название страницы `index.php -> index`
 */
function get_page_template() 
{
  $script = $_SERVER['SCRIPT_NAME'];
  $split_path = explode( '/', $script );
  $script_name = array_pop( $split_path );
  return preg_replace('/\W|php/', '', $script_name);
}
