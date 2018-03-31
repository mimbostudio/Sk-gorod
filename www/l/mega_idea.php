<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
define('ACCESS_TOKEN', 'cae3d4e7711381dc9cff2ff9bf94c0f984673523e6c602653712e90aad2fd19fd7b18e9f996c04344141b');
function api($method, $params = array())
{
	$params['access_token'] = ACCESS_TOKEN;
    $url = 'https://api.vk.com/method/' . $method . '?' . http_build_query($params);
    $response = file_get_contents($url);
    return json_decode($response, true);
}



$api[1] = api('video.get', array(
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


for ($i=1;$i <= 5;$i++){
	for ($z=1;$z <= 9;$z++){
	echo $api[$z]['response'][$i]['title'].'<br>';
	
	echo $api[$z]['response'][$i]['player'].'<br><br><br>';
	}	
}

?>