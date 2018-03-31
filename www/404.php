<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery-1.9.1.js"></script>
	<title><?php
include 'masstitle.php';
if (isset($_GET['page'])){
if(isset($_GET['tit'])){echo $_GET['tit'];}
else{echo $array[$_GET['page']];}
if($_GET['page'] == "faspage"){echo $arrayfas[$_GET['id']];}
if($_GET['page'] == "roofpage"){echo $arrayroof[$_GET['id']];}
}
else
{
echo $array['home']; 
}
?></title>
<meta name="Description" content="<?php
if (isset($_GET['page'])){
echo $arraydes[$_GET['page']];
}
else
{
echo $arraydes['home']; ;
}
if($_GET['page'] == "faspage"){echo $arrayfas[$_GET['id']];}
if($_GET['page'] == "roofpage"){echo $arrayroof[$_GET['id']];}
?>
">
<meta name="Keywords" content="<?php
if (isset($_GET['page'])){
echo $arraykey[$_GET['page']];
}
else
{
echo $arraykey['home']; ;
}
?>
">


	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="SHORTCUT ICON" href="/favicon.ico" type="image/x-icon">
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
<meta name="robots" content="noyaca"/>
<meta name="robots" content="noodp"/>
<link rel="stylesheet" type="text/css" href="/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script async src="/js/jquery.cookie.js"></script>
</head>


<body>
<div id="photoids" style="display:none">
</div>
<div id="fonid" class="foncl" onclick="allclose()"></div>
<div id="fonid1" class="foncl" onclick="allclose1()"></div>


<?php
$is_main_page = false;
if ($_SERVER['REQUEST_URI']=='/') {
    $is_main_page = true;
}
include 'top.php';
include 'menu.php';
echo '<div class="flcl"></div>';

?>


<div class="kont">
<center>
<div><span class="calctitle1" style="font-weight:600">Ошибка 404 запрошенная страница не найдена</span>
</div>
</center>

 <div id="zaot" class="obrcl">
    <div class="obrsh"><div class="phone"></div><div onclick="zaot()" class="x-men"></div></div>
    <p style="text-align: center;">
	ЗАЯВКА ОТПРАВЛЕНА
	</p>
 </div>
 <div id="animation">
 <div class="photosh"><div class="photo"></div><div class="x-menphoto" onclick="photoopen()"></div></div>
 <img id="animationimg" src="/img/anim.gif" alt=""></div>
 <div id="epta">
 <div id="photoid1" class="photocl">
 </div>
  <div id="photoid2" class="photocl">
 </div>
  <div id="photoid3" class="photocl">
 </div>
  <div id="photoid4" class="photocl">
 </div>
  <div id="photoid5" class="photocl">
 </div>
  <div id="photoid6" class="photocl">
 </div>
 </div>
<!--СТАРТ_БЛОКА ОТПРАВИТЬ_ЗАЯВКУ-->
 <div id="obrid" class="obrcl" style="display: none;">
 <div class="obrsh"><div class="phone"></div><div onclick="obrzv()" class="x-men"></div></div>
 <div style="text-align: center;">
     <div style="text-align: center;">
 <div class="otvet_server"> </div>
 </div> 
 <form id="obrform" method="POST"><input class="obrinp xxx_name" style="text-transform: uppercase;" type="text" name="user" value="ИМЯ:*" onfocus="if(value=='ИМЯ:*'){value='';}" onblur="if(value=='') {value='ИМЯ:*';}" />
 <br/><input class="obrinp xxx_phone" type="text" name="phone" value="ТЕЛЕФОН:*" onfocus="if(value=='ТЕЛЕФОН:*'){value='';}" onblur="if(value=='') {value='ТЕЛЕФОН:*';}" />
 <input class="obrinp xxx_email" type="text" name="email" value="E-Mail:" onfocus="if(value=='E-Mail:'){value='';}" onblur="if(value=='') {value='E-Mail:';}" /><textarea name="soderj" class="txt1 xxx_soderj" placeholder="Описание работ, которые необходимо выполнить..." ></textarea>
 <div class="obrbutton2" onclick="sendzaivka();" style="margin-left: auto; margin-right: auto;">ОТПРАВИТЬ ЗАЯВКУ</div>
 </form></div>
 </div>
 
<!--КОНЕЦ_БЛОКА ОТПРАВИТЬ_ЗАЯВКУ-->
<script type="text/javascript" src="/scriptlolipop.js"></script>
<div style="display:none"><!-- Yandex.Metrika informer -->
<a href="/https://metrika.yandex.ru/stat/?id=25771700&amp;from=informer"
target="_blank" rel="nofollow"><img src="///bs.yandex.ru/informer/25771700/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:25771700,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36852725 = new Ya.Metrika({
                    id:36852725,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="/https://mc.yandex.ru/watch/36852725" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76488790-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'rT6VhosyaZ';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->


 <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 921703886;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="///www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="///googleads.g.doubleclick.net/pagead/viewthroughconversion/921703886/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


</br></br></br>

<center>
<span class="calctitle" style="font-size:24px !important">ООО «СК «ГОРОД» выполнит любую из поставленных задач качественно и в короткие сроки!</span>
<br/>
<div class="zakazhsaso">
<span class="calctitle" style="font-size:22px !important">НАШИ ЗАКАЗЧИКИ:</span><br/>
<img src="/img/r1.png">
<img src="/img/r2.png">
<img src="/img/r3.png">
<img src="/img/r4.png">
</div>
</center>
</div>
</body>
</html>