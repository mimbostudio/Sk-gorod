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
	<div class="bg2">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>	
	<div class="container">
		<div class="col-md-8">
			<div class="glav">
				<h1 class="who-description wow fadeInDown"  data-wow-offset="0" data-wow-delay="0.5s">Отопление под ключ, фасадные и кровельные работы</h1>
				<div class="enter"></div>
				<span class="garant wow fadeIn"  data-wow-offset="0" data-wow-delay="0.9s">
					<span class="bold">Гарантия</span>
					<span class="light">3 года</span>  
				</span>
				<a href="SRO.docx">
				<span class="garant wow fadeIn"  data-wow-offset="0" data-wow-delay="1s">
					<span class="bold">Сертификат</span>
					<span class="light">СРО</span> 
				</span>
				</a>
			</div>
		</div>
		<div class="col-md-4">	
			<div class="form">
				<div class="zglForm">Обратный звонок</div>			
					<div class="desForm">
						Оставьте заявку и мы перезвоним Вам в течение 20 минут.
					</div>				
					<form>
						<input placeholder="Имя:" name="Name" type="text"> </input>
						<input placeholder="Телефон:" name="Phone" type="text"> </input>
						<input placeholder="Ваше сообщение" name="Email" type="text"> </input>
						<div class="btnForm">Отправить заявку
						</div>		
					</form>		
			</div>
		</div>
	</div>
</header>


<div class="container">
	<div class="whywe">Почему Мы?</div>
	<div class="whywe2">«ГОРОД» - одна из самых быстроразвивающихся строительных компаний, оказывающих свои услуги в Москве и Московской области.
Спектр работ, выполняемых нашей организацией, поистине широк, и может удовлетворить даже самого требовательного клиента!</div>
	<div class="col-md-3 col-sm-6">
		<div class="answer">
			<img src="img/10year.png" alt=""/>
			<div class="year">10лет</div>
			<div class="answer2 who-description wow fadeIn"  data-wow-offset="50" data-wow-delay="0.3s">На рынке строительных услуг Москвы и Московской области более 10 лет.</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="answer">
			<img src="img/worker.png" alt="">
			<div class="answer2 who-description wow fadeIn"  data-wow-offset="50" data-wow-delay="0.5s">Работы выполняются высокопрофессиональными специалистами.</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="answer">
			<img src="img/bricks.png" alt="">
			<div class="answer2 who-description wow fadeIn"  data-wow-offset="50" data-wow-delay="0.7s">Только качественные материалы, способные выдерживать различные  нагрузки. </div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="answer">
			<img src="img/garant.png" alt="">
			<div class="answer2 who-description wow fadeIn"  data-wow-offset="50" data-wow-delay="0.9s">Гарантия сохранения характеристик покрытий при правильной эксплуатации.</div>
		</div>
	</div>
	<div class="enter2"></div>
	<div class="ourservices">Наши Услуги</div>
	<div class="ourservices2">Поистине широк спектр работ, выполняемых нашей организацией, и может удовлетворить даже самого требовательного клиента.</div>
	<div class="col-md-4">
		<div href="" class="video" id="open_pop_up_video">
			<div class="head">Видео о компании</div>
			<div class="play1">
				<div class="play2"></div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
	<a href="/roofs">
		<div class="service">
			<div class="head1">Кровельные работы</div>
			<div class="ansservice">У нас всегда доступные цены на крoвельные рабoты, все крoвельные материалы, начиная от доставки материалов на объект и заканчивая монтажом кровли.</div>
			<div  href="" class="button">Отправить заявку</div>
			<a href="/roofs" class="calc">Подробнее</a>
		</div>
	</a>
	</div>
	<div class="col-md-4 col-sm-6">
	<a href="/facades">
		<div class="service">
			<div class="head1">Фасадные работы</div>
			<div class="ansservice">Мы безупречно выполняем даже самые сложные фасадные работы. Цена услуг формируется с учетом конструктивной сложности, площади, фактуры стен.</div>
			<div  href="" class="button">Отправить заявку</div>
			<a href="/facades" class="calc">Подробнее</a>
		</div>
		</a>
	</div>
	<div class="col-md-4 col-sm-6">
	<a href="/heating" >
		<div class="service">
			<div class="head1">Отопление</div>
			<div class="ansservice">Каждая система отопления проектируется опытными проектировщиками с запасом по мощности. Даже самой холодной зимой у Вас будет комфорт и уют.</div>
			<div  href="" class="button">Отправить заявку</div>
			<a href="/heating" class="calc">Подробнее</a>
		</div>
		</a>
	</div>
	<div class="col-md-4 col-sm-6">
	<a href="/heating" >
		<div class="service">
			<div class="head1">Водоснабжение</div>
			<div class="ansservice">Водоснабжение под ключ. Это означает, что Вам не нужно будет самостоятельно рассчитывать смету или подбирать необходимое оборудование. </div>
			<div  href="" class="button">Отправить заявку</div>
			<a href="/heating" class="calc">Подробнее</a>
		</div>
		</a>
	</div>
	<div class="col-md-4 col-sm-6">
	<a href="/indmounts">
		<div class="service">
			<div class="head1">Промальпинизм</div>
			<div class="ansservice">Мы используем сертифицированное профессиональное снаряжение, надежность которого обязательно проверяется перед выездом на объект. </div>
			<div  href="" class="button">Отправить заявку</div>
			<a href="/indmounts" class="calc">Подробнее</a>
		</div>
		</a>
	</div>
