<?php
require_once 'vendor/autoload.php';

use \Controllers\Page;

$page =new Page();

echo $page->view();
