<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadmin.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.9.1.js"></script>
<meta http-equiv=Content-Type content="text/html; charset=utf-8"/>
</head>
<body>
<script type="text/javascript">
function addpart(){
  var data = new FormData($('#myForm')[0]);
    $.ajax({
      type: "POST",
      url: "addpart.php",
      data: data,
      contentType: false,
      processData: false,
     
}).done(function (html) {
        $("#results").html(html);
        reloadnews();
      });
}
function onAjaxSuccess(data)
{
  $("#dobdiv").html(data);
}

</script>
<style>#menu5{background:#1A242E;}</style>
<div class="bodydiv">
<?
include("panelleft.php");
?>
<div class="content">
<center><div id="results" class="result"></div></center>
<form action="addpart.php" id="myForm" method="post" enctype="multipart/form-data">
<textarea class="viptext1" placeholder="Вставьте код" name="textnews"></textarea>
<br/><br/>
	  <div onclick="addpart()" class="addvip">Добавить</div>
</form>
</div>
</div>
</body>
</html>