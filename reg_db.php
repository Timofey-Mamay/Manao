<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

if (isset($_POST["name"]) 
&&  isset($_POST["email"]) 
&&  isset($_POST["log"]) 
&&  isset($_POST["pass"]) 
&&  isset($_POST["pass_bonus"])){

$name = $_POST["name"];
$email= $_POST["email"];
$log  = $_POST["log"];
$pass = $_POST["pass"];
$pass_bonus = $_POST["pass_bonus"];

if ($pass == $pass_bonus){




// Подключение к бд
$mysqli = new mysqli("localhost", "root", "", "manao");
$db_table = "log-pas";
// Если есть ошибка соединения выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$mysqli->set_charset("utf8");

$result = $mysqli->query("INSERT INTO ".$db_table."(name,log,pass,pass_bonus,email) VALUES ('$name','$log','$pass','$pass_bonus','$email')");

if ($result == true){
	header("Location: index.php");
}else{
	echo "Информация в базу не занесена";
}
}
else{
	echo "Пароли не совпадают";
}
}
?>