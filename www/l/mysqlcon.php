<?php

// Соединяемся, выбираем базу данных
$link = mysql_connect('localhost', 'host1334400_savk', 'qazwsxedc')
    or die('Не удалось соединиться: ' . mysql_error());

mysql_select_db('host1334400_doza') or die('Не удалось выбрать базу данных');

?>