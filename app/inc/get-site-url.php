<?php
function get_site_url()
{
  global $_SERVER;
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
  $host = $_SERVER['HTTP_HOST'];

  $site_url = $protocol . '://' . $_SERVER['HTTP_HOST'];

  if (strpos($host, 'localhost') !== false) {
    $site_url .= '/' . explode( '/', $_SERVER["REQUEST_URI"] )[1];
  }

  return $site_url;
}
