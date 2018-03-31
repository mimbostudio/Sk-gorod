<?php
if((is_uploaded_file($_FILES["file1"]["tmp_name"])) && (is_uploaded_file($_FILES["file2"]["tmp_name"])))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
	 $nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$imgname1 = $_FILES["file1"]["name"];
$imgname2 = $_FILES["file2"]["name"];
$result = mysql_query("INSERT INTO viprab (img1,img2,adress,text) VALUES ('$imgname1','$imgname2','$_POST[adress]','$_POST[text]')");
     move_uploaded_file($_FILES["file1"]["tmp_name"], "../vipimg/".$_FILES["file1"]["name"]);
	 move_uploaded_file($_FILES["file2"]["tmp_name"], "../vipimg/".$_FILES["file2"]["name"]);
	 

	 echo'Работа добавлена !';
   }
   else
   {
   echo 'Что-то пошло не так...';
   }

?>