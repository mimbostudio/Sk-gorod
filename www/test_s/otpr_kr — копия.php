<?php 
	foreach($_SESSION['product'] as $f){ 
	$loli1++;
	$z = $z + 1;
	}
	?>
	<center><span class="obrspan">В КОРЗИНЕ <?php echo $z;   if ($z == 1){echo ' УСЛУГА';}else {if ($z > 4){echo ' УСЛУГ';}else{ echo ' УСЛУГИ';}}?></span></center>
	
		<div class="slidebar" id="innerbask">
	<?php
	if(isset($_POST['sendemail'])){	
	
$to  = "platinum355@mail.ru" ; 
$zakaznomer = rand(100,1000000000000000000000);
$subject = "Заказ"; 
$nameu = $_POST['user'];
$phones= $_POST['phine'];





foreach($_SESSION['product'] as $f){ 
		if(isset($_GET['dell'])){
				$ids = $_GET['dell'];
				if(($key = array_search($ids,$_SESSION['product'])) !== FALSE){
				unset($_SESSION['product'][$key]);
				}				}
			$pieces = explode("|", $f);
			#print_r ($pieces);
			$dellate = '<a href="?dell='.$f.'">УБРАТЬ</a><br><br><br>';
			$z = $z + 1;
			$loli2++;
			$pieces[1] = $_SESSION['productst'.$loli2];
			
			
			
			$prsrs[$z] = 'Услуга:'.$pieces[2].'; Размер:'.$pieces[1].'; Cтоимость одного М<sup>2</sup>:'.$pieces[4].'; Приблизительная стоимость работ:'.$pieces[1]*$pieces[4].'<br>'; 
	}





$message = ' 






<html> 
    <head> 
        <title>'.$zakaznomer.'</title> 
    </head> 
    <body> 
       <table border="1" style="border-color:#E9EFF5;background:#F1F4F7;"><tr><td>
	   
	   ИМЯ:'.$nameu.'</td></tr><tr><td>ТЕЛЕФОН:'.$phones.'</td></tr><tr><td>СПИСОК УСЛУГ:<br/>
	   '.$prsrs[0] .$prsrs[1] .$prsrs[2] .$prsrs[3] .$prsrs[4] .$prsrs[5] .$prsrs[6] .$prsrs[7] .$prsrs[8].'</td></tr></table>
	   
	   
    </body> 
</html>'; 

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: <ск-город.рф>\r\n"; 
#$headers .= "Bcc: birthday-archive@example.com\r\n"; 
$message1 = iconv("utf-8", "windows-1251", $message);
mail($to, $subject, $message1, $headers); 


	unset($_SESSION['product']);
	
	

	
	
	echo '<center><p></p><p></p><span class="obrspan1">ЗАКАЗ ОТПРАВЛЕН<br>МЫ СВЯЖЕМСЯ С ВАМИ В БЛИЖАЙШЕЕ ВРЕМЯ!</span></center><br>';
	
	
#foreach($_SESSION['product'] as $f){ 
#		if(isset($_GET['dell'])){
#				$ids = $_GET['dell'];
#				if(($key = array_search($ids,$_SESSION['product'])) !== FALSE){
#				unset($_SESSION['product'][$key]);
#				}				}
#			$pieces = explode("|", $f);
#			#print_r ($pieces);
#			$dellate = '<a href="?dell='.$f.'">УБРАТЬ</a><br><br><br>';
#			$z = $z + 1;
#			echo '<span style="display:none;" id="u'.$pieces[0].'">'.$pieces[4].'</span>';
#			echo '<div class="baskusl"><div class="baskuslimgdiv"><img class="baskuslimg" src="'.$pieces[3].'"></div><div class="baskprice">'.$pieces[2].'<p><p><div class="calc"><input id="i'.$pieces[0].'" value="'.$pieces[1].'" class="inp" name="razmer" oninput="schet('.$pieces[0].')" type="text"></input> М<sup>2</sup>≈<span id="s'.$pieces[0].'">0</span> РУБ</div><div class="ubrat">'.$dellate.'</div></div></div>';
#			echo '<script>schet('.$pieces[0].');</script>';
#			
#			#$prsrs = 'Услуга:'.$pieces[4].'Размер:'.$pieces[1].'; стоимость одного М2:'.$pieces[4].'; Приблизительная стоимость:'.$pieces[1]*$pieces[4];
#	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
	else {
	if(isset($_POST['prodoljit'])){	
	
	
	
	
								if($z==0){
								echo '<center><p></p><p></p><span class="obrspan1">ОШИБКА: ВАША КОРЗИНА ПУСТА!</span></center><br>';
								}
								else { 
								
								for ($g = 1; $g <= $loli1; $g++) {
								unset($_SESSION['productst'.$g]);
								$_SESSION['productst'.$g] = $_POST['razmer'.$g];
								
								}
								
								echo '<center><p></p><p></p><span class="obrspan1">МЫ СВЯЖЕМСЯ С ВАМИ В<br>БЛИЖАЙШЕЕ ВРЕМЯ</span>
								<form method=\'POST\'>
								<br><input align="name" class="obrinp" type="text" name="user" value="ИМЯ:" onfocus="if(value==\'ИМЯ:\'){value=\'\';}" onblur="if(value==\'\') {value=\'ИМЯ:\';}">
								<br><input align="name" class="obrinp" type="text" name="phine" value="ТЕЛЕФОН:" onfocus="if(value==\'ТЕЛЕФОН:\'){value=\'\';}" onblur="if(value==\'\') {value=\'ТЕЛЕФОН:\';}">
								 <input class="obrbutton" type="submit" value="ОТПРАВИТЬ ЗАЯВКУ" name="sendemail"></input>
								</form>
								</center><br>';
									
									
									}			
}
else {
	$prov = 1;
	
	
	echo '<style>.slidebar {overflow-y:scroll;overflow-x:hidden;}</style>';
	echo '<form method="POST">';
foreach($_SESSION['product'] as $f){ 
		if(isset($_GET['dell'])){
				$ids = $_GET['dell'];
				if(($key = array_search($ids,$_SESSION['product'])) !== FALSE){
				unset($_SESSION['product'][$key]);
				}				}
			$pieces = explode("|", $f);
			#print_r ($pieces);
			$dellate = '<a href="?dell='.$f.'">УБРАТЬ</a><br><br><br>';
			$z = $z + 1;
			$loli++;
			echo '<span style="display:none;" id="u'.$pieces[0].'">'.$pieces[4].'</span>';
			echo '<div class="baskusl"><div class="baskuslimgdiv"><img class="baskuslimg" src="'.$pieces[3].'"></div><div class="baskprice">'.$pieces[2].'<p><p><div class="calc"><input id="i'.$pieces[0].'" value="'.$pieces[1].'" class="inp" name="razmer'.$loli.'" oninput="schet('.$pieces[0].')" type="text"></input> М<sup>2</sup>≈<span id="s'.$pieces[0].'">0</span> РУБ</div><div class="ubrat">'.$dellate.'</div></div></div>';
			echo '<script>schet('.$pieces[0].');</script>';
	}
		if(isset($_POST['submitkorzina'])){		
$id = $_POST['id'];
$razmer = $_POST['razmer'];
$tovar = $_POST['id']+rand(100,10000) .'|'.$_POST['razmer'] .'|' .$_POST['name'].'|' .$_POST['img'].'|'.$_POST['cina'];
if(empty($_SESSION['product']))
	$_SESSION['product']=array(); 
array_push($_SESSION['product'],$tovar );	
}	
	}
	}
	if(isset($_GET['openbasket'])){	
			if ($z > 0) {
			
			
			
				
				echo '<script>baskopen();</script>
				<style>#fonid{display:block;}</style>';
				}
}
?>
</div>

<div class="esche" onclick="baskopen()">< ДОБАВИТЬ ЕЩЁ</div>
<?php 
if($prov==1) echo ' <input class="prodol" type="submit" value="ПРОДОЛЖИТЬ >" name="prodoljit"></input></form>';
?>
 </div>
<?php
if($z > 0){
echo'
<a href="http://город-ск.рф?openbasket=1#uslug"><div class="bask_fix"><img src="img/basket_fix.png" style="width:70px"></div></a>';
}
?>