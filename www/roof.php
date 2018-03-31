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
	<div class="bgkrovl">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>
	<div class="container">
		<div class="glavkrovl">
			<h1>Кровельные работы</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="aboutkrovl">О кровельных работах</div>
	<div class="aboutkrovl2">Крыша любого дома – это надежная защита от всех внешних невзгод. Она дает нам чувство защищенности и безопасности. Когда крыша прохудилась и требует ремонта, а безопасность дома оказывается под угрозой – действовать необходимо безотлагательно.</div>
	<div class="twobutton">
			<div class="buttoncalc" onclick="calcz();">Калькулятор</div>
		<div  class="buttonprise" onclick="price();">Прайс-лист</div>
	</div>
	<div class="ourserviceskrovl">Кровельные услуги</div>
	<!--<div class="ourserviceskrovl2">Поистине широк спектр работ, выполняемых нашей организацией, и может удовлетворить даже самого требовательного клиента.</div>-->
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Наплавляемая кровля</div>
			<img src="img/napl.png" class="imgservice"/>
			<div class="textservice">
			
			Популярность наплавляемой кровли обусловлена ее уникальными качествами: долговечностью (может прослужить от 10 до 30 лет – в зависимости от материала), прочностью, водонепроницаемостью, устойчивостью к механическим деформациям и перепадам температуры.
			
			</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 100р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Фальцевая кровля</div>
			<img src="img/falc.png" class="imgservice"/>
			<div class="textservice">Если у вашего здания скатная кровля и вы хотите, чтобы она вам долго и бесперебойно служила, тогда остановите свой выбор на фальцевой кровле. Материалы: оцинкованный лист; металл с полимерным покрытием; медь. </div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 450р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Гибкая черепица</div>
			<img src="img/gib.png" class="imgservice"/>
			<div class="textservice">На сегодняшний день при строительстве загородных домов и коттеджей очень широко применятся для кровли крыш мягкая битумная черепица. И это не удивительно, ведь у мягкой черепицы имеется очень много преимуществ.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 650р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Металлочерепица</div>
			<img src="img/matallo.png" class="imgservice"/>
			<div class="textservice">Металлочерепица и профнастил являются одними из самых надежных и долговечных материалов, подходящих для эксплуатации в суровых климатических условиях средней полосы России с большими среднегодовыми перепадами температуры.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 550р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Керамочерепица</div>
			<img src="img/keramo.png" class="imgservice"/>
			<div class="textservice">Керамическая черепица – один из наиболее популярных кровельных материалов. Несмотря на дороговизну, она пользуется огромной популярностью благодаря своей долговечности и экологичности.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 750р м<sup>2</sup></div>
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