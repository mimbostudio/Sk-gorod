<?php

	 $nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$price = $_POST[price];
if((strpos($_POST[price], ".") > 0) || (strpos($_POST[price], ",") > 0)){$price = $_POST[price];} else{$price = $_POST[price].'.00';};
$result = mysql_query("INSERT INTO watersupply (name,ed,price,categ) VALUES ('$_POST[zagol]','$_POST[ed]', '$price', '$_POST[categ]')");
echo'Работа добавлена !';
?>