<?php
$profids = explode(",", $_POST["profids"]);
$emails = "";
$i = 0;
$compids = explode(",", $_POST["compids"]);
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
if(count($profids)>0){
for($i=0;$i<count($profids);$i++){
$result = mysql_query("SELECT email FROM masters WHERE id='$profids[$i]'");
$myrow = mysql_fetch_array($result);
if($myrow != 0){if($emails==""){$emails = $emails.$myrow[0];}else{$emails = $emails.",".$myrow[0];}}
}
}
if(count($compids)>0){
for($i=0;$i<count($compids);$i++){
$result = mysql_query("SELECT email FROM postav WHERE id='$compids[$i]'");
$myrow = mysql_fetch_array($result);
if($myrow != 0){if($emails==""){$emails = $emails.$myrow[0];}else{$emails = $emails.",".$myrow[0];}}
}
}
$emails=explode(",", $emails);
$message = $_POST["message"];
$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: <ск-город.рф>\r\n"; 
$headers1 =  iconv("utf-8", "windows-1251", $headers);
$theme = 'Ответ от СК "Город"';
$message1 = iconv("utf-8", "windows-1251", $message);
$theme1 = iconv("utf-8", "windows-1251", $theme);
	$count_emails = count($emails); // Подсчёт количества адресов
	// Запускаем цикл отправки сообщений
    for ($i=0; $i<=$count_emails-1; $i++) // Отчёт начинается в массиве с нуля, поэтому уменьшаем сумму на единицу
    {
    // Подставляем адреса получаетелей и обрезаем пробелы с обоих сторон, если таковые имеются
    $email=trim($emails[$i]);
    // Отправляем письмо и готовим отчёт по отправке
	if($emails[$i]!="") { // Проверка на случай попадения в массив пустого значения
    if(mail($email, $theme1, $message1, $headers1)) $report.="<li><span style=\"color:green;\">Отправлено: ".$emails[$i]."</span></li>"; else $report.="<li><span style=\"color:red;\">Не отправлено: ".$emails[$i]."<span></li>";
	sleep(5); // Делаем тайм-аут в 5 секунд
	}
    }
echo "Сообщение разослано !"
?>