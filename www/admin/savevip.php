<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
if((is_uploaded_file($_FILES["file1"]["tmp_name"])) || (is_uploaded_file($_FILES["file2"]["tmp_name"])))
{
if(is_uploaded_file($_FILES["file1"]["tmp_name"])){
$imgname1 = $_FILES["file1"]["name"];
$result = mysql_query("UPDATE viprab SET adress='$_POST[adress]', text='$_POST[text]', img1='$imgname1' WHERE id='$_POST[idpost]'");
move_uploaded_file($_FILES["file1"]["tmp_name"], "../vipimg/".$_FILES["file1"]["name"]);
}
if(is_uploaded_file($_FILES["file2"]["tmp_name"])){
$imgname2 = $_FILES["file2"]["name"];
$result = mysql_query("UPDATE viprab SET adress='$_POST[adress]', text='$_POST[text]', img2='$imgname2' WHERE id='$_POST[idpost]'");
move_uploaded_file($_FILES["file2"]["tmp_name"], "../vipimg/".$_FILES["file2"]["name"]);
}
echo'Изменения сохранены!';
}
else
{
$result = mysql_query("UPDATE viprab SET adress='$_POST[adress]', text='$_POST[text]' WHERE id='$_POST[idpost]'");
echo'Изменения сохранены!';
}


?>