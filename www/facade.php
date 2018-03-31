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
  <script>
<!--setInterval('location.reload()',1000);-->
  </script>
<header class="header1">
	<div class="bgfasad">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>
	<div class="container">
		<div class="glavkrovl">
			<h1>Фасадные работы</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="aboutkrovl">О фасадных работах</div>
	<div class="aboutkrovl2">
Фасад – это наружная сторона здания, которая не только защищает помещение от плохих погодных условий, но и отвечает за его внешний вид. Декорирование и ремонт фасадных систем - сложная задача, но наши профессионалы справятся с любой поставленной задачей.
</div>
	<div class="twobutton">
		<div class="buttoncalc" onclick="calcz();">Калькулятор</div>
		<div  class="buttonprise" onclick="price();">Прайс-лист</div>
	</div>
	<div class="ourserviceskrovl">Услуги по Вентилируемым фасадам</div>
	<!--<div class="ourserviceskrovl2">Поистине широк спектр работ, выполняемых нашей организацией, и может удовлетворить даже самого требовательного клиента.</div>-->
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Фасад из керамогранита</div>
			<img src="img/keramogranit.png" class="imgservice"/>
			<div class="textservice">Внешний вид такой облицовки красив, он отличается изяществом и солидностью, придает зданию респектабельности, черты монументальности. Обеспечивает отличную защиту от влаги, в холодный сезон предотвращает промерзание. </div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 1500р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Фасад из металлокассет</div>
			<img src="img/metallokasset.png" class="imgservice"/>
			<div class="textservice"> Облицовка фасада металлокассетами решает весь комплекс задач, стоящих перед вентилируемым фасадом. Они обеспечивают защиту от воздействия осадков и других неблагоприятных факторов вместе со слоем утеплителя и пароизоляции.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 2095р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Фасад из композита</div>
			<img src="img/kompozit.png" class="imgservice"/>
			<div class="textservice">Вентфасады часто изготавливаются из древесины и специальных пластиковых покрытий, которые прекрасно смотрятся на стенах. Но при этом, композитный материал, которым выполняется облицовка фасадов, является более долговечным и
доступным.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 2050р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="enterservice"></div>
	<div class="ourserviceskrovl">Услуги по Мокрым фасадам</div>
	<!--<div class="ourserviceskrovl2">Поистине широк спектр работ, выполняемых нашей организацией, и может удовлетворить даже самого требовательного клиента.</div>-->
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice" id="promyvka">Промывка фасада мойкой высокого давления</div>
			<img src="img/promyvka.png" class="imgservice"/>
			<div class="textservice">Наибольшей популярностью в наше время заслуженно пользуется мойка фасадов при помощи струи воды, которая подается под высоким давлением. Чаще всего мойка высокого давления применяется для очистки.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 35р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Утепление фасада</div>
			<img src="img/uteplenie.png" class="imgservice"/>
			<div class="textservice">Утепление фасада любого здания – это возможность не только повысить теплоизоляцию, но и сделать отделку дома красивой и необычной. Такая экономия в наше время особенно выгодна, ведь цены на коммунальные услуги постоянно изменяются.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 800р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Штукатурка стен фасада</div>
			<img src="img/shukaturka.png" class="imgservice"/>
			<div class="textservice">Штукатурка наружных стен неспроста до сих пор остается очень популярной среди прочих способов отделки фасада. Качественная штукатурка фасадов имеет достаточную стойкость к воздействию внешних факторов.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 350р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Шпаклевка стен фасада</div>
			<img src="img/shpaclevka.png" class="imgservice"/>
			<div class="textservice">Правильный выбор такого материала обеспечит фасаду качественную отделку и предотвратит его преждевременное разрушение. </div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 180р м<sup>2</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Покраска фасада в 2 слоя</div>
			<img src="img/pokraska.png" class="imgservice"/>
			<div class="textservice">После утепления фасада следующим шагом будет, естественно, его покраска. Лицом здания является фасад. Помимо эстетической функции, он еще и защищает стены здания от природных явлений, что могут их повредить.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 250р м<sup>2</sup></div>
			</div>
		</div>
	</div>
		<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice" id="oblicovka">Облицовка цоколя керамической плиткой</div>
			<img src="img/oblicovka.png" class="imgservice"/>
			<div class="textservice">
			Цокольное утолщение повышает тепло- и гидроизоляцию, визуально добавляет зданию добротности и устойчивости, при декоративной отделке является важным элементом архитектурного решения.
			</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 1300р м<sup>2</sup></div>
			</div>
		</div>
	</div>
</div>
<?include 'footer.php';?>

<?
$tablename = "fasad";
include 'calculator.php';
?>
  </body>
</html>