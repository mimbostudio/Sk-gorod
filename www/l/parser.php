<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<?php
include 'simple_html_dom.php';
include 'mysqlcon.php';
$zap = mysql_query("select * from WEB_SITE");
if($zap){
 
  while($name = mysql_fetch_array($zap)){
   $colsait++;

   $links[$colsait] = str_replace(" ", "", $name['link']);
   $title[$colsait] = str_replace(" ", "", $name['title']);
   $serii[$colsait] = str_replace(" ", "", $name['seriasmas']);
   $desfc[$colsait] = str_replace(" ", "", $name['des']);
   
   }
   
   }
   
   
   
   for ($i = 1; $i <= $colsait; $i++) {
    
	
	echo $title[$i];
	echo $links[$i];
	
	
	
	$ch = curl_init (); // инициализация
curl_setopt ($ch , CURLOPT_URL , $links[$i]);
curl_setopt ($ch , CURLOPT_USERAGENT , "Mozilla/5.0 (Linux; Android 4.4.2; Nexus 4 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.59 Mobile Safari/537.36"); // каким браузером будем прикидываться
curl_setopt ($ch , CURLOPT_RETURNTRANSFER , 1 ); // вывод страницы в переменную
$content = curl_exec($ch); // скачиваем страницу
curl_close($ch); // закрываем соединение
	
	$html = str_get_html($content);

	
	   for ($z = 0; $z <= 1; $z++) {
$hrefs[$z] =  $html->find($title[$i])[$z]->find('a')[0]->href;
$titlename[$z] =  $html->find($title[$i])[$z]->find('a')[0]->plaintext;




echo $hrefs[$z];
echo $titlename[$z];


	
	
	$ch = curl_init (); // инициализация
curl_setopt ($ch , CURLOPT_URL , $hrefs[$z]);
curl_setopt ($ch , CURLOPT_USERAGENT , "Mozilla/5.0 (Linux; Android 4.4.2; Nexus 4 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.59 Mobile Safari/537.36"); // каким браузером будем прикидываться
curl_setopt ($ch , CURLOPT_RETURNTRANSFER , 1 ); // вывод страницы в переменную
$content2 = curl_exec($ch); // скачиваем страницу
curl_close($ch); // закрываем соединение
	
	
	
	
	
	
	
	$html2 = str_get_html($content2);
	

		
	#fix anistar
	$anisz = strpos($hrefs[$z], 'anistar');
	if($anisz > 0){
	echo '<br>lol asdasdas asd<br>';
	$starlinksa = $html2->find($desfc[$i])[0]->find('iframe')[0]->src;
	$ch = curl_init (); // инициализация
curl_setopt ($ch , CURLOPT_URL , $starlinksa);
curl_setopt ($ch , CURLOPT_USERAGENT , "Mozilla/5.0 (Linux; Android 4.4.2; Nexus 4 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.59 Mobile Safari/537.36"); // каким браузером будем прикидываться
curl_setopt ($ch , CURLOPT_RETURNTRANSFER , 1 ); // вывод страницы в переменную
$content3 = curl_exec($ch); // скачиваем страницу
curl_close($ch); // закрываем соединение
		$html3 = str_get_html($content3);
		echo $html3->find($serii[$i])[0];
	}
	$anisz = 0;
	#fix anista

	
	

	echo $html2->find($serii[$i])[0];
if ($z == 10) {
$z = 1;
}
}


	
	
	
}
   
   

?>