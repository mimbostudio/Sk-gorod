<!--Калькулятор-->
<div class="calculator">
<div class="zatem" onclick="calcz();"></div>
<div class="calc_content">
<div class="form_top"><div class="form_close" onclick="calcz()"><img src="img/close.png"></div><div class="flcl"></div></div>
<div class="calc_cont2">
<div class="calc_line">
<div class="calc_top_name">Наименование работы</div><div class="calc_top_ed">Ед.изм.</div><div class="calc_top_price">Стоимость</div><div class="calc_top_vvod">Поля для ввода</div><div class="calc_top_result">Расчеты</div>
</div>
<?
if ($result = $mysqli->query("SELECT * FROM $tablename")) {
do
{
if($myrow != 0){
if($myrow[price] == "0"){
echo ' 
  <center>
	  <span class="calctoptitle">'.$myrow[name].'</span></center>';
}
else
{
	?>
	<div class="calc_line"><div class="calc_name"><?=$myrow[name];?></div><div class="calc_ed">
	<?
	 if(($myrow[ed] == "М2")||($myrow[ed] == "м2")){
	  echo 'М<sup>2</sup>';
	  }
	  else
	  {
	  echo $myrow[ed];
	  } 
	  ?>
	</div><div  class="calc_price" id="price<?=$myrow[id];?>"><?=$myrow[price];?></div><div class="calc_vvod" id="vvod<?=$myrow[id];?>"><input type="text" placeholder="Введите размер"></div><div class="calc_result" id="itog<?=$myrow[id];?>"><span class="calcitogo">0</span> руб</div></div>
	<?
}
}
}
while ($myrow = $result->fetch_array(MYSQLI_ASSOC));
$result->close();
}
?>
</div><div class="flcl"></div>
<div class="calc_bottom">
<div class="calc_itog"><span class="sbold">Итого: </span><span class="itg">0</span> руб.</div>
<div class="calc_send_button" onclick="calcz();popup();">Отправить заявку</div>
<div class="flcl"></div>
</div>
</div>
</div>
<!--Калькулятор-->
<?
$mysqli->close();
?>
<style>
.buttoncalc {
	
	cursor:pointer;
}
.buttonprise {
	cursor:pointer;
}
.calculator{display:none;position:absolute;top:0px;z-index:15;left:0px;width:100%;height:100%}.price .calc_top_vvod,.price .calc_top_result,.price .calc_vvod,.price .calc_result,.price .calc_itog{display:none}.price .calc_price,.price .calc_top_price{border:none}.price .calc_content{max-width:490px;margin-left:-245px}.calctoptitle{font-family:'Roboto',light;font-size:18px;color:#fff;margin-right:15px;padding:9px;display:block;border-bottom:1px solid #fff}.block_img img{height:290px}.calc_content{max-width:900px;background:#ffa835;position:absolute;z-index:4;top:50%;margin-top:-260px;left:50%;margin-left:-450px}.calc_top_name{width:200px;height:25px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:16px;font-family:'Roboto',light;font-weight:300;float:left}.calc_top_ed{width:120px;height:25px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:16px;font-family:'Roboto',light;font-weight:300;float:left}.calc_top_price{width:140px;height:25px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:16px;font-family:'Roboto',light;font-weight:300;float:left}.calc_top_vvod{width:200px;height:25px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:16px;font-family:'Roboto',light;font-weight:300;float:left}.calc_top_result{width:200px;height:25px;color:#fff;text-align:center;font-size:16px;font-family:'Roboto',light;font-weight:300;float:left}.calc_cont2{padding-left:17px}.calc_line{border-bottom:1px solid #fff;clear:both;margin-right:15px;display:flex}.calc_line div{margin:0 auto;display:block}.calc_line{display:flex}.calc_name{width:200px;padding-top:8px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:14px;font-family:'Roboto',light;font-weight:300;float:left;padding-bottom:8px}.calc_ed{width:120px;padding-top:8px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:14px;font-family:'Roboto',light;font-weight:300;float:left}.calc_price{width:140px;padding-top:8px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:14px;font-family:'Roboto',light;font-weight:300;float:left}.calc_vvod{width:200px;padding-top:8px;color:#fff;border-right:1px solid #fff;text-align:center;font-size:14px;font-family:'Roboto',light;font-weight:300;float:left;background:rgba(0,0,0,.08)}.calc_result{width:200px;padding-top:8px;color:#fff;text-align:center;font-size:14px;font-family:'Roboto',light;font-weight:300;float:left}.calc_vvod input{color:#fff;font-family:'Roboto',light;font-weight:300;font-size:14px;text-align:center;background:none;border:none;outline:none}.calc_vvod input::-webkit-input-placeholder{color:#fff;font-family:'Roboto',light;font-weight:300;font-size:14px;text-align:center}.calc_vvod input::-moz-placeholder{color:#fff;font-family:'Roboto',light;font-weight:300;font-size:14px;text-align:center}.calc_vvod input:-moz-placeholder{color:#fff;font-family:'Roboto',light;font-weight:300;font-size:14px;text-align:center}.calc_vvod input:-ms-input-placeholder{color:#fff;font-family:'Roboto',light;font-weight:300;font-size:14px;text-align:center}.calc_itog{color:#fff;font-family:'Roboto';font-size:16px;font-weight:300;float:left;margin-top:-18px;}.sbold{font-weight:500}.calc_bottom{margin-top:55px;padding-left:25px;padding-right:25px;padding-bottom:35px}
.calc_send_button{    margin-top: -32px;float:right;color:#fff;background:#e99a30;text-align:center;cursor:pointer;width:200px;font-size:16px;font-family:'Roboto';font-weight:600;border-radius:27px;padding-bottom: 13px;padding-top:12px;} .calc_send_button:hover{width:196px;padding-bottom:13px;padding-top:12px;border:solid 2px #fff}
.form_close{float:right;cursor:pointer;margin:15px;}
.zatem{cursor:pointer;position:fixed;top:0px;left:0px;width:100%;height:100%;background:rgba(0,0,0,.4)}
</style>


