<?php
if(isset($_GET[yes]))
{
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM news ORDER BY id DESC");
$myrow = mysql_fetch_array($result);
do
{
if($myrow != 0){

echo '
<div class="vipstr">
<div class="namestr">'.$myrow[zagol].'</div>
<div class="upr"><a href="editnews.php?id='.$myrow[id].'" target="_blank" class="edit"></a><a href="javascript://" onclick="delnews('.$myrow[id].')" class="delete"></a></div>
<div class="flcl"></div>
</div><br/>';
}
}
while($myrow = mysql_fetch_array($result));
}
?>