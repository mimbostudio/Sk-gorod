<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
?>">
<meta name="Keywords" content="<?php
if (isset($_GET['page'])){
echo $arraykey[$_GET['page']];
}
else
{
echo $arraykey['home']; ;
}
?>">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!--<link href="font/stylesheet.css" rel="stylesheet">-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
  </head>
  <body>
<header class="header1">
	<div class="bgfasad bgprom">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>
	<div class="container">
		<div class="glavkrovl">
			<h1>Высотные работы</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="aboutkrovl">О высотных работах</div>
	<div class="aboutkrovl2">
Высотные работы, или промышленный альпинизм, представляет собой специальную технологию для выполнения высотных работ во время строительства, монтажа и решения других актуальных задач в безопорном пространстве. 
На сегодняшний день высотные работы довольно-таки востребованы, поскольку просто необходимы в больших и высотных городах. 
	</div>
	<!--<div class="twobutton">
			<div class="buttoncalc" onclick="calcz();">Калькулятор</div>
		<div  class="buttonprise" onclick="price();">Прайс-лист</div>
	</div>-->
	<div class="ourserviceskrovl">Промышленный альпинизм</div>
	<!--<div class="ourserviceskrovl2">Поистине широк спектр работ, выполняемых нашей организацией, и может удовлетворить даже самого требовательного клиента.</div>-->
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Герметизация швов</div>
			<img src="img/prom1.png" class="imgservice"/>
			<div class="textservice">
			Герметизация швов производится с наружной стороны здания. Наши специалисты не только обнаружат причину таких явлений, но и устранят их в кратчайшие сроки.
			</div>
			<div class="botservice">
				<div href="" class="buttonservice" style="margin:0 auto;">Узнать стоимость</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж кондиционеров  на высоте</div>
			<img src="img/prom2.png" class="imgservice"/>
			<div class="textservice">
			Мы предлагаем вам качественный и профессиональный монтаж  кондиционеров  на высоте. Благодаря нам никому не придется вылезать из вашего окна – рискуя своей жизнью. Услуги верхолазов обойдутся в разы дешевле, нежели вызов  автовышки.
			</div>
			<div class="botservice">
				<div href="" class="buttonservice" style="margin:0 auto;">Узнать стоимость</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Покраска металлоконструкций</div>
			<img src="img/prom3.png" class="imgservice"/>
			<div class="textservice">
			Если Вы заинтересованы в том, чтобы, установленная Вами, металлоконструкция служила Вам долгие годы, необходимо обеспечить ей надёжную защиту - покраску металлоконструкций.
			</div>
			<div class="botservice">
				<div href="" class="buttonservice" style="margin:0 auto;">Узнать стоимость</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж наружной рекламы</div>
			<img src="img/prom4.png" class="imgservice"/>
			<div class="textservice">Крепление наружной рекламы при помощи промышленного альпинизма быстрее и дешевле, чем при помощи специальной подъемной техники. Именно поэтому и стоит сделать выбор в пользу специалистов-высотников.</div>
			<div class="botservice">
				<div href="" class="buttonservice" style="margin:0 auto;">Узнать стоимость</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Уборка снега с крыш</div>
			<img src="img/prom5.png" class="imgservice"/>
			<div class="textservice">
			Промышленные альпинисты нашей компании  проводят очистку крыш, кровель, балконов и карнизов от снега и наледи  быстро, качественно, соблюдая все правила проведения высотных работ и не потревожив Ваш покой.
			</div>
			<div class="botservice">
				<div href="" class="buttonservice" style="margin:0 auto;">Узнать стоимость</div>
			</div>
		</div>
	</div>
</div>
<?
$tablename = "krovel";
include 'calculator.php';
?>
<?include 'footer.php';?>
  </body>
</html>