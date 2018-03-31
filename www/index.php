<?php
$nameDB = "host1334400";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "host1334400";//Имя пользователя БД
$passUSER = "78e96487";//Пароль пользователя БД
$mysqli = new mysqli($nameSERVER, $nameUSER, $passUSER, $nameDB);
$mysqli->query("SET NAMES utf8");	
$is_main_page = false;
if ($_SERVER['REQUEST_URI']=='/') {
    $is_main_page = true;
}
if (isset($_GET['page'])){
$str_module = $_GET['page'].'.php';
include $str_module;
}
else
{
include 'indexbuild.php';
}
?>
<!-- Begin LeadBack code {literal} -->
<script>
    var _emv = _emv || [];
    _emv['campaign'] = '6a7dc0811b68d32bec63f5d3';
    
    (function() {
        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
    })();
</script>
<!-- End LeadBack code {/literal} -->