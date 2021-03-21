<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form action="post.php" method="post">

<input type="text" name="name"><br>
<input type="text" name="comment"><br> 
<input type="submit">
</form>

<?php
class reset
{
  function pig()
	{
$servername="alex.loc";
$username="root";
$password="root";
$dbname="data";
//строка подключения
$conn=new mysqli($servername,$username,$password,$dbname);
//строка выбора всехь данных из таблицы
$sql="SELECT * FROM dbo";
//переменной передаем все данные из таблицы, путём запроса query($sql) к бд;
$result=$conn->query($sql);
  while($row=$result->fetch_assoc())
  {
  {
echo " ".$row['имя']." ".$row['комментарий']."<br>";
  }
  }
 $conn->close();
  }
} 
$row=new reset();
$row->pig();
?>

</body>
</html>