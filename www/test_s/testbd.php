
<!DOCTYPE html>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf8"/>

</head>
<body>
<?php
$nameDB = "test";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "mysql";//Имя пользователя БД
$passUSER = "mysql";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	

if(!isset($_GET['id']) AND !isset($_GET['add']))
{
$result = mysql_query("SELECT id,title FROM poligon");
$myrow = mysql_fetch_array($result);

do
{
    echo "<a href='?id=".$myrow[id]."'>".$myrow[title]."</a><br>";
}
while ($myrow = mysql_fetch_array($result));

echo "<br><br><br><a href='?add=1'>Добавить пост</a>";
}


if(isset($_GET['id']))
{
$result = mysql_query("SELECT text FROM poligon WHERE id='$_GET[id]'");
$myrow = mysql_fetch_array($result);
echo $myrow[text];
}

if(isset($_GET['add']))
{
    echo "<br><br><form action='testbd.php' method='post' name='form_add'>
    <input type='text' name='title_post'><br>
    <textarea name='text_post' cols='40' rows='10'></textarea><br>
    <input type='submit' value='Добавить пост'>
    </form>";
}

if(isset($_POST['title_post']) AND isset($_POST['text_post']))
{
$result = mysql_query("INSERT INTO poligon (title,text) VALUES ('$_POST[title_post]','$_POST[text_post]')");
$url = 'testbd.php';
 echo "<script>location = 'testbd.php';</script>";
exit;
}
?>


</body>
</html>