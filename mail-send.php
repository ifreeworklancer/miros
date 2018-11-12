<?php

use RetailCrm\ApiClient;

require_once(__DIR__ . '/vendor/autoload.php');

if (isset($_POST['name']) && isset($_POST['email'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$package = isset($_POST['wallet']) ? $_POST['wallet'] : null;

	/**
	 * RetailCRM create order
	 */
	$client = new ApiClient(
		'https://miros-tilda.retailcrm.ru',
		'btPH510ZkI0wnJuhgbUqkOPq0xSWVuDS',
		\RetailCrm\ApiClient::V5
	);

	try {
		if ($package) {
			$response = $client->request->ordersCreate([
				'firstName' => $name,
				'email' => $email,
				'phone' => str_replace(['(', ')', '-', ' '], '', $phone),
				'customerComment' => $package,
				'orderMethod' => 'top-lead',
			]);
		}
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

	if (!empty($_POST['leadmagnit'])) {
		$package .= "<p>Лидмагнит PDF.</p>";
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

		$params = [
			'fullname' => $name,
			'phone' => $phone,
			'email' => $email,
			'u' => 1,
			'f' => 1,
			's' => '',
			'c' => 0,
			'm' => 0,
			'act' => 'sub',
			'v' => 2,
		];

		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL,
			'https://miroswalletstd74.activehosted.com/proc.php?' . http_build_query($params) . '&jsonp=true');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_exec($curl);
		curl_close($curl);
	} catch (Exception $exception) {
	}

	header('Location: /thanks.php');
}
