<?php 

namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

class UserTest extends PHPUnit_Framework_TestCase
{

	protected $user;

	//função sempre é executada primeiro
	public function setup()
	{
		$this->user = new User("João", "Silva");
	}

	public function testSetAndGetName()
	{
		$this->assertEquals("João", $this->user->getName());
	}

	public function testSetAndGetLastName()
	{
		$this->assertEquals("Silva", $this->user->getLastName());
	}

	//pseudo annotation
	/**
	* @test 
	*/	
	public function fullNameIsConcatenationFromNameAndLastName()
	{
		$user = $this->user;
		$expected = "João Silva";
		$actual = $user->getCompleteName();
		$this->assertEquals($expected, $actual);		
	}
}