<?php
$cases_img_dir = '/assets/img/cases/';
$site_url = get_site_url();

require 'single-cases/fuenf.php';
require 'single-cases/manifest.php';
require 'single-cases/orange.php';
require 'single-cases/bits.php';
require 'single-cases/gingerjoys.php';
require 'single-cases/profitnes.php';
require 'single-cases/imperator.php';

$cases = [
  'profitnes' => $profitnes,
  'manifest' => $manifest,
  'fuenf' => $fuenf,
  'bits' => $bits,
  'orange' => $orange,
  'gingerjoys' => $gingerjoys,
  'imperator' => $imperator,
]
?>