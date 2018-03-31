<?php

$message = '
	Имя: ' . $_POST['Name'] . '<br />
	Телефон: ' . $_POST['Phone'] . '<br />
	Описание: ' . $_POST['Email'] . '
';
if($_POST['Name'] and $_POST['Phone']) {
mail("gorod-sk@list.ru", "[ГОРОД-СК]Заявка с сайта", $message,
     "From:Заявка@ example.com \r\nContent-type:text/html;charset=utf-8\r\n"
    ."X-Mailer: PHP/" . phpversion());
	echo "1";
	}else {
echo "0";
	}
?> 
