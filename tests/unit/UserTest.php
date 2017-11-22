<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	

	public function testGetFirstName()
	{
		$user = new App\Models\User;

		$user->setFirstName('Dali');
		$this->assertEquals($user->getFirstName(), 'Dali');

		$user->setLastName('Grujic');
		$this->assertEquals($user->getLastName(), "Grujic");		
	}

	public function testArrayContent()
	{
		$user = new App\Models\User;

		$user->create('Dalibor Grujic');
		$user->setEmail('dalibor.gc@gmail.com');
		$person = $user->getPersonInfo();
		$this->assertArrayHasKey('full_name', $person);
		$this->assertEquals($person['full_name'], "Dalibor Grujic");
	}

}

 ?>
