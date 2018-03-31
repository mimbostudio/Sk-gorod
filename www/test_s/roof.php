
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


  <div id="baskid" class="baskcl">
    <div class="basksh"><div class="basket"></div><div class="x-menbask" onclick="baskopen()" onclick="obrzv()"></div></div>
	<div class="slidebar" id="innerbask">
	
	
	
	
	
	
	</div>

	</div>