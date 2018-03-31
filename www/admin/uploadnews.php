<?php

     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
	 $nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$time = getdate();
$time1 = "".$time[mday].".".$time[mon].".".$time[year];
$result = mysql_query("INSERT INTO news (zagol,newstext,date) VALUES ('$_POST[zagol]','$_POST[textnews]', '$time1')");
 echo'Новость добавлена !';
?>