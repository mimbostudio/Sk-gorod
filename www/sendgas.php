<?php
if($_POST['price']!=""){
if($_POST['price']=="all") $link = "http://город-ск.рф/price/all.xlsx";
if($_POST['price']=="Котельное оборудование") $link = "http://город-ск.рф/price/1_PRAJS_KOT_OBORUD.xlsx";
if($_POST['price']=="Газовые плиты") $link = "http://город-ск.рф/9_Prays_list_PLITY.xlsx";
if($_POST['price']=="Панельные радиаторы отопления") $link = "http://город-ск.рф/price/3_Prays_radiatory.xlsx";
if($_POST['price']=="Системы дымоудаления") $link = "http://город-ск.рф/price/7_Prays_Dymokhody.xlsx";
if($_POST['price']=="Трубы и фитинги PE-RT") $link = "http://город-ск.рф/price/4_Truby_i_fitingi.xlsx";
if($_POST['price']=="Коллекторные группы") $link = "http://город-ск.рф/price/all.xlsx";
if($_POST['price']=="Краны, муфты, фильтры, задвижки") $link = "http://город-ск.рф/price/6_Krany_mufty_filtry_zadvizhki.xlsx";
if($_POST['price']=="Дымоходы из нержавеющей стали") $link = "http://город-ск.рф/price/7_Prays_Dymokhody.xlsx";
if($_POST['price']=="Источники бесперебойного питания") $link = "http://город-ск.рф/price/all.xlsx";
if($_POST['price']=="Приборы учета") $link = "http://город-ск.рф/price/10_pirbory_ucheta_gazovye_schetchiki.xlsx";

$message = '
	Здравствуйте ' . $_POST['Name'] . ' ! <br />
	Перейти к прайс-листу "'.$_POST['price'].'"  можно нажав на кнопку «Скачать Прайс-лист» <br />
	<a href="'.$link.'" style="width: 268px;height: 42px;text-decoration:none; padding-top:15px;font-size: 16px;text-align: center;display:block;background-color: #4a5edb;color: #fff;"> Скачать Прайс-лист</a>';
mail($_POST['Email'], "[ГОРОД-СК]Прайс-лист " .$_POST['price'], $message,
     "From:gorod-sk\r\nContent-type:text/html;charset=utf-8\r\n"
    ."X-Mailer: PHP/" . phpversion());

// отправляем письмо
$message2 = '
	Имя: ' . $_POST['Name'] . '<br />
	Телефон: ' . $_POST['Phone'] . '<br />
	Email: ' . $_POST['Email'] . '<br />
	Название прайса: ' . $_POST['price'] . '
';
mail("gorod-sk@list.ru", "[ГОРОД-СК]Запросили прайс-лист", $message2,
     "From:gorod-sk \r\nContent-type:text/html;charset=utf-8\r\n"
    ."X-Mailer: PHP/" . phpversion());
}else {
	
	$message = '
	Имя: ' . $_POST['Name'] . '<br />
	Телефон: ' . $_POST['Phone'] . '<br />
	Email/сообщение: ' . $_POST['Email'] . '
';
mail("gorod-sk@list.ru", "[ГОРОД-СК]Заявка с сайта", $message,
     "From:gorod-sk \r\nContent-type:text/html;charset=utf-8\r\n"
    ."X-Mailer: PHP/" . phpversion());
} 

echo "1";
?> 