</div>

<div class="bg3">
	<div class="container">
		<div class="textclients">Партнёры «СК Город»</div>
		<img class="imgclient" id="img1" src="img/gasprom.png" alt="">
		<img class="imgclient" id="img2" src="img/bankinteza.png" alt="">
		<img class="imgclient" id="img3" src="img/mmvb.png" alt="">
		<img class="imgclient" id="img4" src="img/bankross.png" alt="">
		<img class="imgclient" id="img5" src="img/mosoblgaz.png" alt="">
	</div>
</div>
<div class="bgport">
	<div class="container">
		<div class="textport">Портфолио</div>
		<div class="line2"></div>
		
		<?
		
		if ($result = $mysqli->query("SELECT * FROM viprab ORDER BY id DESC limit 6")) {
			while ($myrow = $result->fetch_array(MYSQLI_ASSOC)){
		?>	
			
					<div class="col-md-4"  onclick="porfolio('<?=$myrow[adress];?>','<?=$myrow[text];?>','/vipimg/<?=$myrow[img1];?>','/vipimg/<?=$myrow[img2];?>');">
			<div class="imgport1" id="portfolio_<?=$myrow[id]?>">
				<div class="opisport"><?=$myrow[adress]?></div>
			<div class="buttonport">Подробнее</div>
			</div>
		</div>
		<style>
			#portfolio_<?=$myrow[id]?> {
				background:url(/vipimg/<?=$myrow[img2]?>)!important;
				background-size:cover!important;
				background-position:center center;
				cursor:pointer;
					background-size:cover;
				transition: all 0.2s;
			}
			#portfolio_<?=$myrow[id]?>:hover {
				background:url(/vipimg/<?=$myrow[img1]?>)!important;
				background-size:cover;
				background-position:center center;
			}
			
		
		</style>
			
			<?
			}
		}
		$result->close();
		?>
<div class="row"></div>
		<div class="button2" onclick="popup();">Отправить заявку</div>
	</div>
</div>
<!--VIDEO-->

<section id="pop_up_video" class="pop_up_video">
		  <div>
  		  <div>
  			    <a href="" id="pop_up_video_bg" class="pop_up_video_bg"></a>
  		    	<div id="video_container" class="video_container">
        				<div id="video" class="video">
  					        <iframe width="560" height="315" id="pop_up_video_iframe" src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  				      </div>
  			    </div>
  		  </div>
  		</div>
	</section>

<?include 'footer.php';?>	


<!--Подробнее-->
<div class="port_modal">
<div class="zatem" onclick="porfolio();"></div>
<div class="port_modal_div">
<div class="form_top"><div class="port_modal_top"><div class="port_modal_title"></div></div><div class="form_close" onclick="porfolio();"><img src="img/close2.jpg"></div><div class="flcl"></div></div>
<div class="port_modal_text"></div>
<div class="port_before"><div class="port_before_img"><img src=""></div></div><br/>
<div class="port_after"><div class="port_after_img"><img src=""></div></div>
</div>
</div>
<!--Подробнее-->


  </body>
</html>