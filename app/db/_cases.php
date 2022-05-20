<?php
$cases_img_dir = '/assets/img/cases/';
$site_url = get_site_url();

require 'single-cases/fuenf.php';
require 'single-cases/manifest.php';
require 'single-cases/gingerjoys.php';

$cases = [
  'fuenf' => $fuenf,
  'manifest' => $manifest,
  'gingerjoys' => $gingerjoys,
]
?>