<?php 

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 


require_once 'connect.php';
$result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
	echo "Такового пользователя еще нету...";
} else {echo "Привет " . $name . ", тебе чтото нужно?";}

setcookie('user', $user['name'], time() + 60, "/");

$mysql -> close();

header('location: /');
