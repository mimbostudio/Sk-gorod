
<!DOCTYPE html>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>

<link rel="stylesheet" type="text/css" href="style.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.9.1.js"></script>
<script type="text/javascript">
var ssl;
var schetimg=0;
$(document).ready(function(){


$("#epta").find("img").click(function(){
ssl = $(this).attr('src');
window.open(ssl, '_blank');
});
});
var obr=1, bask=1, phot=1, j,price,numb,price1,metr,k,u;
function obrzv(){
if(obr==1){obr=2;
$("div#fonid").fadeIn(500);
$("div#obrid").fadeIn(500);
$("div.baskcl").fadeOut(500);
bask=1;
obrzam = '<div class="obrsh"><div class="phone"></div><div onclick="obrzv()" class="x-men"></div></div><center><!--<span class="obrspan">ЗАЯВКА</span><br/><span class="obrspan1">МЫ СВЯЖЕМСЯ С ВАМИ В<br/>БЛИЖАЙШЕЕ ВРЕМЯ</span>--!><form id="obrform" method="POST"><input align="name" class="obrinp" style="text-transform: uppercase;" type="text" name="user" value="ИМЯ:*" onfocus="if(value==\'ИМЯ:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ИМЯ:*\';}" ></input><br/><input align="name" class="obrinp" type="text" name="phone" value="ТЕЛЕФОН:*" onfocus="if(value==\'ТЕЛЕФОН:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ТЕЛЕФОН:*\';}" ></input><input align="name" class="obrinp" type="text" name="email" value="E-Mail:" onfocus="if(value==\'E-Mail:\'){value=\'\';}" onblur="if(value==\'\') {value=\'E-Mail:\';}" ></input><textarea name="soderj" class="txt1" placeholder="Содержание заявки" ></textarea><input value="ОТПРАВИТЬ ЗАЯВКУ" class="obrbutton2" type="submit" name="obrbutton"></form></center>';
$("div#obrid").html(obrzam);
}
else
{
obr=1;
$("div.foncl").fadeOut(500);
$("div#obrid").fadeOut(500);
location.reload();
}
}
function visib(k){
$("div#photoid"+k).show();
$.get("photoscr.js");
document.getElementById("animation").style.display = "none";
$("div#fonid1").fadeIn(500);
}

function photoopen(k){
if(phot==1){phot=2;

var compl = 0;
$("#animation").css("display", "block");
$("div#photoid"+k).load("photo"+k+".html #photoidd", function(){$("div#photoid"+k).find("img").load(function(){compl++;if(compl==6){visib(k);}})});

}
else
{
phot=1;
$("div.photocl").fadeOut(500);
$("div.foncl").fadeOut(500);
}
}

function baskopen(){
if(bask==1){bask=2;
$("div.baskcl").fadeIn(500);
$("div#fonid").fadeIn(500);
}
else
{
bask=1;
$("div.baskcl").fadeOut(500);
$("div.foncl").fadeOut(500);
location.reload();
}
}
function obrsub(){
$("form#obrform").submit();
}
function zaot(){
$("div#zaot").fadeOut(500);
$("div.foncl").fadeOut(500);
}
function allclose(){
$("div#zaot").fadeOut(500);
obr=1;
$("div.foncl").fadeOut(500);
$("div#obrid").fadeOut(500);
phot=1;
$("div.photocl").fadeOut(500);
bask=1;
$("div.baskcl").fadeOut(500);
}
function allclose1(){
$("div.foncl").fadeOut(500);
$("div.photocl").fadeOut(500);
phot=1;
}
</script>








</head>
<body>

<div id="photoids" style="display:none">
    
</div>
 <div id="fonid" class="foncl" onclick="allclose()"></div>
 <div id="fonid1" class="foncl" onclick="allclose1()"></div>
<?
include('top.php');
include('menu.php');
?>
<div class="flcl"></div>

<script type="text/javascript">

