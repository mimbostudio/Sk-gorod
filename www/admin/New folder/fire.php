<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link rel="stylesheet" type="text/css" href="krov.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>
<script type="text/javascript">
var tenz;
$(document).ready(function(){
window.onload = function(){
kolvo = $(".calcnumberusl").length;
block = $('.calcnumberusl');

for(i=0;i<kolvo;i++){
block[i].innerHTML = i+1;
}

}
$(".ten").click(function(){
var data = new FormData($('#krovform'+tenz)[0]);
$.ajax({
      type: "POST",
      url: "firesave.php",
      data: data,
      contentType: false,
      processData: false,
     success: function (html){
$("#ku"+tenz).html(html);
$(".ten").fadeOut();
//location.reload();
krovreload();
$('#ku'+tenz).css('z-index', '9');
$('#ku'+tenz).css('background', 'none');
      }
});
});
});

function krovedit(id){
$('#ku'+id).children('.upr').fadeOut(100);
tenz=id;
textname = $('#kn'+id).html();
texted = $('#ke'+id).html();
textprice = $('#kp'+id).html();
textnameinp = "<input type='hidden' value='"+id+"' name='krovid'/><input type='text' name='krovname' value='"+textname+"'/>";
textedinp = "<input type='text' name='kroved' value='"+texted+"'/>";
textpriceinp = "<input type='text' name='krovprice' value='"+textprice+"'/>";
$('#kn'+id).html(textnameinp);
$('#ke'+id).html(textedinp);
$('#kp'+id).html(textpriceinp);
$('#ku'+id).css('background', '#fff');
$('#ku'+id).css('z-index', '11');
$(".ten").fadeIn();
}
function krovreload(){
$.get(
	  "reloadfire.php",
	  {
	  yes: "yes"
	  },
	  onAjaxSuccess
	  );
}
function onAjaxSuccess(data)
{
  $("#dobdiv").html(data);
  kolvo = $(".calcnumberusl").length;
block = $('.calcnumberusl');

for(i=0;i<kolvo;i++){
block[i].innerHTML = i+1;
}
}
function krovdel(del){
$.get(
	  "firedelete.php",
	  {
	  id: del
	  },
	  krovreload
	  );
}
function addkrov(){
cat = $('#selec').val();
$('#categid').val(cat);

var data = new FormData($('#myForm')[0]);
$.ajax({
 type: "POST",
url: "uploadfire.php",
data: data,
contentType: false,
processData: false,

}).done(function (html) {
 $("#results").html(html);
krovreload();
});
}
</script>
<style>#menu7{background:#1A242E;}</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>

<div class="content"><div class="ten"></div>
<center><div id="results" class="result"></div></center>
<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM fire");
$myrow = mysql_fetch_array($result);
$pops = 0;
echo '<select id="selec">';
do
{
if($myrow[price] == "0"){
if($pops == 0){$pops++;echo '<option selected="selected">'.$myrow[name].'</option>';}
else
{
echo '<option>'.$myrow[name].'</option>';
}
}
}
while($myrow = mysql_fetch_array($result));
echo '</select>';
?>
<form action="uploadfire.php" id="myForm" method="post" enctype="multipart/form-data">
<input type="hidden" value="" name="categ" id="categid"/>
<input class="vipinp1" value="Наименование работы" onfocus="if(value=='Наименование работы'){value=''}" onblur="if(value==''){value='Наименование работы'}" name="zagol"><br/><br/>
<input class="vipinp1" value="Единица измерения (если метр квадратный, впишите м2)" onfocus="if(value=='Единица измерения (если метр квадратный, впишите м2)'){value=''}" onblur="if(value==''){value='Единица измерения (если метр квадратный, впишите м2)'}" name="ed"><br/><br/>
<input class="vipinp1" value="Цена за единицу" onfocus="if(value=='Цена за единицу'){value=''}" onblur="if(value==''){value='Цена за единицу'}" name="price"><br/><br/>

<br/><br/>
	  <div onclick="addkrov()" class="addvip">Добавить работу</div>
</form>
<div class="flcl"></div>

<div class="zagol">УЖЕ ДОБАВЛЕННЫЕ</div>
<br/>
<div id="dobdiv">
<?
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM fire");
$myrow = mysql_fetch_array($result);
$categ;
$i;
$ii = 0;
do
{
if($myrow != 0){
if($myrow[price] == "0"){
$categ[$ii] = $myrow[name];
$ii++;
}
}
}
while ($myrow = mysql_fetch_array($result));

for($i=0;$i<$ii;$i++){
echo '<br/>
  <center>
	  <span class="calctoptitle">'.$categ[$i].'</span></center>';
$result = mysql_query("SELECT * FROM fire");
$myrow = mysql_fetch_array($result);
do
{
if($myrow[categ] == $categ[$i])
{
echo ' <div class="calcline"> </div>
  <div  class="calcusl" id="ku'.$myrow[id].'">
  <div class="calcnumberu"><div class="calcnumberusl"></div></div>
  <form action="krovedit.php" id="krovform'.$myrow[id].'" method="post" enctype="multipart/form-data">
	 <div class="calcnameu" id="kn'.$myrow[id].'">'.$myrow[name].'</div>
	  <div class="calcedu" id="ke'.$myrow[id].'">';
	  
	  if(($myrow[ed] == "М2") || ($myrow[ed] == "м2")){
	  echo 'М<sup>2</sup>';
	  }
	  else
	  {
	  echo $myrow[ed];
	  }
	  echo '</div>
	   <div class="calcpriceu" id="kp'.$myrow[id].'">'.$myrow[price].'</div>
	   </form>
	   <div class="upr"><a href="javascript://" onclick="krovedit('.$myrow[id].')" class="edit"></a><a href="javascript://" onclick="krovdel('.$myrow[id].')" class="delete"></a></div>
	   <div class="flcl"></div>  
  </div>';
}
}
while ($myrow = mysql_fetch_array($result));
}
?>
</div>
</div>
</div>
</body>
</html>