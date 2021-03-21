<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$mysql=new mysqli('alex.loc','root','root','registor');
$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' and `pass`='$password'");
$user=$result->fetch_assoc();
if(count($user)==0)
{
	echo "такой пользователь не найден!";
	exit();
}

print_r($user['login']);
print_r(" ");
print_r($user['name']);
exit();


$mysql->close();
header('Location: /файлсайт(2).php');
?>