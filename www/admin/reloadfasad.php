<?php
if(isset($_GET[yes]))
{
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM fasad");
$myrow = mysql_fetch_array($result);
do
{
if($myrow != 0){
if($myrow[price] == "0"){
echo ' 
  <center>
	  <span class="calctoptitle">'.$myrow[name].'</span></center>';
}
else
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
	   <div class="upr"><a href="javascript://" onclick="fasadedit('.$myrow[id].')" class="edit"></a><a href="javascript://" onclick="fasaddel('.$myrow[id].')" class="delete"></a></div>
	   <div class="flcl"></div>  
  </div>';

}
}
}
while ($myrow = mysql_fetch_array($result));
}
?>