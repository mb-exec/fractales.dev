<?php
$cases_img_dir = '/assets/img/cases/';
$site_url = get_site_url();

require 'single-cases/fuenf.php';
require 'single-cases/demetra.php';
require 'single-cases/meta.php';
require 'single-cases/fortross.php';

$cases = [
  'fuenf' => $fuenf,
  'demetra' => $demetra,
  'meta' => $meta,
  'fortross' => $fortross,
]
?>