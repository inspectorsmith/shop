<?php
//definped('myeshop') or die('������ ��������!');
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'php_shop'; 



$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die("��� ���������� � �� ".mysql_error());
mysql_query("SET names cp1251");

/*
$host = 'localhost'; // ����� ������� 
$database = 'php_shop'; // ��� ���� ������
$user = 'root'; // ��� ������������
$password = ''; // ������

$link = mysql_connect($host, $user, $password, $database) or die("������ " . mysqli_error($link));
*/
?>