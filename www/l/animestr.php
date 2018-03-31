<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
$tag = 'Tokyo Ghoul';
$tag = str_replace("'","",$tag);
include 'mysqlcon.php';
mysql_query('SET NAMES utf8');
function search ($query) 
{ 
    $query = trim($query); 
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT * FROM `animeserii` WHERE `title` LIKE '%$query%'";
            $result = mysql_query($q);
            if (mysql_affected_rows() > 0) { 
                $row = mysql_fetch_assoc($result); 
                $num = mysql_num_rows($result);
                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';
                do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = "SELECT * FROM `animeserii` WHERE `id` = '$row[id]'";
                    $result1 = mysql_query($q1);
                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }
					
					
					$pos[1] = strpos($row['title'],'TV-2');
					$pos[2] = strpos($row['title'],'TV2');
					$pos[3] = strpos($row['title'],'ТВ-2');
					$pos[4] = strpos($row['title'],'ТВ2');
					$pos[5] = strpos($row['title'],'2 сезон');
					$pos[6] = strpos($row['title'],'TV 2');
					$pos[7] = strpos($row['title'],'ТВ 2');
					$pos[8] = strpos($row['title'],'TV-3');
					$pos[9] = strpos($row['title'],'TV3');
					$pos[10] = strpos($row['title'],'ТВ-3');
					$pos[11] = strpos($row['title'],'ТВ3');
					$pos[12] = strpos($row['title'],'3 сезон');
					$pos[13] = strpos($row['title'],'TV 3');
					$pos[14] = strpos($row['title'],'ТВ 3');
					$pos = array_unique($pos);
					#print_r($pos);
					#if($pos[1] > 0 ){
					
					#$row['title'] = '';
					#$row['link'] = '';
					#}
					$row['title'] = str_replace('TV-2','',$row['title']); 
					$row['title'] = str_replace('TV2','',$row['title']);
					$row['title'] = str_replace('ТВ-2','',$row['title']); 
					$row['title'] = str_replace('ТВ 2','',$row['title']); 
					$row['title'] = str_replace('ТВ2','',$row['title']); 
					$row['title'] = str_replace('TV 2','',$row['title']); 
					$row['title'] = str_replace('2 сезон','',$row['title']);
					#3s
					$row['title'] = str_replace('TV-3','',$row['title']); 
					$row['title'] = str_replace('ТВ-3','',$row['title']); 
					$row['title'] = str_replace('ТВ 3','',$row['title']); 
					$row['title'] = str_replace('ТВ3','',$row['title']);
					$row['title'] = str_replace('TV 3','',$row['title']); 
					$row['title'] = str_replace('TV3','',$row['title']); 
					$row['title'] = str_replace('3 сезон','',$row['title']);
					#4s
					$row['title'] = str_replace('TV-4','',$row['title']); 
					$row['title'] = str_replace('ТВ-4','',$row['title']); 
					$row['title'] = str_replace('ТВ 4','',$row['title']); 
					$row['title'] = str_replace('TV 4','',$row['title']); 
					$row['title'] = str_replace('ТВ4','',$row['title']); 
					$row['title'] = str_replace('TV4','',$row['title']);
					$row['title'] = str_replace('4 сезон','',$row['title']);
					$schetk++;
					$savetitle[$schetk] = $row['title'];
					$savesttitle = $row['title'];
					$row['title'] =  substr($row['title'], strcspn($row['title'], '0123456789'));
					$row['titlek'] = $row['title'];
					$row['titlek'] = substr($row['titlek'],0,4);
					$row['titlek'] = preg_replace('~[^0-9]+~','',$row['titlek']);
					$row['titlek'] = str_replace(' ','',$row['titlek']);
					echo $row['titlek'].'<br>';

					$saveindex[$schetk] = array("title"=>$savesttitle,"seria"=>$row['titlek'],"link"=>$row['link']);
#					$row['title'] = preg_replace('~[^0-9]+~','',$row['title']);
                    $text .= '<p><a href="' .$row1['link']
					#.'/'.$row['category'].'/'.
				#$row['id']
				.'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                    <p>'.$row['desc'].'</p>';
                } while ($row = mysql_fetch_assoc($result)); 
					 #sort($saveindex,SORT_NUMERIC);
function cmp($a, $b)
{
    #return strcmp($a["seria"], $b["seria"]);
	
	 if ($a["seria"] == $b["seria"]) {
        return 0;
    }
    return ($a["seria"] < $b["seria"]) ? -1 : 1;
	
}
usort($saveindex, "cmp");
#print_r($saveindex);
					for ($i=0;$i <= $num;$i++){
					echo  '<br>' .$saveindex[$i]["title"] .'<br>';
					echo  $saveindex[$i]["link"] .'<br>';
					}
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
	 } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }
    return $text; 
} 
$search_result = search ($tag); 
?>