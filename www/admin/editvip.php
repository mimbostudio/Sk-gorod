<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body style="background:#F1F2F7 !important;">
<script type="text/javascript">
function imitation(r){
$('.fileinp'+r).click();
}
function save(){
var data = new FormData($('#myForm')[0]);
$.ajax({
      type: "POST",
      url: "savevip.php",
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
$result = mysql_query("SELECT * FROM viprab WHERE id='$_GET[id]'");
$myrow = mysql_fetch_array($result);

echo '

<center><div id="results" class="result"></div></center>
<form action="upload.php" id="myForm" method="post" enctype="multipart/form-data">
<input type="hidden" value="'.$myrow[id].'" name="idpost">
<input class="vipinp" value="'.$myrow[adress].'" name="adress"><br/><br/>
<textarea class="viptext" name="text">'.$myrow[text].'</textarea>
<br/><br/>
      <input class="fileinp1" onchange="document.getElementById(\'fileInputText1\').value = this.value;" value="'.$myrow[img1].'" type="file" name="file1"/>
	
           <input value="'.$myrow[img1].'" readonly type="text" id="fileInputText1"/>
		   <div onclick="imitation(1)" class="obzor">ОБЗОР</div>
		   <br/><br/><br/>
      <input class="fileinp2" onchange="document.getElementById(\'fileInputText2\').value = this.value;" value="'.$myrow[img2].'" type="file" name="file2"/>
	
           <input value="'.$myrow[img2].'" readonly type="text" id="fileInputText2"/>
		   <div onclick="imitation(2)" class="obzor">ОБЗОР</div>
      
	  <div onclick="save()" class="addvip1">Сохранить изменения</div>
</form>
<div class="flcl"></div>


';
}
?>
</body>
</html>