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

$nameDB = "test";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "mysql";//Имя пользователя БД
$passUSER = "mysql";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	


if(isset($_GET['offline']))
{
setcookie('hash', "", time()-3600);
header("location: aut.php");
}
$result = mysql_query("SELECT hash FROM users WHERE login='$_COOKIE[log]'");
 $proverka = mysql_fetch_array($result);
if($proverka[hash] == $_COOKIE['hash'])
{
echo 'хэши совпадают<br/>
<a href="?offline=1">Деавторизоваться</a>
';
}
else
{
if((!isset($_POST['login'])) and (!isset($_POST['password'])))
{
echo '
<form method="post">
<input type="text" name="login"><br/>
<input type="text" name="password"><br/>
<input type="submit" value="Авторизоваться">
</form>
';
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
  
  setcookie("hash", $hash, time()+60*60*24*30);
  setcookie("log", $_POST[login], time()+60*60*24*30);
  $result = mysql_query("UPDATE users SET hash='$hash' WHERE login='$_COOKIE[log]'");

  echo '<script>location.reload();</script>';
  }
  else
  {
  echo 'пароль неверен !';
  }
}
else
{
echo 'Пользователь с таким именем не найден';
}
}
}
?>