<?php
namespace MVC\Models;

class Users
{
	public $collection;
	
	public function __construct($users=null)
	{
	if(is_null($users))
	   {
	   $users=[new User('makkuz@yandex.ru','Password','Maksim','Kuznetsov'),
	   new User('Igorsymdyanov@gmail.com','Password','Igor','Simdyanov')];
	   }
	   
	   $this->collection=$users;
	}
	
}

?>
