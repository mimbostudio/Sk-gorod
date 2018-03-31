/* A simple and scalable hamburger menu using css transitions. */
var isActive = false;

$('.js-menu').on('click', function() {
	if (isActive) {
		$(this).removeClass('active');
		$('body').removeClass('menu-open');
	} else {
		$(this).addClass('active');
		$('body').addClass('menu-open');
	}

	isActive = !isActive;
});



function topd() {
	$('html, body').animate({scrollTop: $(".header").offset().top}, 500);
	
}


	var openzstat = 0;
function menu (tag_name) {
if(openzstat==0){
$(tag_name).addClass("menu_device_active");
$(".bg_menu").addClass("acts");
openzstat = 1;
}
else
{
$(tag_name).removeClass("menu_device_active");
$(".bg_menu").removeClass("acts");
openzstat = 0;
}
}
	


var zays=0;
function zay(){
if(zays==0){
$(".zayavka").fadeIn(200);
zays=1;
}
else
{
$(".zayavka").fadeOut(200);
zays=0;
}
}

var calc=0;
function calcz(){
if(calc==0){
$(".calculator").fadeIn(200);
calc=1;
}
else
{
$(".calculator").fadeOut(200);
calc=0;
$(".calculator").removeClass("price");
}
}
function price(){
	calcz();
	$(".calculator").addClass("price");
}

setTimeout(func, 500);
setTimeout(f, 400);
function f() { 
//$('html, body').animate({scrollTop: $(".content_title").offset().top - 120}, 500);
}


var valinp,price,click_this,kol,vsego,block,i,d,datas,sd;
function func() { 
$(".btns").click(function() {
datas = $(this).parent().attr("class");
sd = $('.' + datas).serialize();
form = $('.' + datas);
form.find('input').addClass('empty_field');
btn = form.find('.btns');

         $.ajax({
                    type: "POST",
                    url: "/send.php",
                    dataType: "text",
                    data: sd,
                    success: function (html) {
if(parseInt(html)==1){
	$( ".succefolly" ).addClass( "succ_yes" );
	setTimeout(function() {$( ".succefolly" ).removeClass( "succ_yes" ); }, 2000)

}else {
	
}
                    },
                });


   // Добавляем каждому проверяемому полю, указание что поле пустое


    // Функция проверки полей формы
    function checkInput(){
      form.find('input').each(function(){
        if($(this).val() != ''){
          // Если поле не пустое удаляем класс-указание
		$(this).removeClass('empty_field');
        } else {
          // Если поле пустое добавляем класс-указание
		$(this).addClass('empty_field');
        }
      });
    }

    // Функция подсветки незаполненных полей
    function lightEmpty(){
      form.find('.empty_field').css({'border-bottom':'solid 1px rgba(255, 255, 255, 0.6)'});
      // Через полсекунды удаляем подсветку
      setTimeout(function(){
        form.find('input').removeAttr('style');
      },500);
    }

    // Проверка в режиме реального времени
    setInterval(function(){
      // Запускаем функцию проверки полей на заполненность
	  checkInput();
      // Считаем к-во незаполненных полей
      var sizeEmpty = form.find('.empty_field').size();
      // Вешаем условие-тригер на кнопку отправки формы
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

    // Событие клика по кнопке отправить
 
      if($(this).hasClass('disabled')){
        // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
		lightEmpty();
        return false
      } else {
        // Все хорошо, все заполнено, отправляем форму
        
      }
 


       

				
				
});

   $(".calc_line").click(function() {
	   click_this = this;
   });
      $(".calc_vvod input").keyup(function() {
		  valinp = 0;
		  price = 0; 
	  valinp = $(click_this).find('input').val();
price = $(click_this ).find('.calc_price').html();
$(click_this).find('.calcitogo').text(price*valinp);
kol = $(".calc_result").find(".calcitogo").length;
i=0;
vsego = 0;
for(i=0;i<kol;i++){
vsego = vsego + parseInt($(".calc_result .calcitogo")[i].innerHTML); 
}
$(".itg").html(vsego);
}); 
};

var prts = 0;
function porfolio(title,description,img1,img2) {
	if(prts==0){
	$(".port_modal_title").text(title);
	$(".port_modal_text").text(description);
	$(".port_before_img img").attr("src",img1);
	$(".port_after_img img").attr("src",img2);
	$(".port_modal").fadeIn(200);
	prts=1;
	
	}
	else 
	{
	$(".port_modal").fadeOut(200);
	prts=0;	
	}
}


$( document ).ready(function() {
	 new WOW().init();
$(".imgservice").click(function(){
	//$('html, body').animate({scrollTop: $(".homesolution").offset().top + 200}, 200);
	$(".imgservice").removeClass("activeImgO");
	$(this).addClass("activeImgO");
	var n = $(this)["context"].src.substr(-5).substr(0, 1);
	n = n.replace(/\s/g, '');
	$(".ooc").removeClass("ooact");
	$(".oo"+n).addClass("ooact");
 });


$(".glavbutton").click(function(){
	 popup();
 });
 
 $(".button").click(function(){
	    event.preventDefault();
	 popup();
 });
 
  $(".buttonservice").click(function(){
	  event.preventDefault();
	 popup();
 });
 

});



 	var phot=1;
function popup(){
if(phot==1){
phot=0;
$(".bgpp").addClass("ppactive");
$(".formz").addClass("ppactive");
}
else
{
phot=1;
$(".bgpp").removeClass("ppactive");
$(".formz").removeClass("ppactive");
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
	$("body").append('<div class="succefolly"> <div class="obls"><span>Спасибо!<br>Заявка отправлена</span><br></div></div>');
	$.ajax({
                    type: "POST",
                    url: "/send.php",
                    dataType: "text",
                    data: sd,
                    success: function (html) {
if(parseInt(html)==1){
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


(function () {
  
  'use strict';
  
  var pop_up_video = $('#pop_up_video'),
    pop_up_video_iframe = $('#pop_up_video_iframe'),
    close_pop_up_video_id = $('#pop_up_video_bg'),
  	open_pop_up_video_id = $('#open_pop_up_video'),
  	mobile_open_pop_up_video_id = $('#mobile_open_pop_up_video');

  	// Pop-up Video
  	
  	var close_pop_up_video = function(event){
  		event.preventDefault();
  		pop_up_video_iframe.attr('src', '');
  		pop_up_video.css('display', 'none');
  	};
  	close_pop_up_video_id.on('click', close_pop_up_video);
  	
  	
  	var open_pop_up_video = function(event){
  		event.preventDefault();    
  		pop_up_video_iframe.attr('src', 'https://www.youtube.com/embed/TtnVfsQjMQE');
  		pop_up_video.css('display', 'block');
  	};
  	
    open_pop_up_video_id.on('click', open_pop_up_video);    
    mobile_open_pop_up_video_id.on('click', open_pop_up_video);
                                   
}());                                     