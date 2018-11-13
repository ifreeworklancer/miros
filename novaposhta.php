<?php

require_once ('app/NovaPoshta.php');

if (isset($_POST['city'])) {
	echo (new NovaPoshta())->getWarehouses($_POST['city']);
}