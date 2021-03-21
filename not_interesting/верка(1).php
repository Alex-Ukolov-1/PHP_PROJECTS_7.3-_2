<html>
<head>
</head>
<body>
<?php
class clean
{
	public function red()
 {
$array=array(array(1,2,3),array(4,5,6),array(7,8,9));
for($j=0;$j<4;$j++)
{echo '<br>';
	for($i=0;$i<4;$i++)
	{
		echo $array[$j][$i];

	}		
}
  }
}
$ded=new clean();
$ded->red();
?>
</body>
</html>