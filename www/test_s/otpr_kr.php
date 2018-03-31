<?
  session_start();
  
  $razbivka = explode('|', $_POST['param1']);

  #print_r($razbivka);
  if(isset($_POST['param1'])){
  
  foreach ($razbivka as $key => $value) {
	$prov = strpos($value, 'ПОЛЕ');
	 $razbivka[$key] =  str_replace('undefined', '', $razbivka[$key]);
	if($prov > 1){
	unset($razbivka[$key]);
	}else {

	#echo $value.'<br>';
	
	}
	}
	
	$_SESSION['productzg'] =  implode(", ",$razbivka);
	#echo 'ВСЕГО:' .$_POST['param2'];
	
	
	$_SESSION['soderjan'] =  $soderaz;
	
	echo '<center><form id="obrform1" method="POST"><input align="name" class="obrinp lili1" style="text-transform: uppercase;" type="text" name="user1" value="ИМЯ:*" onfocus="if(value==\'ИМЯ:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ИМЯ:*\';}"><br><input align="name" class="obrinp lili2" type="text" name="phone1" value="ТЕЛЕФОН:*" onfocus="if(value==\'ТЕЛЕФОН:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ТЕЛЕФОН:*\';}"><input align="name" class="obrinp lili3" type="text" name="email1" value="E-Mail:" onfocus="if(value==\'E-Mail:\'){value=\'\';}" onblur="if(value==\'\') {value=\'E-Mail:\';}"><br><br><div onclick="sendzay();" value="ОТПРАВИТЬ ЗАЯВКУ" class="obrbutton2" type="submit" name="obrbutton1">ОТПРАВИТЬ ЗАЯВКУ</div></center>';
  
	}

	if(isset($_POST['lili1s'])){
	
	$prov1 = strpos($_POST['lili1s'], '*');
	$prov2 = strpos($_POST['lili2s'], '*');
	
	if ((($prov1 > 1) || ($prov2 > 1))){
	
	echo '<span style="color:red"><center><br/>Не заполнено обязательное поле</center></span><style>.baskcl{padding-bottom:60px;}</style>';
	echo '<center><form id="obrform1" method="POST"><input align="name" class="obrinp lili1" style="text-transform: uppercase;" type="text" name="user1" value="ИМЯ:*" onfocus="if(value==\'ИМЯ:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ИМЯ:*\';}"><br><input align="name" class="obrinp lili2" type="text" name="phone1" value="ТЕЛЕФОН:*" onfocus="if(value==\'ТЕЛЕФОН:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ТЕЛЕФОН:*\';}"><input align="name" class="obrinp lili3" type="text" name="email1" value="E-Mail:" onfocus="if(value==\'E-Mail:\'){value=\'\';}" onblur="if(value==\'\') {value=\'E-Mail:\';}"><br/><br/><div onclick="sendzay();" value="ОТПРАВИТЬ ЗАЯВКУ" class="obrbutton2" type="submit" name="obrbutton1">ОТПРАВИТЬ ЗАЯВКУ</div></center>';
	}else {
	
	
	if(($prov1 > 1) && ($prov2 > 1)){
	echo '<span style="color:red"><center><br/>Не заполнено обязательное поле</center></span><style>.baskcl{padding-bottom:60px;}</style>';
	echo '<center><form id="obrform1" method="POST"><input align="name" class="obrinp lili1" style="text-transform: uppercase;" type="text" name="user1" value="ИМЯ:*" onfocus="if(value==\'ИМЯ:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ИМЯ:*\';}"><br><input align="name" class="obrinp lili2" type="text" name="phone1" value="ТЕЛЕФОН:*" onfocus="if(value==\'ТЕЛЕФОН:*\'){value=\'\';}" onblur="if(value==\'\') {value=\'ТЕЛЕФОН:*\';}"><input align="name" class="obrinp lili3" type="text" name="email1" value="E-Mail:" onfocus="if(value==\'E-Mail:\'){value=\'\';}" onblur="if(value==\'\') {value=\'E-Mail:\';}"><br/><br/><div onclick="sendzay();" value="ОТПРАВИТЬ ЗАЯВКУ" class="obrbutton2" type="submit" name="obrbutton1">ОТПРАВИТЬ ЗАЯВКУ</div></center>';
	}
	else{
	
	$to  = "platinum355@mail.ru" ; 
	$subject = "Заказ"; 
	
	$message = ' 






<html> 
    <head> 
        <title></title> 
    </head> 
    <body> 
       <table border="1" style="border-color:#E9EFF5;background:#F1F4F7;"><tr><td>
	   
	   ИМЯ:'.$_POST['lili1s'].'</td></tr><tr><td>ТЕЛЕФОН:'.$_POST['lili2s'].'</td></tr><tr><td>E-Mail:'.$_POST['lili3s'].'</td></tr><tr><td>СПИСОК УСЛУГ:<br/>
	   '.str_replace("*", "<br/>", $_SESSION['productzg']).'</td></tr></table>
	   
	   
    </body> 
</html>'; 

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: <ск-город.рф>\r\n"; 
#$headers .= "Bcc: birthday-archive@example.com\r\n"; 
$message1 = iconv("utf-8", "windows-1251", $message);
mail($to, $subject, $message1, $headers); 
	
	
	
	
	
	echo '<center><br><br>ЗАЯВКА ОТПРАВЛЕНА</center>';
	
	
	}
	}
	
	}
	
			
?>