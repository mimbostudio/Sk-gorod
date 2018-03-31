<!DOCTYPE html>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="scriptlolipop.js"></script>
</head>
<body>
<div id="photoids" style="display:none">
</div>
<div id="fonid" class="foncl" onclick="allclose()"></div>
<div id="fonid1" class="foncl" onclick="allclose1()"></div>
<?php
include 'top.php';
include 'menu.php';
?>
<div class="flcl"></div>

<?php
if (isset($_GET['page'])){
$str_module = $_GET['page'].'.php';
include $str_module;
}
?>


<?php
include 'slider.php';
include 'bottom.php';
?>
 <div id="zaot" class="obrcl">
    <div class="obrsh"><div class="phone"></div><div onclick="zaot()" class="x-men"></div></div>
	<center><p></p>
	ЗАЯВКА ОТПРАВЛЕНА
	</center>
 </div>
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
<!--СТАРТ_БЛОКА ОТПРАВИТЬ_ЗАЯВКУ-->
 <div id="obrid" class="obrcl" style="display: none;">
 <div class="obrsh"><div class="phone"></div><div onclick="obrzv()" class="x-men"></div></div><center>
 <center>
 <div class="otvet_server"> </div>
</center> 
 <form id="obrform" method="POST"><input align="name" class="obrinp xxx_name" style="text-transform: uppercase;" type="text" name="user" value="ИМЯ:*" onfocus="if(value=='ИМЯ:*'){value='';}" onblur="if(value=='') {value='ИМЯ:*';}" ></input>
 <br/><input align="name" class="obrinp xxx_phone" type="text" name="phone" value="ТЕЛЕФОН:*" onfocus="if(value=='ТЕЛЕФОН:*'){value='';}" onblur="if(value=='') {value='ТЕЛЕФОН:*';}" ></input><input align="name" class="obrinp xxx_email" type="text" name="email" value="E-Mail:" onfocus="if(value=='E-Mail:'){value='';}" onblur="if(value=='') {value='E-Mail:';}" ></input><textarea name="soderj" class="txt1 xxx_soderj" placeholder="Содержание заявки" ></textarea>
 <div class="obrbutton2" onclick="sendzaivka();" type="submit" name="obrbutton">ОТПРАВИТЬ ЗАЯВКУ</div>
 </form></center>
 </div>
<!--КОНЕЦ_БЛОКА ОТПРАВИТЬ_ЗАЯВКУ-->
</body>
</html>