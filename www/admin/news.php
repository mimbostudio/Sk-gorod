<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>
<script type="text/javascript">
function addnews(){
  var data = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: "uploadnews.php",
      data: data,
      contentType: false,
      processData: false,
     
}).done(function (html) {
        $("#results").html(html);
        reloadnews();
      });
}
function reloadnews(){
$.get(
	  "reloadnews.php",
	  {
	  yes: "yes"
	  },
	  onAjaxSuccess
	  );
}
function onAjaxSuccess(data)
{
  $("#dobdiv").html(data);
}
function delnews(id){
$.get(
  "deletenews.php",
  {
    id: id,
  },
  onAjaxSuccess
);
}
</script>
<style>#menu4{background:#1A242E;}</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>
<div class="content">
<center><div id="results" class="result"></div></center>
<form action="uploadnews.php" id="myForm" method="post" enctype="multipart/form-data">
<input class="vipinp1" value="Заголовок" onfocus="if(value=='Заголовок'){value=''}" onblur="if(value==''){value='Заголовок'}" name="zagol"><br/><br/>
<textarea class="viptext1" placeholder="Текст" name="textnews"></textarea>
<br/><br/>
	  <div onclick="addnews()" class="addvip">Добавить новость</div>
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
?>
</div>
</div>
</div>
</body>
</html>