<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>

<style>#menu1{background:#1A242E;}</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>
<div class="content">
<center><div id="results" class="result"></div></center>
<form action="uploadvip.php" id="myForm" method="post" enctype="multipart/form-data">
<input class="vipinp" value="Заголовок" onfocus="if(value=='Заголовок'){value=''}" onblur="if(value==''){value='Заголовок'}" name="adress"><br/><br/>
<textarea class="viptext" placeholder="Описание работы" name="text"></textarea>
<br/><br/>
      <input class="fileinp1" onchange="document.getElementById('fileInputText1').value = this.value" type="file" name="file1"/>
	 
           <input value="Фото до работ" readonly type="text" id="fileInputText1"/>
		   <div onclick="imitation(1)" class="obzor">ОБЗОР</div>
		   <br/><br/><br/>
      <input class="fileinp2" onchange="document.getElementById('fileInputText2').value = this.value" type="file" name="file2"/>
	 
           <input value="Фото после работ" readonly type="text" id="fileInputText2"/>
		   <div onclick="imitation(2)" class="obzor">ОБЗОР</div>
      
	  <div onclick="dobvip()" class="addvip">Добавить работу</div>
</form>
<div class="flcl"></div>

<div class="zagol">УЖЕ ДОБАВЛЕННЫЕ</div>
<br/>
<div id="dobdiv">
<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM viprab ORDER BY id DESC");
$myrow = mysql_fetch_array($result);
do

{
if($myrow != 0){

echo '
<div class="vipstr">
<div class="namestr">'.$myrow[adress].'</div>
<div class="upr"><a href="editvip.php?id='.$myrow[id].'" target="_blank" class="edit"></a><a href="javascript://" onclick="delvip('.$myrow[id].')" class="delete"></a></div>
<div class="flcl"></div>
</div><br/>';
}
}
while($myrow = mysql_fetch_array($result));
?>
</div>
</div>
</div>
</body>
</html>