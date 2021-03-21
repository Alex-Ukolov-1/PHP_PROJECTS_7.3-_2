<?php
$login=filter_var(trim($_POST['login']));
$pass=filter_var(trim($_POST['pass']));

$mysql=new mysqli('localhost','root','root','registor');

$result=$mysql->query("SELECT*FROM `users` WHERE `login`='$login' AND `pass`='pass'");
$user=$result->fetch_assoc();
echo($_POST['login']);

$mysql->close();


print($user);
exit();

setcookie('user',$user['name']);

header('Location:/');
?>