<?php
Class DEAD
{
	function bring()
	{
		$file='reload.txt';
		$current=file_get_contents($file);
		$current.="welcome \n";
		file_put_contents($file, $current);
		$section=file_get_contents('./reload.txt');
		var_dump($section);
	}
}
$we=new DEAD();
echo $we->bring();