<?php

namespace Tests;

// use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;
use App\Provider;
use App\Services\ContactService;
use App\Contact;
use App\Call;

class MobileTest extends TestCase
{
	
	/** @test */
	public function it_returns_null_when_name_empty()
	{

		$provider = new Provider();
		$mobile = new Mobile($provider);

		$this->assertNull($mobile->makeCallByName(''));
	}

	public function test_makeCallByName()
	{
		$provider = new Provider();
		$mobile = new Mobile($provider);

		$this->assertIsObject($mobile->makeCallByName('Joan'));
		$this->assertInstanceOf(Call::class,$mobile->makeCallByName('Joan'));
	}

	public function test_findByName()
	{
		$contact = new ContactService();
		$contact = $contact->findByName("Joan");

		$this->assertIsObject($contact);
		$this->assertInstanceOf(Contact::class,$contact);
	}

	public function test_validateNumber()
	{
		$contactClass = new ContactService();
		$contact = $contactClass->findByName("Joan");

		$this->assertIsBool($contactClass->validateNumber($contact->phoneNumber));
		$this->assertTrue($contactClass->validateNumber($contact->phoneNumber));
	}
}
