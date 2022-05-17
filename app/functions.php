<?php
require 'inc/index.php';
require 'db/index.php';
require 'components/index.php';

$site_url = get_site_url();

$curr_page_name = get_page_template();
$page = $db['pages'][$curr_page_name];

$tel = $db['contacts']['tel'];
$tel_link = str_replace(' ', '', $tel);
$address = $db['contacts']['address'];
$email = $db['contacts']['email'];
$socials = $db['contacts']['socials'];
?>