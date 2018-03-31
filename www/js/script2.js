var isopen = false;

function open2(namediv){
	if(isopen==false){
		isopen=true;
		$(".podrobneeclose").addClass("open");
		$("." + namediv).addClass("open");
		var size = $(".open").offset().top;
		$("." + namediv).css("top", size + "px");
		var top = $("." + namediv).css("top");
	}
	else{
		isopen=false;
		$(".podrobneeclose").removeClass("open");
		$(".podrobnee").removeClass("open");
	}
	return false;
}



 $(".podrobneeclose").click(function(){
	 open2();
 })
 $(".closepodr").click(function(){
	 open2();
 })
 
 
$( document ).ready(function() {
	$(".menu a").click(function() {	
    $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top + "px"
      }, 
	  {
         duration: 600,
         easing: "swing"
      });
      return false;
    });
});

$( document ).ready(function() {
 $("#btncufru").click(function(){
	 callback();
 });
 

 $(".btnkatalog").click(function(){
	zay("all");
 });
 
 
 
  $(".allprice").click(function(){
	zay("all");
 });
 
  $(".gasd").click(function(){
	zay("Автономная газификация");
 });

  
 $(".btnpop").click(function(){
	 callback();
 })
 $(".frm3").click(function(){
	 callback();
 })

 $(".zgd2 .bgforms").click(function(){
	 callback();
 })
 $(".zgd2 .close").click(function(){
	 callback();
 });


 $(".zgd .bgforms").click(function(){
	 zay();
 })
 $(".zgd .close").click(function(){
	 zay();
 });
 
 

function callback(){
	$(".podrobneeclose").removeClass("open");
		$(".podrobnee").removeClass("open");
	$(".nameprices").remove();
if(zays==0){
$(".zgd2").fadeIn(200);
zays=1;
}
else
{
$(".zgd2").fadeOut(200);
zays=0;
}
}


});


var zays=0;
function zay(getprice){
	$(".podrobneeclose").removeClass("open");
		$(".podrobnee").removeClass("open");
	$(".nameprices").remove();
if(zays==0){
	$(".bglform form").prepend('<input class="nameprices"style="display:none" name="price" value="'+ getprice +'" type="text"> </input>');
$(".zgd").fadeIn(200);
zays=1;
}
else
{
$(".zgd").fadeOut(200);
zays=0;
}
}


(function( $ ){

$(function() {

  $("form").each(function(){
	var form = $(this),
        btn = form.find('.btnForm');

  
	form.find('input').addClass('empty_field');
    function checkInput(){
      form.find('input').each(function(){
        if($(this).val() != ''){
		$(this).removeClass('empty_field');
        } else {
     
		$(this).addClass('empty_field');
        }
      });
    }

   
    function lightEmpty(){
      form.find('.empty_field').css({'opacity':'0.4'});
      // ×åðåç ïîëñåêóíäû óäàëÿåì ïîäñâåòêó
      setTimeout(function(){
        form.find('.empty_field').removeAttr('style');
      },500);
    }

   
    setInterval(function(){
	  checkInput();
    
      var sizeEmpty = form.find('.empty_field').size();

      if(sizeEmpty > 0){
        if(btn.hasClass('disabled')){
          return false
        } else {
          btn.addClass('disabled')
        }
      } else {
        btn.removeClass('disabled')
      }
    },500);
    btn.click(function(){
      if($(this).hasClass('disabled')){
		lightEmpty();
        return false
      } else {
 
	var sd = $(this).parent().serialize();
	console.log(sd);
		$.ajax({
                    type: "POST",
                    url: "/sendgas.php",
                    dataType: "text",
                    data: sd,
                    success: function (html) {
if(parseInt(html)==1){
	$("body").append('<div class="succefolly"> <div class="obls"><span>Спасибо!<br>Заявка отправлена</span><br></div></div>');
	$( ".succefolly" ).addClass( "succ_yes" );
	setTimeout(function() {$( ".succefolly" ).removeClass( "succ_yes" ); }, 2000)
}else {	
}
                    },
});
      }
    });
  });
});

})( jQuery );
   
   
 