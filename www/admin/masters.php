<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>
<script type="text/javascript">
var profids="",compids="";
function addpart(){
  var data = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: "addpart.php",
      data: data,
      contentType: false,
      processData: false,
     
}).done(function (html) {
        $("#results").html(html);
        reloadnews();
      });
}
function onAjaxSuccess(data)
{
  $("#dobdiv").html(data);
}

function sel_prof(e){
profids = "";
if($(e).attr("selec")==0){
$(e).css("background","#6ac963");
$(e).attr("selec", 1)
}
else
{
$(e).css("background","#283540");
$(e).attr("selec", 0)
}
for(var i=0;i<$(".selec").length;i++){
var a = $(".selec")[i];
if($(a).attr("selec")==1){if(profids==""){profids = profids + $(a).attr("profid");}else{profids = profids + "," + $(a).attr("profid");}}
}
}
function sel_comp(e){
compids = "";
if($(e).attr("selec")==0){
$(e).css("background","#6ac963");
$(e).attr("selec", 1)
}
else
{
$(e).css("background","#283540");
$(e).attr("selec", 0)
}
for(var i=0;i<$(".selec2").length;i++){
var a = $(".selec2")[i];
if($(a).attr("selec")==1){if(compids==""){compids = compids + $(a).attr("compid");}else{compids = compids + "," + $(a).attr("compid");}}
}
}

function send_masters(){
var mes_text = $(".mass_mess_text").val();
$.post('mass_mess.php',
    {'message':mes_text,'profids':profids,'compids':compids},
    function (html) {$("#results").html("Сообщение разослано !");
    });
}
</script>
<style>#menu6{background:#1A242E;}</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>
<div class="content">
<center><div id="results" class="result"></div></center>
<div class="partners_two"><div class="part_masters">
<span>Мастера:</span>
<?
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM masters ORDER BY id DESC");
$myrow = mysql_fetch_array($result);
do
{
if($myrow != 0){
echo '
<a href="?page=profile&id='.$myrow[id].'"><div class="master">'.$myrow[fio].' ['.$myrow[jobs].']</div></a><div class="selec" profid="'.$myrow[id].'" selec="0" onclick="sel_prof(this)"><img height="15px" style="margin-top:10px;" src="gal.png"></div>
';
}
}
while($myrow = mysql_fetch_array($result));
?>
</div><div class="part_postav">
<span>Поставщики:</span>
<?
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM postav ORDER BY id DESC");
$myrow = mysql_fetch_array($result);
do
{
if($myrow != 0){
echo '
<a href="?page=company&id='.$myrow[id].'"><div class="master">'.$myrow[orgname].'</div></a><div class="selec2" compid="'.$myrow[id].'" selec="0" onclick="sel_comp(this)"><img height="15px" style="margin-top:10px;" src="gal.png"></div>
';
}
}
while($myrow = mysql_fetch_array($result));
?>
</div></div>
<div class="flcl"></div>
<div class="mass_mess"><textarea class="mass_mess_text" placeholder="Введите сообщение.."></textarea></div>
<br/>
<div onclick="send_masters()" class="addvip">Отправить выделенным</div>
</div>
</div>
</body>
</html>