<?php

namespace App;

require_once (__DIR__ . '/../vendor/retailcrm/api-client-php/lib/RetailCrm/ApiClient.php');

use RetailCrm\ApiClient;

class Sender
{
	private $to;
	private $name;
	private $email;
	private $phone;
	private $wallet;
	private $client;
	private $headers;
	private $timeDigitalUrl;

	public function __construct($to, $name, $email, $phone, $wallet = null)
	{
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
		$this->wallet = $wallet;

		$this->timeDigitalUrl = 'https://miroswalletstd74.activehosted.com/proc.php';

		$this->client = new ApiClient(
			'https://miros-tilda.retailcrm.ru',
			'btPH510ZkI0wnJuhgbUqkOPq0xSWVuDS',
			ApiClient::V5
		);

		$headers = "From: info@impressionbureau.pro\r\nReply-To: {$email}\r\n" .
				   'X-Mailer: PHP/' . phpversion();
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$this->headers = $headers;
	}

	public function retailCrm()
	{
		try {
			$this->client->request->ordersCreate([
				'firstName' => $this->name,
				'email' => $this->email,
				'phone' => str_replace(['(', ')', '-', ' '], '', $this->phone),
				'customerComment' => $this->wallet,
				'orderMethod' => 'top-lead',
			]);
		} catch (\RetailCrm\Exception\CurlException $e) {
		}

		return $this;
	}

	public function mail($subject)
	{
		mail($this->to, $subject, $this->makeMailMessage($subject), $this->headers);

		return $this;
	}

	private function makeMailMessage($subject)
	{
		$message = "
	    <html>
	        <head>
	        <title>{$subject}</title>
	        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
	        </head>
	        <body>
	        <h2>Заявка от {$this->name}</h2>
	        <p>Email: {$this->email}</p>
	        <p>Телефон: {$this->phone}</p>";

		if (!empty($this->wallet)) {
			$message .= "<p>Кошелек: {$this->wallet}</p>\"";
		}

		$message .= "
	        </body>
	        </html>
	    ";

		return $message;
	}

	public function timeDigitalCrm()
	{
		try {
			$params = [
				'fullname' => $this->name,
				'phone' => $this->phone,
				'email' => $this->email,
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
				"{$this->timeDigitalUrl}?" . http_build_query($params) . "&jsonp=true");
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_exec($curl);
			curl_close($curl);
		} catch (Exception $exception) {
		}

		return $this;
	}

	public function redirect($path)
	{
		header("Location: {$path}");
	}
}