function schet(th){
var ids,metr,price,itog,ids1,kolvo;
kolvo = $(".calcline").length;
ids = th.parentNode.parentNode;
price = $(ids).find(".calcpriceu").html();
itog = price*(th.value);
var block;
block = $(ids).find(".calcitogo");
block[0].innerHTML = itog;
var vsego,i,j,k;
i=0;
vsego=0;
block = $(".calcitogo");
for(i=0;i<kolvo;i++){
vsego += parseInt(block[i].innerHTML);
}
$(".vsego")[0].innerHTML = vsego;

}
</script>
<div class="calcdiv">
<center>
<span class="calctitle">КАЛЬКУЛЯТОР (кровельные работы)</span></center>
<br/>
<div class="calcdiv2">
  <div class="calctop">
    <div class="calcnumber">№</div>
	 <div class="calcname">Наименование работ</div>
	  <div class="calced">Ед.изм.</div>
	   <div class="calcprice">Стоимость(руб.)</div>
	   <div class="calcrazm">Ваши размеры</div>
	   <div class="calcitog">Итого</div>
	   <div class="flcl"></div>
	   <br/>
	  
	  
  </div>
<?
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM krovel");
$myrow = mysql_fetch_array($result);
do
{
if($myrow != 0){
if($myrow[price] == "0"){
echo ' <br/>
  <center>
	  <span class="calctoptitle">'.$myrow[name].'</span></center>';
}
else
{
echo ' <div class="calcline"> </div>
  <div  class="calcusl">
  <div class="calcnumberu"><div class="calcnumberusl"></div></div>
	 <div class="calcnameu">'.$myrow[name].'</div>
	  <div class="calcedu">';
	  
	  if(($myrow[ed] == "М2") || ($myrow[ed] == "м2")){
	  echo 'М<sup>2</sup>';
	  }
	  else
	  {
	  echo $myrow[ed];
	  }
	  echo '</div>
	   <div class="calcpriceu">'.$myrow[price].'</div>
	   <div class="calcrazmu"><input id="onin" type="text" oninput="schet(this)" class="calcinp" value="ПОЛЕ ВВОДА.." onfocus="if(value==\'ПОЛЕ ВВОДА..\'){value=\'\';}" onblur="if(value==\'\') {value=\'ПОЛЕ ВВОДА..\';}"></input></div>
	   <div class="calcitogu"><span class="calcitogo">0</span>руб.</div>
	   <div class="flcl"></div>  
  </div>';
}
}
}
while ($myrow = mysql_fetch_array($result))
?>
<div class="calcbottom">ВСЕГО: <span class="vsego">0</span>руб. <input type="submit" onclick="sendbaba();" class="calcbut" value="ОТПРАВИТЬ ЗАЯВКУ"></input></div>
</div>

</div>


