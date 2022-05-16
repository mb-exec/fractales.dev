<?php
require 'inc/index.php';
require 'db/index.php';

$site_url = get_site_url();

$tel = $db['contacts']['tel'];
$tel_link = str_replace(' ', '', $tel);
$address = $db['contacts']['address'];
$email = $db['contacts']['email'];
$socials = $db['contacts']['socials'];
$t = '2';
?>