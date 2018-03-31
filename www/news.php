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
			<h1>Новости</h1>
			<div href="" class="glavbutton">Отправить заявку</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="aboutkrovl">Новости компании</div>

	<?
	if ($result = $mysqli->query("SELECT * FROM news ORDER BY id DESC")) {
	while($myrow = $result->fetch_array(MYSQLI_ASSOC))
	 {?>
	<div class="col-md-6 col-sm-6">
		<div class="krovlservice" style="height:300px; padding:15px;padding-top:25px;">
			<div class="headservice"><?=$myrow[zagol];?></div>
			<div class="textservice"><?=substr($myrow[newstext], 0, 600);?></div>
		</div>
	</div>
	<?
	};
	}
	?>
	
	
	
</div>
<?include 'footer.php';?>

<?
$tablename = "fasad";
include 'calculator.php';
?>
  </body>
</html>