<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");

$result2 = mysql_query("SELECT * FROM krovel WHERE id='$_REQUEST[action]'");
$edit = mysql_fetch_array($result2);
echo '<div class="edit"><form action="krovelcalc2.php?editsave=1" method="post"><input type="hidden" name="edid" value="'.$edit[id].'"><textarea name="edname">'.$edit[name].'</textarea><br/><input type="text" name="eded" value="'.$edit[ed].'"><br/><input type="text" name="edprice" value="'.$edit[price].'"><br/><input type="submit" value="Сохранить"></form></div>';


?>