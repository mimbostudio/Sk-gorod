<!DOCTYPE html>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<link rel="SHORTCUT ICON" href="/favicon.ico"type="image/x-icon">
<link rel="stylesheet" type="text/css" href="styleadmin.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery.cookie.js"></script>
</head>
<body>
<script type="text/javascript">
function imitation(r){
$('.fileinp'+r).click();
}
function dobvip(){
    var data = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: "uploadvip.php",
      data: data,
      contentType: false,
      processData: false,
     
}).done(function (html) {
        $("#results").html(html);
        reloadvip();
      });
	
}

function onAjaxSuccess2(data)
{
  $("#dobdiv").html(data);
}
function reloadvip(){
$.get(
	  "reloadvip.php",
	  {
	  yes: "yes"
	  },
	  onAjaxSuccess
	  );
}
function delvip(id){
$.get(
  "deletevip.php",
  {
    id: id,
  },
  onAjaxSuccess
);
}

function onAjaxSuccess(data)
{
  $("#dobdiv").html(data);
}
</script>
<?php
function generateCode($length=6) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";

    $code = "";

    $clen = strlen($chars) - 1;  
    while (strlen($code) < $length) {

            $code .= $chars[mt_rand(0,$clen)];  
    }

    return $code;

}

$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");


if(isset($_GET['offline']))
{
echo '<script>$.cookie("hash", null); $.cookie("log", null);  location = "/admin";</script>';

}
if(isset($_COOKIE['log'])){
$result = mysql_query("SELECT hash FROM users WHERE login='$_COOKIE[log]'");
 $proverka = mysql_fetch_array($result);
 }
if((isset($_COOKIE['hash'])) and ($proverka[hash] == $_COOKIE['hash']))
{
if (isset($_GET['page'])){
$str_module = $_GET['page'].'.php';
include $str_module;
}
else
{
include 'vipoln.php';
}
}
else
{
if((!isset($_POST['login'])) || (!isset($_POST['password'])))
{
include('login.php');
}
else
{

$result = mysql_query("SELECT password FROM users WHERE login='$_POST[login]'");
$mybase = mysql_fetch_array($result);
if(count($mybase) > 1)
{

  if($mybase[password] == md5(md5($_POST['password'])))
  {
  
  $hash = md5(generateCode(10));
  
  echo '<script>$.cookie("hash","'.$hash.'"); $.cookie("log","'.$_POST[login].'");</script>';

  $result = mysql_query("UPDATE users SET hash='$hash' WHERE login='$_POST[login]'");

  echo '<script>location.reload();</script>';
  }
  else
  {
  include('login.php');
  echo '<span style="position:fixed;top:50%;left:50%;margin-top:-20px;margin-left:-75px;color:#a7665d;font-size:16px;">Пароль неверен !</span>';
  }
}
else
{
include('login.php');
echo '<span style="position:fixed;top:50%;left:50%;margin-top:-20px;margin-left:-100px;color:#a7665d;font-size:16px;">Пользователь не найден</span>';
}
}
}
?>
</body>
</html>