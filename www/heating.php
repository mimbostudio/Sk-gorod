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
	<div class="bgfasad bgotop">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>	
	<div class="container">
		<div class="glavkrovl">
			<h1>Отопление и Водоснабжение</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>
<div class="container">

	<div class="twobutton">
		<div class="buttoncalc" onclick="calcz();">Калькулятор</div>
		<div  class="buttonprise" onclick="price();">Прайс-лист</div>
	</div>

	<div class="aboutkrovl why100" style="margin-top:20px;">Работы по Отоплению и Водоснабжению</div>
	<div class="ourserviceskrovl2">Вы можете заказать любые монтажные работы отдельно</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">проект системы отопления</div>
			<img src="img/sistem.png" class="imgservice"/>
			<div class="textservice leftserv">• точное расположение отопительного оборудования в доме; <br>
• список оборудования; <br>
• точные характеристики системы
(мощность, производительность
и другие параметры).</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 7000р.</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж радиаторов</div>
			<img src="img/radiator.png" class="imgservice"/>
			<div class="textservice leftserv">За 1 день установим любые виды радиаторов:
<br><br>
• биметаллические;<br>
• алюминиевые;<br>
• стальные.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 3000р.</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж теплого пола</div>
			<img src="img/pol.png" class="imgservice"/>
			<div class="textservice leftserv">Монтаж теплого пола под любое покрытие:
<br><br>
• под плитку; <br>
• под ламинат; <br>
• под ковролин;<br>
• под паркет.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 350р.</div>
			</div>
		</div>
	</div>
	
	
		<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж коллектора водоснабжения</div>
			<img src="img/voda1.png" class="imgservice"/>
			<div class="textservice leftserv">
			Монтаж коллектора водоснабжения осуществляется в определенном месте, которое будет зависеть от назначения устройства. Наиболее часто данный элемент схемы предназначается для организации многоконтурного теплоснабжения. 
			</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 3000р.</div>
			</div>
		</div>
	</div>
	
	
		<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж точки водоснабжения </div>
			<img src="img/voda2.png" class="imgservice"/>
			<div class="textservice leftserv">
			В данную стоимость входит прокладка труб холодного и горячего водоснабжения от запорного крана на стояке или коллектора до сантехнического прибора.
			
			</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 1500р.</div>
			</div>
		</div>
	</div>
	
	
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж газового котла</div>
			<img src="img/gazkotel.png" class="imgservice"/>
			<div class="textservice leftserv">Установка газового котла производится в соответствии с нормативными документами: <br>
<br>
• СНиП «Жилые здания»; <br>
• СНиП «Газоснабжение» 2.04.08-87.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 8000р.</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж электрокотла</div>
			<img src="img/electkotel.png" class="imgservice"/>
			<div class="textservice leftserv">Для электрокотла не требуется отдельного помещения и наличия дымохода.
(Электрокотел можно смонтировать на кухне, в гостиной, в санузле).</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 8000р.</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж твердотопливного котла</div>
			<img src="img/tverdkotel.png" class="imgservice"/>
			<div class="textservice leftserv">Преимуществом твердотопливных котлов является относительно низкая стоимость твёрдого топлива (дрова, торф, уголь, пеллеты).</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 12000р.</sup></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж теплового насоса</div>
			<img src="img/nasos.png" class="imgservice"/>
			<div class="textservice leftserv">Тепловым насосом называется устройство, которое переносит энергию тепла, рассредоточенную в окружающей среде, в помещении.
Тепловой насос является альтернативой котлу отопления.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 13000р.</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж бойлера</div>
			<img src="img/boyler.png" class="imgservice"/>
			<div class="textservice leftserv">Грамотный монтаж бойлера обеспечит Вас достаточным количеством горячей воды.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 8000р.</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<div class="krovlservice">
			<div class="headservice">Монтаж труб</div>
			<img src="img/truba.png" class="imgservice"/>
			<div class="textservice leftserv">Благодаря использованию профессионального инструмента при монтаже труб Вы получите монолитное соединение, которое можно замуровывать в стены, стяжку.</div>
			<div class="botservice">
				<div href="" class="buttonservice">Заказать сейчас</div>
				<div class="cost">от 49р. м.п.</div>
			</div>
		</div>
	</div>
