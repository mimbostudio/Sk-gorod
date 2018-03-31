
<script type="text/javascript">
function overnone(ids){
$("div#t"+ids).css("overflow","visible");
$("div#t"+ids).css("height","auto");
};
</script>

<div class="kont">
<center>
<span class="calctitle">ВЫПОЛНЕННЫЕ РАБОТЫ</span></center>
<br/>
<div class="viprabdiv">
<?
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM viprab");
$myrow = mysql_fetch_array($result);

do
{
if($myrow != 0){
echo '<div class="viprab"><div class="viprabimg"><img src="../vipimg/'.$myrow[img].'"></div><div class="adress" id="a'.$myrow[id].'">'.$myrow[adress].'</div>
<div class="vipinfo"><div class="squard"></div><br/><div id="t'.$myrow[id].'" class="infotext">'.$myrow[text].'</div><div class="razv"  onclick="overnone('.$myrow[id].')"><center><br/><img src="/img/arrow.png"></center></div></div>
</div>
<script type="text/javascript">
hei = $("div#t'.$myrow[id].'").height();
if(hei > 30){
$("div#t'.$myrow[id].'").css("height","65px");
};
hei = $("div#a'.$myrow[id].'").height();
if(hei > 30){
$("div#a'.$myrow[id].'").css("height","40px");
};
</script>
';
}
}
while($myrow = mysql_fetch_array($result));


?>
</div>