<?
$message = $_POST["message"];
$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: <ск-город.рф>\r\n"; 
$headers1 =  iconv("utf-8", "windows-1251", $headers);
$theme = 'Ответ от СК "Город"';
$message1 = iconv("utf-8", "windows-1251", $message);
$theme1 = iconv("utf-8", "windows-1251", $theme);
mail($_POST[email], $theme1, $message1, $headers1); 	
?>