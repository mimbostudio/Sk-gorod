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
	<div class="bgfasad bgpart">
	<?include 'menuDesctope.php';?>	
	<?include 'menuMobile.php';?>	
	<div class="container">
		<div class="glavkrovl">
			<h1>Партнерам</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>
<div class="container">



<script>
function butt_master(){$(".ancet_postav").css("display","none");$(".ancet_master").css("display","block");$(".partners_menu_master").css("background","#ffa835");$(".partners_menu_master").css("color","#fff");$(".partners_menu_postav").css("background","#fff");$(".partners_menu_postav").css("color","#868B95");}
function butt_postav(){$(".ancet_master").css("display","none");$(".ancet_postav").css("display","block");$(".partners_menu_postav").css("background","#ffa835");$(".partners_menu_postav").css("color","#fff");$(".partners_menu_master").css("background","#fff");$(".partners_menu_master").css("color","#868B95");}
function send(){
var data = new FormData($('#myForm')[0]);
var q1,q2,q3;
q1 = $("[name=name]").val();
q2 = $("[name=file1]").val();
q3 = $("[name=phone]").val();
if((q1=="")||(q2=="")||(q3=="")){alert("Заполните все обязательые поля !");}else{
$.ajax({
      type: "POST",
      url: "profiles/ancet.php",
      data: data,
      contentType: false,
      processData: false,
}).done(function (html) {
	$(".results").html(html);
        console.log(html);
		if("Анкета загружена !" == html){
			
			alert("Заявка отправлена");
			 window.location.href = "http://город-ск.рф/";
			
		}
      });
}
}
function send2(){
var data = new FormData($('#myForm2')[0]);
var q1,q2,q3;
q1 = $("[name=orgname]").val();
q2 = $("[name=fio]").val();
q3 = $("[name=phone2]").val();
if((q1=="")||(q2=="")||(q3=="")){alert("Заполните все обязательые поля !");}else{
$.ajax({
      type: "POST",
      url: "profiles/ancet2.php",
      data: data,
      contentType: false,
      processData: false,
}).done(function (html) {
	$(".results").html(html);
        console.log(html);
		
		
			if("Анкета загружена !" == html){
			
			alert("Заявка отправлена");
			 window.location.href = "http://город-ск.рф/";
			
		}
		
      });
}
}
</script>
<div class="kont"><div id="scrto"></div>
<center>
<span class="calctitle"><h1 class="h1wr">ПАРТНЕРАМ</h1></span></center>
<br/>
<div class="partners_ancet_div">
<div class="partners_ancet_left">
<div class="partners_menu_master" onclick="butt_master()">Мастерам</div>
<div class="partners_menu_postav" onclick="butt_postav()">Поставщикам</div>
</div>
<div class="partners_ancet_right">
<div class="ancet_master">
<div class="part_zagol">Регистрация мастера</div>
<br/>
<form action="ancet.php" id="myForm" method="post" enctype="multipart/form-data">
<input class="partners_inp1" name="name" type="text" placeholder="ФИО*"></input>
<input class="partners_inp1" name="years" type="text" placeholder="Возраст"></input>
<div class="postav_price">Фото*: <input type="file" name="file1"/></div>
<br/>
<input class="partners_inp1" name="city" type="text" placeholder="Город"></input>
<input class="partners_inp1" name="position" type="text" placeholder="Должность (мастер/бригадир/***)"></input>
Выполняемые работы:<br/>
<div class="partners_ancet_div_check">
<label><input type="checkbox" name="option1"/>Кровельные работы</label><Br>
<label><input type="checkbox" name="option2"/>Отделочные работы</label><Br>
<label><input type="checkbox" name="option3"/>Проектирование и дизайн</label><Br>
<label><input type="checkbox" name="option4"/>Благоустройство территорий</label><Br>
<label><input type="checkbox" name="option5"/>Мелкие бытовые услуги</label><Br>
<label><input type="checkbox" name="option6"/>Комплексные работы</label><Br>
<label><input type="checkbox" name="option7"/>Строительно-монтажные работы</label><Br>
<label><input type="checkbox" name="option8"/>Инженерные системы</label><Br>
<label><input type="checkbox" name="option9"/>Обслуживание объектов</label><Br>
<label><input type="checkbox" name="option10"/>Интерьер</label><Br>
<label><input type="checkbox" name="option11"/>Строительный альпинизм</label><Br>
</div>
<br/>
<div class="postav_price">Фото работ:
<br><input type="file" name="file2"/>
<br><input type="file" name="file3"/>
<br><input type="file" name="file4"/>
<br><input type="file" name="file5"/></div>
<br/>
<div class="postav_price">Документы (сертификаты и пр.):
<br><input type="file" name="file6"/>
<br><input type="file" name="file7"/>
<br><input type="file" name="file8"/>
<br><input type="file" name="file9"/></div>
<br/>
<input class="partners_inp1" name="phone" type="text" placeholder="Телефон*"></input>
<input class="partners_inp1" name="email" type="text" placeholder="E-mail"></input>
<input type="button" class="btnd" onclick="send()" value="Отправить анкету"/><div class="results"></div>
</form>
</div>





<div class="ancet_postav">
<div class="part_zagol">Регистрация поставщика</div>
<br/>
<form action="ancet2.php" id="myForm2" method="post" enctype="multipart/form-data">
<input class="partners_inp1" type="text" placeholder="Название организации*" name="orgname"></input>
<input class="partners_inp1" type="text" placeholder="ФИО представителя*" name="fio"></input>
<textarea class="partners_text1" placeholder="Виды материалов:" name="materials"></textarea>
<div class="postav_price">Прайс-лист (файл word/excel): <input type="file" name="file10"/></div>
<br/>
<div class="postav_price">Прочие документы:
<br><input type="file" name="file11"/>
<br><input type="file" name="file12"/>
<br><input type="file" name="file13"/>
<br><input type="file" name="file14"/></div>
<br/>
<input class="partners_inp1" type="text" placeholder="Телефон*" name="phone2"></input>
<input class="partners_inp1" type="text" placeholder="E-mail" name="email"></input>
<input type="button" class="btnd" onclick="send2()" value="Отправить анкету"/><div class="results"></div>
</form>
</div>
</div>
<div class="flcl"></div>
</div>
</div>





</div>

<?include 'footer.php';?>
  </body>
</html>