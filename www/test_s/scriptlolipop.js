var ssl;
var schetimg=0;
$(document).ready(function(){


	  
$("#epta").find("img").click(function(){
ssl = $(this).attr('src');
window.open(ssl, '_blank');
});


});
var obr=1, bask=1, phot=1, j,price,numb,price1,metr,k,u;
function obrzv(){
if(obr==1){obr=2;
$("div#fonid").fadeIn(500);
$("div#obrid").fadeIn(500);
$("div.baskcl").fadeOut(500);
bask=1;
}
else
{
obr=1;
$("div.foncl").fadeOut(500);
$("div#obrid").fadeOut(500);
location.reload();
}
}
function visib(k){
$("div#photoid"+k).show();
$.get("photoscr.js");
document.getElementById("animation").style.display = "none";
$("div#fonid1").fadeIn(500);
}
function photoopen(k){
if(phot==1){phot=2;

var compl = 0;
$("#animation").css("display", "block");
$("div#photoid"+k).load("photo"+k+".html #photoidd", function(){$("div#photoid"+k).find("img").load(function(){compl++;if(compl==6){visib(k);}})});

}
else
{
phot=1;
$("div.photocl").fadeOut(500);
$("div.foncl").fadeOut(500);
}
}


function baskopen(){
if(bask==1){bask=2;
$("div.baskcl").fadeIn(500);
$("div#fonid").fadeIn(500);
}
else
{
bask=1;
$("div.baskcl").fadeOut(500);
$("div.foncl").fadeOut(500);
location.reload();
}
}

function obrsub(){
$("form#obrform").submit();
}
function zaot(){
$("div#zaot").fadeOut(500);
$("div.foncl").fadeOut(500);
}
function allclose(){
$("div#zaot").fadeOut(500);
obr=1;
$("div.foncl").fadeOut(500);
$("div#obrid").fadeOut(500);
phot=1;
$("div.photocl").fadeOut(500);
bask=1;
$("div.baskcl").fadeOut(500);
}
function allclose1(){
$("div.foncl").fadeOut(500);
$("div.photocl").fadeOut(500);
phot=1;
}




function sendzaivka(){
var nameotpr = document.getElementsByClassName('xxx_name')[0].value;
var telephoneotpr = document.getElementsByClassName('xxx_phone')[0].value;
var emailotpr = document.getElementsByClassName('xxx_email')[0].value;
var zayavkatpr = document.getElementsByClassName('xxx_soderj')[0].value;
$.post(
  "/otpr_zad.php",
  {
    gparam1: nameotpr,
	gparam2: telephoneotpr,
	gparam3: emailotpr,
	gparam4: zayavkatpr
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  $(".otvet_server").html(data);
}


}



function schet(th){
var ids,metr,price,itog,ids1,kolvo;
kolvo = $(".calcline").length;
ids = th.parentNode.parentNode;
price = $(ids).find(".calcpriceu").html();
itog = price*(th.value);
var block;
block = $(ids).find(".calcitogo");
block[0].innerHTML = itog;
var vsego,i,j,k;
i=0;
vsego=0;
block = $(".calcitogo");
for(i=0;i<kolvo;i++){
vsego += parseInt(block[i].innerHTML);
}
$(".vsego")[0].innerHTML = vsego;

}





function sendbaba(){
var colvodiv = document.getElementsByClassName('calcnameu').length;
for (i = 0; i < colvodiv; i++) { 
	var names = 'Наименование: '+ document.getElementsByClassName('calcnameu')[i].innerHTML;
var edizm = 'Ед.изм: '+document.getElementsByClassName('calcedu')[i].innerHTML;
var znachform = document.getElementsByClassName('calcinp')[i].value;
var stomsht = document.getElementsByClassName('calcpriceu')[i].innerHTML*znachform;
var pop = ", ";
var lu = "|";
var hran = names + pop + edizm + pop + 'Размер: ' + znachform + pop + 'Итого: ' + stomsht + lu + '*';
var hran2 = hran + hranprosh;
var hranprosh = hran2;
}
$.post(
  "/otpr_kr.php",
  {
    param1: hran2,
	param2: document.getElementsByClassName('vsego')[0].innerHTML
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  $("#innerbask").html(data);
}
baskopen();
}
function sendzay(){ 
var lili1 = document.getElementsByClassName('lili1')[0].value;
var lili2 = document.getElementsByClassName('lili2')[0].value;
var lili3 = document.getElementsByClassName('lili3')[0].value;
$.post(
  "/otpr_kr.php",
  {	
    lili1s: lili1,
	lili2s: lili2,
	lili3s: lili3
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  $("#innerbask").html(data);
}
}









var ssl;
var schetimg=0;

$(document).ready(function(){

window.onload = function(){
kolvo = $(".calcnumberusl").length;
block = $('.calcnumberusl');

for(i=0;i<kolvo;i++){
block[i].innerHTML = i+1;
}
}

destination = $(".calcdiv").offset().top;
$('body,html').animate( { scrollTop: destination }, 500 );
      
	  })