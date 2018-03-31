<?
 $name_user = $_POST[gparam1];
 $phone_user = $_POST[gparam2];
$email_user = $_POST[gparam3];
 $soder_zay_user = $_POST[gparam4];		
 $zprov1 = strpos($name_user, '*');
	$zprov2 = strpos( $phone_user, '*');
	if ((($zprov1 > 1) || ($zprov2 > 1))){
	echo '<div style="color:red;margin-top:10px;">Не заполнено обязательное поле</div><style>.obrcl{height:580px;}</style>';
	}
	else {if(($prov1 > 1) && ($prov2 > 1)){
	echo '<div style="color:red;margin-top:10px;">Не заполнено обязательное поле</div><style>.obrcl{height:580px;}</style>';
	}
	else{
	echo '<style>#obrform {display:none;}.obrcl{height:200px;}</style><br><br><b>ЗАЯВКА ОТПРАВЛЕНА</b>';
	 $message = $name_user.'<br>'.$phon_user.'<br>'.$email_user.'<br>'. $soder_zay_user;
 $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
 $headers .= "From: <ск-город.рф>\r\n"; 
 $message1 = iconv("utf-8", "windows-1251", $message);
 mail("platinum355@mail.ru", "Заявка", $message1, $headers);
	}
	}
?>