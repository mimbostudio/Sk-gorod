<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body style="background:#F1F2F7 !important;">
<script type="text/javascript">
function savenews(){
var data = new FormData($('#myForm')[0]);
$.ajax({
      type: "POST",
      url: "savenews.php",
      data: data,
      contentType: false,
      processData: false,
     
}).done(function (html) {
        $("#results").html(html);
        reload();
      });
}
</script>
<?php
if(isset($_GET[id]))
{
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM news WHERE id='$_GET[id]'");
$myrow = mysql_fetch_array($result);

echo '

<center><div id="results" class="result"></div></center>
<form action="uploadnews.php" id="myForm" method="post" enctype="multipart/form-data">
<input type="hidden" value="'.$myrow[id].'" name="idpost">
<input class="vipinp1" value="'.$myrow[zagol].'" name="zagol"><br/><br/>
<textarea class="viptext1" name="textnews">'.$myrow[newstext].'</textarea>
<br/><br/>
	  <div onclick="savenews()" class="addvip1">Сохранить изменения</div>
</form>
<div class="flcl"></div>
      
	


';
}
?>
</body>
</html>