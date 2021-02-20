<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\ContactService;


class Mobile
{

	protected $provider;
	
	function __construct(CarrierInterface $provider)
	{
		$this->provider = $provider;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contactClass = new ContactService();
		$contact = $contactClass->findByName($name);

		if($contactClass->validateNumber($contact->phoneNumber))
		{
			$this->provider->dialContact($contact);
			return $this->provider->makeCall($contact);
		}
	}
}