</div>
<div class="bgsolution">
	<div class="container">
		<div class="ourserviceskrovl whiteserv">Готовые решения «Под ключ»</div>
		<div class="ourserviceskrovl2 whiteserv2">Стоимость актуальна для всех типов отопления: газового, электрического, водяного, автономного.</div>
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="homesolution">
				<img src="img/home1.png" class="imgservice activeImgO"/>
				<div class="textsol">Дом 100м<sup>2</sup></div>
			</div>
		</div>	
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="homesolution">
				<img src="img/home2.png" class="imgservice"/>
				<div class="textsol">Дом 200м<sup>2</sup></div>
			</div>
		</div>	
		<div class="row" id="rowsolut"></div>
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="homesolution">
				<img src="img/home3.png" class="imgservice"/>
				<div class="textsol">Дом 300м<sup>2</sup></div>
			</div>
		</div>	
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="homesolution">
				<img src="img/home4.png" class="imgservice"/>
				<div class="textsol">Дом 400м<sup>2</sup></div>
			</div>
		</div>
		<div class="row"></div>
		
		<!--БЛОКИ-->
		<div class="oo1 ooact ooc wow fadeIn animated" data-wow-offset="0" data-wow-delay="0.1s">
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Эконом» 100м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Китай, Италия<br>
						<b>Котел:</b> двухконтурный настенный Baxi<br>
						<b>Радиаторы:</b> алюминиевые<br>
						<b>Водяной теплый пол:</b> отсутствует<br>
						<b>Прокладка труб в доме:</b> открытая двухтрубная<br>
						<b>Материал труб:</b> полипропилен<br>
						<b>Регулирование температуры:</b> ручное на котле<br>
						<b>Срок выполнения работ:</b> 5 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">161 000р </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Комфорт» 100м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Словакия, Италия, 
						Германия<br>
						<b>Котел:</b> одноконтурный настенный Protherm, Baxi<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> 15 м<sup>2</sup><br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, металлопластик<br>
						<b>Регулирование температуры:</b> автоматическое/ручное на радиаторах<br>
						<b>Срок выполнения работ:</b> 7 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">266 000р </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Премиум» 100м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Италия, Германия<br>
						<b>Котел:</b>одноконтурный напольный Vaillant, Buderus<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> весь дом<br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, медь<br>
						<b>Регулирование температуры:</b> автоматическое<br>
						<b>Срок выполнения работ:</b> 9 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">351 500р </div>
					</div>
				</div>
			</div>
		</div>
			<!--БЛОКИ-->
			
			
				<!--БЛОКИ-->
		<div class="oo2 ooc wow fadeIn animated" data-wow-offset="0" data-wow-delay="0.1s">
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Эконом» 200м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Китай, Италия<br>
						<b>Котел:</b> двухконтурный настенный Baxi<br>
						<b>Радиаторы:</b> алюминиевые<br>
						<b>Водяной теплый пол:</b> отсутствует<br>
						<b>Прокладка труб в доме:</b> открытая двухтрубная<br>
						<b>Материал труб:</b> полипропилен<br>
						<b>Регулирование температуры:</b> ручное на котле<br>
						<b>Срок выполнения работ:</b> 5 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">323 000р </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Комфорт» 200м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Словакия, Италия, 
						Германия<br>
						<b>Котел:</b> одноконтурный настенный Protherm, Baxi<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> 15 м<sup>2</sup><br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, металлопластик<br>
						<b>Регулирование температуры:</b> автоматическое/ручное на радиаторах<br>
						<b>Срок выполнения работ:</b> 7 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">494 000р </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Премиум» 200м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Италия, Германия<br>
						<b>Котел:</b>одноконтурный напольный Vaillant, Buderus<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> весь дом<br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, медь<br>
						<b>Регулирование температуры:</b> автоматическое<br>
						<b>Срок выполнения работ:</b> 9 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">750 500р </div>
					</div>
				</div>
			</div>
		</div>
			<!--БЛОКИ-->
			
			
				<!--БЛОКИ-->
		<div class="oo3 ooc wow fadeIn animated" data-wow-offset="0" data-wow-delay="0.1s">
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Эконом» 300м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Китай, Италия<br>
						<b>Котел:</b> двухконтурный настенный Baxi<br>
						<b>Радиаторы:</b> алюминиевые<br>
						<b>Водяной теплый пол:</b> отсутствует<br>
						<b>Прокладка труб в доме:</b> открытая двухтрубная<br>
						<b>Материал труб:</b> полипропилен<br>
						<b>Регулирование температуры:</b> ручное на котле<br>
						<b>Срок выполнения работ:</b> 5 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">427 500р</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Комфорт» 300м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Словакия, Италия, 
						Германия<br>
						<b>Котел:</b> одноконтурный настенный Protherm, Baxi<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> 15 м<sup>2</sup><br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, металлопластик<br>
						<b>Регулирование температуры:</b> автоматическое/ручное на радиаторах<br>
						<b>Срок выполнения работ:</b> 7 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">636 500р </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Премиум» 300м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Италия, Германия<br>
						<b>Котел:</b>одноконтурный напольный Vaillant, Buderus<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> весь дом<br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, медь<br>
						<b>Регулирование температуры:</b> автоматическое<br>
						<b>Срок выполнения работ:</b> 9 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">921 500р</div>
					</div>
				</div>
			</div>
		</div>
			<!--БЛОКИ-->
			

					<!--БЛОКИ-->
		<div class="oo4 ooc wow fadeIn animated" data-wow-offset="0" data-wow-delay="0.1s">
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Эконом» 400м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Китай, Италия<br>
						<b>Котел:</b> двухконтурный настенный Baxi<br>
						<b>Радиаторы:</b> алюминиевые<br>
						<b>Водяной теплый пол:</b> отсутствует<br>
						<b>Прокладка труб в доме:</b> открытая двухтрубная<br>
						<b>Материал труб:</b> полипропилен<br>
						<b>Регулирование температуры:</b> ручное на котле<br>
						<b>Срок выполнения работ:</b> 5 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">541 500р</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Комфорт» 400м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Словакия, Италия, 
						Германия<br>
						<b>Котел:</b> одноконтурный настенный Protherm, Baxi<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> 15 м<sup>2</sup><br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, металлопластик<br>
						<b>Регулирование температуры:</b> автоматическое/ручное на радиаторах<br>
						<b>Срок выполнения работ:</b> 7 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">731 500р</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="krovlservice">
					<div class="headsolut">«Премиум» 500м<sup>2</sup></div>
					<div class="textsolut">
						<b>Производители материалов:</b> Италия, Германия<br>
						<b>Котел:</b>одноконтурный напольный Vaillant, Buderus<br>
						<b>Радиаторы:</b> стальные Kermi<br>
						<b>Водяной теплый пол:</b> весь дом<br>
						<b>Прокладка труб в доме:</b> скрытая лучевая<br>
						<b>Материал труб:</b> сшитый полиэтилен, медь<br>
						<b>Регулирование температуры:</b> автоматическое<br>
						<b>Срок выполнения работ:</b> 9 дней
					</div>
					<div class="botservice mb35">
						<div href="" class="buttonservice">Заказать сейчас</div>
						<div class="cost">1 187 500р </div>
					</div>
				</div>
			</div>
		</div>
			<!--БЛОКИ-->
			
			
	</div>
