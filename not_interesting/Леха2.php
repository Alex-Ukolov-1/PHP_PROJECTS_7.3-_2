<?php

trait read
{
	public $path;
	public $def;
	
	public function red()
	{
		print("hellow world");
		print(" ");
		print("<br>");
	}
	
	function read($path)
	{
		print($path);
		print(" ");
		print("<br>");
	}
	
	public function buble($path,$def)
	{
		print($path.' '.$def);
		print(" ");
		print("<br>");
	}
}



class poles 
{
	use read;
}

class iron 
{
	use read;
}

$sword=new poles();
$sword->red();
$sword->read(3);


$knife=new iron();
$knife->red();
$knife->read(4);
$knife->buble(4,5);
?>