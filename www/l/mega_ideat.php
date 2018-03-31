<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="soder"> 
<?php
include 'mysqlcon.php';
define('ACCESS_TOKEN', 'cae3d4e7711381dc9cff2ff9bf94c0f984673523e6c602653712e90aad2fd19fd7b18e9f996c04344141b');
function api($method, $params = array())
{
	$params['access_token'] = ACCESS_TOKEN;
    $url = 'https://api.vk.com/method/' . $method . '?' . http_build_query($params);
    $response = file_get_contents($url);
    return json_decode($response, true);
}
$apis[1] = api('video.get', array(
    'owner_id' => '-23431986',
	'count' => '5',
));
$api[2] = api('video.get', array(
    'owner_id' => '-40452590',
	'count' => '5',
));
$api[3] = api('video.get', array(
    'owner_id' => '-53612095',
	'count' => '5',
));
$api[4] = api('video.get', array(
    'owner_id' => '-37468416',
	'count' => '5',
));
$api[5] = api('video.get', array(
    'owner_id' => '-13912875',
	'count' => '5',
));
$api[6] = api('video.get', array(
    'owner_id' => '-39376197',
	'count' => '5',
));
$api[7] = api('video.get', array(
    'owner_id' => '-64886876',
	'count' => '5',
));
$api[8] = api('video.get', array(
    'owner_id' => '-18735882',
	'count' => '5',
));
$api[9] = api('video.get', array(
    'owner_id' => '-12323082',
	'count' => '5',
));
for ($z=1;$z<=9;$z++) {
for ($i=1;$i<=5;$i++) {
$titlek = $api[$z]['response'][$i]['title'];
$titlek = str_replace("'","",$titlek);
$players = $api[$z]['response'][$i]['player'];
$query = "SELECT * FROM animeserii WHERE title = '$titlek'"; 
/* Выполнить запрос. Если произойдет ошибка - вывести ее. */ 
$res = mysql_query($query) or die(mysql_error()); 
/* Как много нашлось таких */ 
$number = mysql_num_rows($res); 
/* Напечатать всех в красивом виде*/ 
if ($number == 0) { 
 #echo "<CENTER><P>NEW</CENTER>"; 
#echo $api[$z]['response'][$i]['title'].'<br>';
#echo $api[$z]['response'][$i]['player'].'<br><br><br>';
$result = mysql_query("INSERT INTO animeserii (title,link) VALUES ('$titlek','$players')");
}else {
$i=5;
}
#$result = mysql_query("INSERT INTO animeserii (title,link) VALUES ('$titlesz','$playerez')");
}
}
$sql = "SELECT * FROM `animeserii` ORDER BY `id` DESC LIMIT 0, 10";
$vid = mysql_query($sql) or die(mysql_error()); 
 while($name = mysql_fetch_array($vid)){
 $lolka++;
 if($lolka == 1) {
echo ' <script>var asd = ' .$name['id'] .'</script>';
 }
if($lolka<=3) {
  echo '<br>' .$name['title'] .'';
  }else {
  echo '<br>' .$name['title'];
  }
   echo $name['link'] .'<br>';

   }
?>
</div>
<script>
function soundClick() {
 var audio = new Audio(); // Создаём новый элемент Audio
  audio.src = 'u.mp3'; // Указываем путь к звуку "клика"
  audio.autoplay = true; // Автоматически запускаем
  }
</script>
<script>
setInterval(function() {
     $.ajax({
          type: "POST",
           url: "uvedomlenie.php",
          data: "func=1",
          success: function(res){
		  if (res==asd) {
		  } else {soundClick();brom = res - asd;
		  $.post(
  "update.php",
  {
    kol: brom
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
   $(".soder").prepend(data);
}  
		 }
		  asd = res;
		  },
          error: function(){alert('Problem');}
     });
}, 60000);
</script>