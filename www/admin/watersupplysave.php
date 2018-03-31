<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$result = mysql_query("UPDATE watersupply SET name='$_POST[krovname]', ed='$_POST[kroved]', price='$_POST[krovprice]' WHERE id='$_POST[krovid]'");

$result = mysql_query("SELECT * FROM watersupply WHERE id='$_POST[krovid]'");
$myrow = mysql_fetch_array($result);

echo ' 
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
	   <div class="upr"><a href="javascript://" onclick="krovedit('.$myrow[id].')" class="edit"></a><a href="javascript://" onclick="krovdel('.$myrow[id].')" class="delete"></a></div>
	   <div class="flcl"></div>  
	   
  ';
  
?>