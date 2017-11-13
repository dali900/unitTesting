<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
	

	public function testGetName()
	{
		$user = new App\Models\User;
		$user->create("Dalibor");
		$this->assertEquals($user->name, "Dalibor");
	}

}

 ?>
