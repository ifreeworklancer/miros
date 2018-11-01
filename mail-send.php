<?php

use RetailCrm\ApiClient;

require_once(__DIR__ . '/vendor/autoload.php');

if (isset($_POST['name']) && isset($_POST['email'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$package = $_POST['wallet'];

	/**
	 * RetailCRM create order
	 */
	$client = new ApiClient(
		'https://miros-tilda.retailcrm.ru',
		'btPH510ZkI0wnJuhgbUqkOPq0xSWVuDS',
		\RetailCrm\ApiClient::V5
	);

	try {
		$response = $client->request->ordersCreate([
			'firstName' => $name,
			'email' => $email,
			'phone' => str_replace(['(', ')', '-', ' '], '', $phone),
			'customerComment' => $package,
			'orderMethod' => 'top-lead',
		]);
	} catch (\RetailCrm\Exception\CurlException $e) {
	}

	/**
	 * Email send
	 */
	$to = 'mirosopt@gmail.com';
	$subject = 'Заявка с лендинга для Мирос';

	$message = "
	    <html>
	        <head>
	        <title>{$subject}</title>
	        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
	        </head>
	        <body>
	        <h2>Заявка от {$name}</h2>
	        <p>Email: {$email}</p>
	        <p>Телефон: {$phone}</p>";

	if (!empty($package)) {
		$message .= "<p>Кошелек: {$package}</p>\"";
	}

	$message .= "
	        </body>
	        </html>
	    ";
	$headers = 'From: info@impressionbureau.pro' . "\r\n" .
			   'Reply-To: ' . $email . "\r\n" .
			   'X-Mailer: PHP/' . phpversion();
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	try {
		mail($to, $subject, $message, $headers);
	} catch (Exception $exception) {
	}

	header('Location: /thanks.php');
}