</div>


<div class="container">
<div class="aboutkrovl why100" >Почему 100% наших клиентов рекомендуют нас?</div>
	<div class="aboutkrovl2">«ГОРОД» на рынке строительных услуг Москвы и Московской области более 10 лет.</div>
	<div class="ourserviceskrovl2" id="enterotop">Спектр работ, выполняемых нашей организацией, поистине широк, и может удовлетворить даже самого требовательного клиента!</div>
	<div class="allotoplenie">
	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="ansotop">
			<img src="img/worker2.png" alt=""/>
			<div class="ansotop2">Выезд эксперта на объект</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="ansotop">
			<img src="img/time.png" alt="">
			<div class="ansotop2">Четкое соблюдение сроков</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="ansotop">
			<img src="img/inst.png" alt="">
			<div class="ansotop2">Оказываем весь спектр услуг</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="ansotop">
			<img src="img/pismo.png" alt=""/>
			<div class="ansotop2">Все работники - аттестованные 
специалисты, граждане РФ</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="ansotop">
			<img src="img/mashina.png" alt="" class="car">
			<div class="ansotop2">Собственный транспорт и монтажное оборудование</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="ansotop">
			<img src="img/$.png" class="doll" alt="">
			<div class="ansotop2">Цена, указанная в смете, не изменяется по ходу проекта</div>
		</div>
	</div>
	</div>
	<div class="row"></div>
</div>

<?include 'footer.php';?>

<?
$tablename = "heating";
include 'calculator.php';
?>
  </body>
  </body>
</html>