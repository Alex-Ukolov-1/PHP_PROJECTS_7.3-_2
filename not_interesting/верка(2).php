<html>
<head>
</head>
<body>
<?php
class deadinside
{
	public function fergus()
	{
	$array=array(array(
	array(0,0,0,1,1),
	array(0,0,0,1,1),
	array(0,0,0,1,1),
	array(1,1,1,1,1),
	array(1,1,1,1,1)
	            ),
	array(
	array(1,1,0,1,1),
	array(1,1,0,1,1),
	array(1,1,0,1,1),
	array(1,1,1,1,1),
	array(1,1,1,1,1)
	),
	
	
	array(
	array(0,0,0,0,0),
	array(0,0,0,0,0),
	array(0,0,0,0,0),
	array(1,1,1,1,1),
	array(1,1,1,1,1)
	)
				
				)
				;
				
				
for($j=0;$j<5;$j++)
{
	echo '<br>';
for($f=0;$f<5;$f++)
{

for($i=0;$i<5;$i++)
{
if(($array[$j][$f][$i])==1)echo("*");
else
{
echo(" ");
}
}
echo '<br>';		
}
}
}
	
}
$ded=new deadinside();
$ded->fergus();
?>
</body>
</html>