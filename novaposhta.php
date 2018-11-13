<?php

require_once (__DIR__ . '/vendor/autoload.php');

use \app\NovaPoshta;

if (isset($_POST['city'])) {
	echo (new NovaPoshta())->getWarehouses($_POST['city']);
}