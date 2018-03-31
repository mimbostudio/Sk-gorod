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
$avatar;
$filetype;
$AI = 0;
$jobs = "";
function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'GH', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'CH', 'SH', 'SCH', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    $tran = str_replace($rus, $lat, $str);
	return $tran;
}
if($_POST['option1']=="on"){$jobs = $jobs."Кровельные работы; ";};
if($_POST['option2']=="on"){$jobs = $jobs."Отделочные работы; ";};
if($_POST['option3']=="on"){$jobs = $jobs."Проектирование и дизайн; ";};
if($_POST['option4']=="on"){$jobs = $jobs."Благоустройство территорий; ";};
if($_POST['option5']=="on"){$jobs = $jobs."Мелкие бытовые услуги; ";};
if($_POST['option6']=="on"){$jobs = $jobs."Комплексные работы; ";};
if($_POST['option7']=="on"){$jobs = $jobs."Строительно-монтажные работы; ";};
if($_POST['option8']=="on"){$jobs = $jobs."Инженерные системы; ";};
if($_POST['option9']=="on"){$jobs = $jobs."Обслуживание объектов; ";};
if($_POST['option10']=="on"){$jobs = $jobs."Интерьер; ";};
if($_POST['option11']=="on"){$jobs = $jobs."Строительный альпинизм; ";};
$result1 = mysql_query("SHOW TABLE STATUS FROM `host1334400` LIKE 'masters'");
$AI = mysql_result($result1, 0, 'Auto_increment');
mkdir("masters/".$AI, 0700);
for($i=1;$i<$fileslength+1;$i++){
if(is_uploaded_file($_FILES["file".$i]["tmp_name"])){
$filetype = $_FILES["file".$i]["type"];
if(($filetype == "application/msword") || ($filetype == "application/vnd.ms-excel") || ($filetype == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") || ($filetype == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($filetype == "image/jpeg") || ($filetype == "image/png") || ($filetype == "application/pdf")){
$_newname = $_FILES["file".$i]['name'];
$_filesname = call_user_func('translit', $_newname);
$_filesname = str_replace(' ', '_', $_filesname);
if($i==1){$avatar=$_filesname;}
move_uploaded_file($_FILES["file".$i]["tmp_name"], "../profiles/masters/{$AI}/{$_filesname}");
}
else
{
	$errors = 1;
}
}
}
if($errors == 0){$result2 = mysql_query("INSERT INTO masters (fio,years,city,position,jobs,phone,email,avatar) VALUES ('$_POST[name]','$_POST[years]','$_POST[city]','$_POST[position]','$jobs','$_POST[phone]','$_POST[email]','$avatar')");
$message = "Добавлена анкета мастера !";
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