<?php
namespace MVC\Decorators;

class PageDecorator extends DecoratorFactory
{
	public $user;
	
	public function __construct($user)
	{
		$this->page=$user;
	}
	public function title()
	{
		return implode('',[$this->page->first_name,$this->page->last_name]);
	}
	public function body()
	{
		return '<strong>'.htmlspecialchars($this->title()).'<strong>'.'('.htmlspecialchars($this->page->email).')';
		
	}
	public function items()
	{
		return '<item>'.
		       '<title>'.htmlspecialchars($this->title()).'</title>'.
			   '<email>'.htmlspecialchars($this->page->email).'<email/>'.
			   '<item>';
	}
	
	
	
}
?>
