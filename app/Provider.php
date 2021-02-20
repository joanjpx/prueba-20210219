<?php

namespace App;
use App\Interfaces\CarrierInterface;
use App\Call;

class Provider implements CarrierInterface 
{
	
	function __construct()
	{
		# code...
	}

    public function dialContact(Contact $contact)
    {

    }

    public function makeCall($contact): Call
    {
        return new Call($contact);
    }
}