
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<?php
include 'mysqlcon.php';
echo '<form  method="post">
  
  
Ссылка пример http://anistar.ru
<input type="text" name="link" value="">


 <br>TITLE class or id
<input type="text" name="title" value="">



<br>FULL Des class or id
<input type="text" name="des" value="">


<br>MIN Des class or id
<input type="text" name="desmin" value="">

<br>seriasmas class or id
<input type="text" name="serias" value="">


  <p><input type="submit"></p>
 </form>';
 
 
 
 if (isset($_POST['link'])) {
    
	$link = $_POST['link'];
	$title = $_POST['title'];
	$des = $_POST['des'];
	$mindes = $_POST['desmin'];
	$serias = $_POST['serias'];
	$result = mysql_query("INSERT INTO WEB_SITE (link,title,des,mindes,seriasmas) VALUES ('$link','$title','$des','$mindes','$serias')");

	}
 

	$zap = mysql_query("select * from WEB_SITE");
if($zap){
 
  while($name = mysql_fetch_array($zap)){
    echo 'START' .$name['link'] .'<br>';
	echo $name['Id'] .'<br>';
	echo $name['title'] .'<br>';
	echo $name['des'] .'<br>';
	echo $name['mindes'] .'<br>';
	echo $name['seriasmas'] .'<br>';
	echo '<a href="?del='.$name['Id'].'">delate</a>';
   }

}


else{
  echo "<p><b>Error: ".mysql_error()."</b><p>";
  exit();
}
	
 
 
  if (isset($_GET['del'])) {
$ids=$_GET['del'];
 $sql = "DELETE FROM WEB_SITE WHERE Id=$ids";
    mysql_query($sql) or die (mysql_error());
}

?>