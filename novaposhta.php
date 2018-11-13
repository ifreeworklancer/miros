<?php

require_once ('app/NovaPoshta.php');

use App\NovaPoshta;

if (isset($_POST['city'])) {
	echo (new NovaPoshta())->getWarehouses($_POST['city']);
}