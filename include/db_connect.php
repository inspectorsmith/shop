<?php
//definped('myeshop') or die('Доступ запрещён!');
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'php_shop'; 



$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die("Нет соединения с БД ".mysql_error());
mysql_query("SET names cp1251");

/*
$host = 'localhost'; // адрес сервера 
$database = 'php_shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysql_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
*/
?>