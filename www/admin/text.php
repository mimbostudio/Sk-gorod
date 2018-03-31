<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>
<script type="text/javascript">


</script>
<style>#menu5{background:#1A242E;}
.tco{
margin-bottom:10px;
cursor:pointer;
width:calc(100%-35px);
background:#fff;
padding:10px;
padding-left:20px;
color: #989DA4;
border-radius: 6px;
}
.tgl textarea{width:100%;border:0px;resize: none;height:250px;}
</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>
<div class="content">
<center>
<div id="results" class="result"></div></center>
<div class="tco">Главная странрица</div>
<div class="tgl">
<textarea>
<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM gl");
$myrow = mysql_fetch_array($result);
echo $myrow[text];
?>
</textarea>
</div>
<div class="tco">Фасадные работы</div>
<div class="tco">Кровельные работы</div>
<br/>


</div>
</div>
</body>
</html>