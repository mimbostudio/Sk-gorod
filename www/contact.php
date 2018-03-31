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
	<div class="bgfasad bgcont">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>	
	<div class="container">
		<div class="glavkrovl">
			<h1>Наши Контакты</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>

<div class="container">
		<div class="background-gray c-b">			
			<div class="white-bg">
				<div class="text-contactd"> 
					<div class="n-c" >Email: <span>gorod-sk@list.ru</span> </div>	
					<div class="n-c">Телефоны:</div>
					<div class="des-c">+7(499) 34-110-34,<br><br>8-925-898-80-32</div>
					<div class="n-c">Адрес: <span>МО г.Химки, Ленинградское ш., Дом 25А, оф.1</span></div>
					<div class="n-c">Факс: <span>(499) 500-51-01</span></div>	
					<br><div class="n-c"><div>Реквизиты ООО «СК «ГОРОД»</div>
					Полное наименование организации:
					</div>
					<div class="des-c">
					Общество с ограниченной ответственностью «Строительная компания «Город»
					</div>
					<div class="n-c">Краткое наименование организации:<span>ООО «СК «Город»</span></div>
					<div class="n-c">ОГРН: <span>1147746828888</span></div>
					<div class="n-c">ИНН: <span>7733888580</span></div>
					<div class="n-c">КПП: <span>773301001</span></div>
					<div class="n-c">ОКПО: <span>33652545</span></div>
					<div class="n-c">ОКАТО: <span>45283555000</span></div>
					<div class="n-c">ОКТМО: <span>45366000000</span></div>
					<div class="n-c">ОКОГУ: <span>4210014</span></div>
					<div class="n-c">ОКФС: <span>4210014</span></div>
					<div class="n-c">ОКОПФ: <span>12165</span></div>
					<div class="n-c">ОКОПФ: <span>12165</span></div>
					<div class="n-c">Расчетный счет: <span>40702810938000002782</span></div>
					<div class="n-c">Банк: <span>ОАО «Сбербанк России» г. Москва </span></div>
					<div class="n-c">БИК: <span>044525225</span></div>
				</div>	
						
			</div>	
			<div class="form" id="cont">
				<div class="zglForm">Обратный звонок</div>			
					<div class="desForm">
						Оставьте заявку и мы перезвоним Вам в течение 15 минут.
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

<?include 'footer.php';?>
  </body>
</html>