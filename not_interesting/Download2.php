<?php
 class FEDX
  {
  	FUNCTION DEAD()
  	{
 session_start();
  if(isset($_SESSION['counter']))
  {
    $_SESSION['counter']+=1;
  }	
  else
  {
    $_SESSION['counter']=1;
  }
  $buy=array(1,1,1,1,1,1);
$feed=$_SESSION['counter'];
for($j=0;$feed>$j;$j++)
{

array_push($buy,1);

}

for($i=0;count($buy)>$i;$i++)
{
$light=$light.' '.$buy[$i];
$good=$good+rand(0,1);
}

echo $feed;
echo "<br/>";

echo $good;
echo "<br/>";
    }
  }
  $class=new FEDX();
  $class->DEAD();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<p><input type="submit" value="добавить" name="done"></p>
</form>
</body>
</html>