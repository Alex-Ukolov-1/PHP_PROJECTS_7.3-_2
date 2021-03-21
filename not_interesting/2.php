<?php
$login=filter_var(trim($_POST['login']));
$name=filter_var(trim($_POST['name']));
$pass=filter_var(trim($_POST['pass']));

$mysql=new mysqli('localhost','root','root','registor');
$mysql->query("INSERT INTO `users`(`login`,`pass`,`name`)VALUES('$login','$pass','$name')");

$mysql->close();

header('Location:/');
?>