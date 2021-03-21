<?php
Class wall
{
function bring()
{
	
$file = 'people.txt';

$current = file_get_contents($file);

$current .= "John Smith\n";

file_put_contents($file, $current);
$section = file_get_contents('./people.txt');
var_dump($section);
}
}
$we=new wall();
echo $we->bring();
?>