<?php

require_once(__DIR__ . '/vendor/autoload.php');

if (isset($_POST['name']) && isset($_POST['email'])) {
	$sender = new \App\Sender(
		'mirosopt@gmail.com',
		$_POST['name'],
		$_POST['email'],
		$_POST['phone'] ?? '',
		$_POST['wallet'] ?? 'Лид магнит'
	);

	$subject = 'Заявка с лендинга для Мирос';

	if (isset($_POST['pdf'])) {
		$subject = 'Лид-магнит PDF';
	}

	if (isset($_POST['brelok'])) {
		$subject = 'Лид магнит Брелок';
	}

	$sender->retailCrm()->timeDigitalCrm()->mail($subject)->redirect('/thanks.php');
}
