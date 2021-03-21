<?php
class ready
{

	function revolver()
	{
$input_login="";
$input_pass="";

if(isset($_POST['done']))
	{echo 'кнопка обработчика была нажата!<br>';


$input_login=$_POST['login'];
$input_pass=$_POST['pass'];

if(!empty($_POST['login'])&& $_POST['pass']!=123&&!empty($_POST['pass']))
{
	echo "Все хорошо, все поля пройдены";
	
}

 else
	{
	echo "здесь должна быть ваша обработка формы";
	echo "занесение в базуданных , отправка сообщеня";
    }

  if($_POST['login']=='')
  {
  	echo 'логин пуст!<br>';
  }

  if($_POST['pass']=='123'||empty($_POST['pass']))
  {
    echo "нельзя использовать";
  }
}
    }
    }
$reload=new ready();
$reload->revolver();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
<p>введите логин<input type="text" name="login" value="<?=$input_login?>"></p>
<p>введите пароль<input type="password" name="pass" value="<?=$input_pas?>"></p>
<p><input type="submit" value="отправить" name="done"></p>
</form>
</body>
</html>