var ssl,ssl1,ssl2;
$("#epta").find("img").click(function(){
ssl = $(this).attr('src');
ssl1 = ssl.split("imgmin")[1];
ssl2 = "img" + ssl1;
window.open(ssl2, '_blank');
});
