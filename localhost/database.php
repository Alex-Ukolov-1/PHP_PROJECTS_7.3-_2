<?php
$name=$_POST['play'];
$winner=$_POST['message'];

$servername="proba";
$username="root";
$password="root";
$dbname="data";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
  die("connection failed:" . $conn->connect-error);
}

$sql="insert into dbo(имя,комментарий)
VALUES ('$name','$winner')";

if($conn->query($sql)===true)
{
  echo "";
}
else
{
echo "error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
