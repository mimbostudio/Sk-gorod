<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>
<script type="text/javascript">
function delmas(id){
$.get(
  "deletemaster.php",
  {
    id: id
  },
  onSuccess
);
}
function onSuccess(){
	alert('Анкета удалена');
	location = "http://город-ск.рф/admin/?page=masters";
}
function send_masters(em){
	var mes_text = $(".mass_mess_text").val();
$.post('email_send.php',
    {'message':mes_text,'email':em},
    function (html) {$("#results").html("Сообщение отправлено !");
    });
}
</script>
<style>#menu6{background:#1A242E;}</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>
<div class="content">
<?
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM masters WHERE id='$_GET[id]'");
$myrow = mysql_fetch_array($result);
$email = $myrow[email];
do
{
if($myrow != 0){
echo '
<div class="master_profile"><a href="/profiles/masters/'.$_GET[id].'/'.$myrow[avatar].'"><img class="master_ava" src="/profiles/masters/'.$_GET[id].'/'.$myrow[avatar].'"></a><br/>Имя:'.$myrow[fio].'<br/>Возраст:'.$myrow[years].'<br/>Город:'.$myrow[city].'<br/>Должность:'.$myrow[position].'<br/>Выполняемые работы:'.$myrow[jobs].'<br/>Телефон:'.$myrow[phone].'<br/>E-mail:'.$myrow[email].'<br/><br/><div class="delete_master" onclick="delmas('.$_GET[id].')">Удалить анкету</div></div>
';
}
}
while($myrow = mysql_fetch_array($result));
echo '
<center><div id="results" class="result"></div></center>
<div class="mass_mess"><textarea class="mass_mess_text" placeholder="Введите сообщение.."></textarea></div>
<br/>
<div onclick="send_masters(\''.$email.'\')" class="addvip">Отправить сообщение</div><div class="flcl"></div>';
$attach = scandir('../profiles/masters/'.$_GET[id]);
for($i=2;$i<count($attach);$i++){
echo '
<div class="attachments"><a target="_blank" href="/profiles/masters/'.$_GET[id].'/'.$attach[$i].'">'.$attach[$i].'</a></div>
';
}
?>
</div>
</div>
</body>
</html>