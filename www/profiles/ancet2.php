<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));	
mysql_query("SET NAMES utf8");
$fileslength = count($_FILES);
$i = 1;
$j = "";
$errors = 0;
$filetype;
$AI = 0;
function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'GH', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'CH', 'SH', 'SCH', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    $tran = str_replace($rus, $lat, $str);
	return $tran;
}
$result1 = mysql_query("SHOW TABLE STATUS FROM `host1334400` LIKE 'postav'");
$AI = mysql_result($result1, 0, 'Auto_increment');
mkdir("postav/".$AI, 0777);
for($i=10;$i<$fileslength+10;$i++){
if(is_uploaded_file($_FILES["file".$i]["tmp_name"])){
$filetype = $_FILES["file".$i]["type"];
if(($filetype == "application/msword") || ($filetype == "application/vnd.ms-excel") || ($filetype == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") || ($filetype == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($filetype == "image/jpeg") || ($filetype == "image/png") || ($filetype == "application/pdf")){
$_newname = $_FILES["file".$i]['name'];
$_filesname = call_user_func('translit', $_newname);
$_filesname = str_replace(' ', '_', $_filesname);
move_uploaded_file($_FILES["file".$i]["tmp_name"], "../profiles/postav/{$AI}/{$_filesname}");
}
else
{
	$errors = 1;
}
}
}
if($errors == 0){$result2 = mysql_query("INSERT INTO postav (orgname,fio,materials,phone,email) VALUES ('$_POST[orgname]','$_POST[fio]','$_POST[materials]','$_POST[phone2]','$_POST[email]')");
$message = "Добавлена анкета поставщика !";
$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: <ск-город.рф>\r\n"; 
$headers1 = iconv("utf-8", "windows-1251", $headers);
$message1 = iconv("utf-8", "windows-1251", $message);
$subj = "Анкета";
$subj1 = iconv("utf-8", "windows-1251", $subj);
mail("gorod-sk@list.ru", $subj1, $message1, $headers1); 		
}
if($errors == 0){echo "Анкета загружена !";}else{echo "Некоторые файлы не были загружены (не соответствует тип файла) !";}
?>