<script>
function sendbaba(){
var colvodiv = document.getElementsByClassName('calcnameu').length;
for (i = 0; i < colvodiv; i++) { 
	var names = 'Наименование: '+ document.getElementsByClassName('calcnameu')[i].innerHTML;
var edizm = 'Ед.изм: '+document.getElementsByClassName('calcedu')[i].innerHTML;
var znachform = document.getElementsByClassName('calcinp')[i].value;
var stomsht = document.getElementsByClassName('calcpriceu')[i].innerHTML*znachform;
var pop = ", ";
var lu = "|";
var hran = names + pop + edizm + pop + 'Размер: ' + znachform + pop + 'Итого: ' + stomsht + lu + '*';
var hran2 = hran + hranprosh;
var hranprosh = hran2;
}
$.post(
  "/otpr_kr.php",
  {
    param1: hran2,
	param2: document.getElementsByClassName('vsego')[0].innerHTML
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  $("#innerbask").html(data);
}
baskopen();
}
function sendzay(){ 
var lili1 = document.getElementsByClassName('lili1')[0].value;
var lili2 = document.getElementsByClassName('lili2')[0].value;
var lili3 = document.getElementsByClassName('lili3')[0].value;





$.post(
  "/otpr_kr.php",
  {	
    lili1s: lili1,
	lili2s: lili2,
	lili3s: lili3
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  $("#innerbask").html(data);
}




}
</script>


<div class="obrabotkazka">
</div>
<?
if(isset($_POST['obrbutton2'])){
 $name = $_POST['user'];
 $tel = $_POST['phone'];
 $eml = $_POST['email'];
 $mess = $_POST['soderj'];
 $message = $name.'<br>'.$tel.'<br>'.$eml.'<br>'.$mess;
 
 $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
 $headers .= "From: <ск-город.рф>\r\n"; 
 $message1 = iconv("utf-8", "windows-1251", $message);
 mail("platinum355@mail.ru", "Вызов специалиста", $message1, $headers);
 echo'
 
 <script type="text/javascript">
location.reload();
 </script>
 ';
 }
 
?>
<div id="zaot" class="obrcl">
    <div class="obrsh"><div class="phone"></div><div onclick="zaot()" class="x-men"></div></div>
	<center><p></p>
	ЗАЯВКА ОТПРАВЛЕНА
	</center>
 </div>
 
 <?
 if(isset($_POST['obrbutton'])){
 $name = $_POST['user'];
 $tel = $_POST['phone'];
 $eml = $_POST['email'];
 $mess = $_POST['soderj'];
 $message = $name.'<br>'.$tel.'<br>'.$eml.'<br>'.$mess;
 
 $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
 $headers .= "From: <ск-город.рф>\r\n"; 
 $message1 = iconv("utf-8", "windows-1251", $message);
 mail("platinum355@mail.ru", "Заявка", $message1, $headers);
 echo'
 <div id="obrid" class="obrcl">
    <div class="obrsh"><div class="phone"></div><div onclick="obrzv()" class="x-men"></div></div>
	<center><p></p>
	<span class="obrspan">ЗАЯВКА ПРИНЯТА</span>
	</center>
 </div>
 <script type="text/javascript">
 if(obr==1){obr=2;
$("div#obrid").fadeIn(500);
$("div#fonid").fadeIn(500);
bask=1;
}
 </script>
 ';
 }
 else
 {
 echo'
 
  <div id="obrid" class="obrcl">
    <div class="obrsh"><div class="phone"></div><div onclick="obrzv()" class="x-men"></div></div>
	<center><p></p>
	<span class="obrspan">ЗАЯВКА</span><p></p><span class="obrspan1">МЫ СВЯЖЕМСЯ С ВАМИ В<br/>БЛИЖАЙШЕЕ ВРЕМЯ</span>
	<form id="obrform" method="POST">
	<br/><input align="name" class="obrinp" type="text" name="user" value="ИМЯ:" onfocus="if(value==\'ИМЯ:\'){value=\'\';}" onblur="if(value==\'\') {value=\'ИМЯ:\';}" ></input>
	<br/><input align="name" class="obrinp" type="text" name="phone" value="ТЕЛЕФОН:" onfocus="if(value==\'ТЕЛЕФОН:\'){value=\'\';}" onblur="if(value==\'\') {value=\'ТЕЛЕФОН:\';}" ></input>
	<input value="ОТПРАВИТЬ ЗАЯВКУ" type="submit" class="obrbutton2" name="obrbutton">
	</form>
	</center>
 </div>
 ';
 }
 
 ?>
 <div id="animation">
 <div class="photosh"><div class="photo"></div><div class="x-menphoto" onclick="photoopen()"></div></div>
 <img id="animationimg" src="img/anim.gif"></div>
 <div id="epta">
 
 <div id="photoid1" class="photocl">

 </div>
  <div id="photoid2" class="photocl">
  
 </div>
  <div id="photoid3" class="photocl">
 
 </div>
  <div id="photoid4" class="photocl">

 </div>
  <div id="photoid5" class="photocl">
  
 </div>
  <div id="photoid6" class="photocl">
  
 </div>
 </div>
  <div id="baskid" class="baskcl">
    <div class="basksh"><div class="basket"></div><div class="x-menbask" onclick="baskopen()" onclick="obrzv()"></div></div>
	<div class="slidebar" id="innerbask">
	
	
	
	
	
	
	</div>

	</div>
<script type="text/javascript">
var ssl;
var schetimg=0;

$(document).ready(function(){

window.onload = function(){
kolvo = $(".calcnumberusl").length;
block = $('.calcnumberusl');

for(i=0;i<kolvo;i++){
block[i].innerHTML = i+1;
}
}

destination = $(".calcdiv").offset().top;
$('body,html').animate( { scrollTop: destination }, 500 );
      
	  })
	  </script>
	  

</body>
</html>