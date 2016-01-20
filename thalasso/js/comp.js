/*function toggleMenu(){
	if($('.subNav').hasClass('active')){
		$('.subNav').css('left', '-10px');
		$('.subNav').removeClass('active');
	}
	if($('#menuHotel').hasClass('active')){
		$('#menuHotel').removeClass('active');
		$('#tabThalasso').css('background', 'url(images/thalasso.png) no-repeat');
		$('#tabHotel').css('background', 'url(images/hotel2.png) no-repeat');
		$('#nav').removeClass('hotel');

		$('#menuHotel').fadeOut(function(){
			$('#menuThalasso').addClass('active');
			$('#menuThalasso').fadeIn();
		});
	}
	else if($('#menuThalasso').hasClass('active')){
		$('#menuThalasso').removeClass('active');
		$('#tabThalasso').css('background', 'url(images/thalasso2.png) no-repeat');
		$('#tabHotel').css('background', 'url(images/hotel.png) no-repeat');
		$('#nav').addClass('hotel');

		$('#menuThalasso').fadeOut(function(){
			$('#menuHotel').addClass('active');
			$('#menuHotel').fadeIn();
		});
	}
	return false;
}*/

function toggleSubMenu(){
	var subNav = $(this).attr('rel');

	if(subNav == 'null' && $('.subNav').hasClass('active')){
		$('.subNav').css('left', '-10px');
		$('.subNav').removeClass('active');
	}

	if($('#'+subNav).siblings('.subNav').hasClass('active')){
		$('#'+subNav).siblings('.active').css('left', '-10px');
		$('#'+subNav).siblings('.active').removeClass('active');
	}

	$('#'+subNav).css('left', '146px');
	$('#'+subNav).addClass('active');

	$('#'+subNav).mouseleave(function(){
		$('#'+subNav).css('left', '-10px');
		$('#'+subNav).removeClass('active');
	});
	return false;
}

function openForm(){
	if($(this).hasClass('active')){
		$(this).removeClass('active');
		$(this).find('.li-none').css('display', 'none');
		$(this).find('li').css({'background': 'none', 'border-left': 'none', 'border-right': 'none'});
		$(this).find('li').eq(0).css('border-top', 'none');
		$(this).find('li').eq(2).css('border-bottom', 'none');
	}
	else{
		$(this).addClass('active');
		$(this).find('.li-none').css('display', 'block');
		$(this).find('li').css({'background': '#fff', 'border-left': '1px solid #c1bfb7', 'border-right': '1px solid #c1bfb7'});
		$(this).find('li').eq(0).css('border-top', '1px solid #c1bfb7');
		$(this).find('li').eq(2).css('border-bottom', '1px solid #c1bfb7');
	}
	var brother = $(this).siblings('ul');
	if(brother.hasClass('active')){
		brother.removeClass('active');
		brother.find('.li-none').css('display', 'none');
		brother.find('li').css({'background': 'none', 'border-left': 'none', 'border-right': 'none'});
		brother.find('li').eq(0).css('border-top', 'none');
		brother.find('li').eq(2).css('border-bottom', 'none');
	}
}

function updateForm(){
	var liste = $(this).parent('ul');
	var ancien = $(liste).find('.li-active').html();
	var nouveau = $(this).html();
	$(liste).find('.li-active').html(nouveau);
	$(this).html(ancien);
}

function openPicture(){
	var visuel = $(this).find('a').attr('rel');

	if(visuel != 'null'){
		$('#footer').css('opacity', '0');
		$('#footer').css('display', 'none');
		$('#right').css('opacity', '0');
		$('#'+visuel).fadeIn();
		$('#'+visuel).addClass('visuel-active');

		$(this).mouseleave(function(){
			$('.visuel-active').fadeOut();
			$('.visuel').removeClass('active');
		});

		$('.subNav li').mouseleave(function(){
			$('#right').css('opacity', '1');
			$('#footer').css('display', 'block');
			$('#footer').css('opacity', '1');
		});
	}
}

$(document).ready(function(){
	//$('#tabHotel').click(toggleMenu);
	//$('#tabThalasso').click(toggleMenu);
	$('.menu a').mouseover(toggleSubMenu);
	$('#temps').click(openForm);
	$('#activite').click(openForm);
	$('.li-none').click(updateForm);
	$('.subNav li').mouseover(openPicture);
});