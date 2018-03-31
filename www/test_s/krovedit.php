<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>

<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");

if(isset($_GET['save']))
{
$result = mysql_query("SELECT * FROM krovel");
$myrow = mysql_fetch_array($result);
}

if(isset($_COOKIE['log'])){
$result = mysql_query("SELECT hash FROM users WHERE login='$_COOKIE[log]'");
 $proverka = mysql_fetch_array($result);
 }
if((isset($_COOKIE['hash'])) and ($proverka[hash] == $_COOKIE['hash']))
{
echo '<a href="?offline=1">Деавторизоваться</a>';







$result = mysql_query("SELECT * FROM krovel");
$myrow = mysql_fetch_array($result);
do
{
if($myrow != 0){
if($myrow[price] == "0"){
echo ' <br/>
  <center>
	  <input style="width:500px" type="text" value="'.$myrow[name].'"></center>';
}
else
{
echo ' <div class="calcline"> </div>
  <div  class="calcusl">
	 <div class="calcnameu"><textarea>'.$myrow[name].'</textarea></div>
	  <div class="calcedu">';
	  
	  
	  echo '<input style="width:50px;" type="text" value="'.$myrow[ed].'">';
	  
	  echo '</div>
	   <div class="calcpriceu"><input type="text" value="'.$myrow[price].'"></div>
	   
	   <div class="flcl"></div>  
  </div>';
}
}
}
while ($myrow = mysql_fetch_array($result));

echo '<a href="?save=1">Сохранить</a>';
}

?>
</body>
</html>