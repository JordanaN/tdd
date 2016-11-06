<?php 
namespace Example;

/**
* Class de User
*/
class User 
{
	protected $name;
	protected $lastname;

	function __construct($name, $lastname)
	{	
		$this->name = $name;
		$this->lastname = $lastname;
	}

	public function getCompleteName()
	{
		return $this->getName() . ' ' . $this->getLastName();
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastName()
	{
		return $this->lastname;
	}
}