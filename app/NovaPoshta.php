<?php

namespace App;

use LisDev\Delivery\NovaPoshtaApi2;

class NovaPoshta
{
	private $client;

	public function __construct()
	{
		$this->client = new NovaPoshtaApi2(
			'abbdf6a362201b0e7a961a781747113d',
			'ru'
		);
	}

	/**
	 * Get cities list from NovaPoshta API
	 * @return array
	 */
	public function getCities()
	{
		return $this->client->getCities();
	}

	/**
	 * Get warehouses list for city ref from NovaPoshta API
	 * @param $ref
	 * @return false|string
	 */
	public function getWarehouses($ref)
	{
		return json_encode($this->client->getWarehouses($ref));
	}
}