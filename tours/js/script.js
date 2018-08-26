//..................................golu....................................
function golu(){

	var glist = document.getElementsByClassName('gcontent');
	$(glist).find("a").click(function(){
		var g = $(this).text();
		$(".gtopic").text(g);
	});
}
//.................................../golu..................................
// ...........................HOtel Login......................................
function welcome(){

	var screen = document.getElementsByClassName('welcome');
	var texts= document.getElementsByClassName('weltext');
	var card = document.getElementsByClassName('logcard');
	$(screen).fadeOut(5500);
	$(texts).slideDown(2000);
	$(card).slideDown(5500);
}
// .............................Hotel lOGIN........................................
// ....................................hotelprofile...................................
function start(){
	var list = document.getElementsByClassName("hlists");
	$("#myTab").find("a").click(function(){
		var t = $(this).text();
		$(".topic").text(t);

	});
	var topic = document.getElementById("myTab");
	var a = $(topic).find(".active").text();
	console.log(a);
	$(list).find("li").hover(function(){
		$(this).animate({
			right:'0px'},200);
	},function(){
		$(this).animate({
			right:'-180px'},200);
	});
}
function thisFileUpload() {
            document.getElementById("file").click();
        };



//.........................................hotelprofile................................


	$(document).ready(function(){
		$(".image-container").click(function(){
			var getvalue = $(this).attr("data-target");
	        var getimg = $(this).find('img').attr('src');
	        $(getvalue).find(".header").css('background-image','url(' + getimg + ')');
			
			console.log("sdas");
		});
	});

// $(document).ready(function(){
// 	console.log("hello");
// });



























$(document).ready(function(){
 $('.pop-up').on('click', function(){
 	$('#overlay-book').fadeIn(300); 
 	$('.calendar').fadeIn(300); 
 	let clickedbutton = $("input",$(this).parent()).attr('id');
 	$('.dates').data('type',clickedbutton);
 });
 
 $('table').on('click', function(event){
   let that=$(event.target);
    if(that.is('td') && !that.hasClass('notCurMonth') && !that.hasClass('holiday') && !that.hasClass('curDay')){
    	$('td.curDay').toggleClass('curDay');
    	that.toggleClass('curDay');
    }
}); 

$('#add_event').on('click', function(){
	let value= $('td.curDay').html();
    $('#overlay-book').fadeOut(300);
 	$('.calendar').fadeOut(300);
 	let id=($('.dates').data()).type;
 	$('#' + id).val(value+" May, 2014");
}); 

$('#search').on('click', function(e){
	$('.booking').addClass('is-sent');
	e.preventDefault();
});
});	
// ...............................Sign Up..........................
//   document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.tap-target');
//     var instances = M.TapTarget.init(elems, options);
//   });

//   // Or with jQuery

//   $(document).ready(function(){
//     $('.tap-target').tapTarget();
//   });
// //.................................Sign UP.........................
  // Or with jQuery
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  // .................................................................