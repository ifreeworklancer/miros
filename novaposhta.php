<?php

require_once ('vendor/autoload.php');

use App\NovaPoshta;

if (isset($_POST['city'])) {
	echo (new NovaPoshta())->getWarehouses($_POST['city']);
}