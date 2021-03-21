<?php
class DED
  {
  	function belive()
  	{
$name=$_POST['name'];
$color=$_POST['comment'];

$servername="alex.loc";
$username="root";
$password="root";
$dbname="data";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed: ".$conn->connect_error);
}
 $sql="insert into dbo(имя,комментарий) VALUES ('$name','$color')";

 if($conn->query($sql)===true)
 {
 	echo "данные отправлены";
 }
 else 
 {
  echo "ERROR:".$sql."<br>".$conn->error;
 }
 $conn->close();

  } 
}
$ged=new DED();
$ged->belive();
?>