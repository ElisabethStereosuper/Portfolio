$(document).ready(initialiser);

function initialiser(){ 
	$('#agrandir').click(openAndClosePhotos);
	$('#limenu').click(openAndCloseMenu);
	$('#country').click(openAndCloseMenuNewsCountry);
	$('#subject').click(openAndCloseMenuNewsSubject);
	$('#country').next().children().click(updateMenuNewsCountry);
	$('#subject').next().children().click(updateMenuNewsSubject);

	$('#disco-content > nav a').click(typeDisco);
	$('.type').eq(0).css('display', 'block');
	$('.type').eq(0).siblings('.type').css('display', 'none');
	$('#disco-content > nav li').eq(0).children().addClass('alb-active');

	$('.menu-type a').click(albumDetails);
	for(var i=0; i<3; i++){
		$('.type').eq(i).children('section').eq(0).css('display', 'block');
		$('.type').eq(i).children('section').eq(0).siblings('section').css('display', 'none');
	}
	$('#menu-album li').eq(0).children().addClass('alb-active');
	$('#menu-single li').eq(0).children().addClass('alb-active');
	$('#menu-remix li').eq(0).children().addClass('alb-active');
}

function openAndClosePhotos(){
	$('#photos').toggleClass('photos-open');
	$('#videos').toggleClass('block');
	$('#container').toggleClass('grand');
	$('#slider').toggleClass('grand-slider');
	$('#slider img').toggleClass('petite-img').toggleClass('grande-img');
}

function openAndCloseMenu(){
	$('#menu ul').toggleClass('appear');
	$('#limenu').toggleClass('active');
	$('#menu').toggleClass('menu-active');

	var width = (document.body.clientWidth);
	if (width < 560){
		$('header h1').toggleClass('none');
		$('header li').toggleClass('none');
	}
}

function openAndCloseMenuNewsCountry(){
	$(this).next().toggleClass('appear');
	if( $('#subject').next().hasClass('appear') ){
		$('#subject').next().toggleClass('appear');
	}
}

function openAndCloseMenuNewsSubject(){
	$(this).next().toggleClass('appear');
	if( $('#country').next().hasClass('appear') ){
		$('#country').next().toggleClass('appear');
	}
}

function updateMenuNewsCountry(){
	var li = $(this).children().html();
	$('#country').html(li);
	$('#country').css("font-size", "22px");

	$('#subject').html('Subject');
	$('#subject').css("font-size", "25px");
}

function updateMenuNewsSubject(){
	var li = $(this).children().html();
	$('#subject').html(li);
	$('#subject').css("font-size", "22px");

	$('#country').html('Country');
	$('#country').css("font-size", "25px");
}

function albumDetails(){
	var pos = $(this).parent().prevAll().length;
	$(this).addClass('alb-active');
	$(this).parent().siblings().children().removeClass('alb-active');
	for(var i=0; i<3; i++){
		$('.type').eq(i).children('section').eq(pos).css('display', 'block');
		$('.type').eq(i).children('section').eq(pos).siblings('section').css('display', 'none');
	}
}

function typeDisco(){
	for(var i=0; i<3; i++){
		$('.type').eq(i).children('section').eq(0).css('display', 'block');
		$('.type').eq(i).children('section').eq(0).siblings('section').css('display', 'none');
	}
	$('#menu-album li').eq(0).children().addClass('alb-active');
	$('#menu-single li').eq(0).children().addClass('alb-active');
	$('#menu-remix li').eq(0).children().addClass('alb-active');

	var pos2 = $(this).parent().prevAll().length;
	$(this).addClass('alb-active');
	$(this).parent().siblings().children().removeClass('alb-active');
	$('.type').eq(pos2).css('display', 'block');
	$('.type').eq(pos2).siblings('.type').css('display', 'none');
}