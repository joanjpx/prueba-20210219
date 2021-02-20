<?php

namespace App;


class Contact 
{
	public $name;
	public $phoneNumber;

	function __construct($contact)
	{
		$this->name = $contact[0];
		$this->phoneNumber = $contact[1];
	}
}