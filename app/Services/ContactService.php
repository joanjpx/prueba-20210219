<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	public $contacts;

	public function __construct()
	{
		$this->contacts= [
			"Joan" => ["Joan Perez","923471754"],
			"Angelo" => ["Angelo Icochea","95563326"],
			"Juan" => ["Juan Rivera","2669633211"]
		];
	}
	
	public function findByName($name): Contact
	{
		return new Contact($this->contacts[$name]);
	}

	public static function validateNumber(string $number): bool
	{
		return is_numeric($number);
	}
}