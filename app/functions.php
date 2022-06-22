<?php
define('__ROOT__', dirname(__DIR__, 1));

require __ROOT__ . '/app/inc/index.php';

$site_url       = get_site_url();
$curr_page_name = get_page_template();

$webp_support = 
  strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false || 
  strpos( $_SERVER['HTTP_USER_AGENT'], ' Chrome/' ) !== false;

require __ROOT__ . '/app/db/index.php';
require __ROOT__ . '/app/components/index.php';

$page = $db['pages'][$curr_page_name];

$tel       = $db['contacts']['tel'];
$tel_link  = str_replace(' ', '', $tel);
$addresses = $db['contacts']['addresses'];
$email     = $db['contacts']['email'];
$socials   = $db['contacts']['socials'];
?>