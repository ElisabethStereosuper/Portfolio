$.urlParam = function(x){
	var res = new RegExp('[\?&]' + x + '=([^&#]*)').exec(window.location.href);
	return res === null ? null : res[1] || 0;
}

function setHeader(){
	if($(window).scrollTop() >= 100){
		$('header').addClass('fixed'); 
		$('.accueil').addClass('an-done');
	}else{ 
		$('header').removeClass('fixed'); 
		$('.accueil').removeClass('an-done');
	}
}

function openTxtPlus(){
	$(this).parent('li').siblings().find('.txtPlus.open').slideToggle('ease').toggleClass('open');
	$(this).parent('li').siblings().find('.plus.moins').toggleClass('moins');
	$(this).toggleClass('moins').parent('li').find('.txtPlus').slideToggle('ease').toggleClass('open');
	return false;
}

function setLabel(){
	$(this).prev('label').addClass('o');
	$(this).focusout(function(){
		$(this).prev('label').removeClass('o');
	});
}

function detailCrea(){
	var posBg = thisLi.index(), pos = $('.creas').find('.here').index(thisLi),
	crea = $('.bgCrea').find('.crea').eq(posBg).clone().hide();

	thisLi.find('.a').addClass('actif');
	thisLi.siblings().addClass('op');

if($(window).width() >= 640){ // 640 = 661
	var nb = $(window).width() < 960 ? 2 : 3, /* 960 = 981 */ i = 0;

	for(i; i<=pos; i+=nb) var posCrea = i+(nb-1);
		var mod = nbLi % nb;
	if(mod !== 0) var limit = nbLi - mod;
	if(pos >= limit) posCrea = nbLi - 1;

	$('.bgCrea').find('h3, img, .agence').removeClass('none')
}else{
	posCrea = pos;
	$('.bgCrea').find('h3, img, .agence').addClass('none')
}

$('.creas').find('.here').eq(posCrea).after(crea);
crea.slideDown('ease');
}

function preDetailCrea(thisA){
	var bgCrea = $('.creas').find('.crea');
	thisLi = thisA.parent('li');

	if(thisA.hasClass('actif')){
		thisA.removeClass('actif');
		thisLi.siblings().removeClass('op');
		bgCrea.slideUp('ease', function(){$(this).remove()})
	}

	thisLi.removeClass('op');

	if(bgCrea.length){
		thisLi.siblings().find('.a').removeClass('actif');
		bgCrea.slideUp('ease', function(){$(this).remove(); detailCrea()})
	}else{
		detailCrea();
	}
}

function showSomeCrea(){
	var bgCrea = $('.creas').find('.crea'), li = $('.creas').find('li');

	$(this).parent('li').siblings().find('a').removeClass('actif');
	$(this).addClass('actif');

	if(bgCrea.length){
		li.find('.a').removeClass('actif');
		li.removeClass('op');
		bgCrea.slideUp('ease', function(){ $(this).remove(); });
	}

	if($(this).attr('id') == 'all'){
		li.addClass('here').fadeIn()
	}else{
		var type = '.'+$(this).attr('id');
		li.not(type).removeClass('here').fadeOut();
		$(type).addClass('here').fadeIn()
	}
	nbLi = $('.here').size()
}

function initMap(){
	var mapOptions = {
		center: new google.maps.LatLng(50.275299,-28.0188),
		zoom: 2,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.DEFAULT,
		},
		disableDoubleClickZoom: false,
		mapTypeControl: false,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
		},
		scaleControl: true,
		scrollwheel: false,
		panControl: false,
		streetViewControl: false,
		draggable : true,
		overviewMapControl: true,
		overviewMapControlOptions: {
			opened: false,
		},
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [ { "featureType": "road",
					"elementType": "geometry",
					"stylers": [{ "visibility": "off" }] },
					{ "featureType": "poi",
					"elementType": "geometry",
					"stylers": [{ "visibility": "off" }] },
					{ "featureType": "landscape",
					"elementType": "geometry",
					"stylers": [{ "color": "#fffffa" }] },
					{ "featureType": "water",
					"stylers": [{ "lightness": 50 }] },
					{ "featureType": "road",
					"elementType": "labels",
					"stylers": [{ "visibility": "off" }] },
					{ "featureType": "transit",
					"stylers": [{ "visibility": "off" }] },
					{ "featureType": "administrative",
					"elementType": "geometry",
					"stylers": [{ "lightness": 40 }] }
				],
		},
		mapElement = document.getElementById('map'),
		map = new google.maps.Map(mapElement, mapOptions),
		img = 'img/map.png';
		loc = [
			['Montreal', 45.5086699, -73.55399249999999],
			['Ottawa', 45.4215296, -75.69719309999999],
			['Québec', 46.8032826, -71.242796],
			['Gatineau', 45.4765446, -75.7012723],
			['Madrid', 40.4167754, -3.7037902],
			['Lisbonne', 38.7222524, -9.1393366],
			['Barcelone', 41.3850639, 2.1734035],
			['Paris', 48.856614, 2.3522219],
			['Poitiers', 46.58022400000001, 0.340375],
			['Limoges', 45.83361900000001, 1.261105],
			['Nantes', 47.218371, -1.553621],
			['Marseille', 43.296482, 5.36978],
			['Bordeaux', 44.837789, -0.57918],
			['Pointe du Raz', 48.039989, -4.740394999999999],
			['Amsterdam', 52.3702157, 4.895167900000001],
			['Londres', 51.5073509, -0.1277583],
			['Prague', 50.0755381, 14.4378005],
			['Athenes', 37.983917, 23.7293599]
		],
		i = 0,
		nbLocs = loc.length;

	for(i; i<nbLocs; i++){
		marker = new google.maps.Marker({
			icon: img,
			position: new google.maps.LatLng(loc[i][1], loc[i][2]),
			map: map,
			title: loc[i][0]
		});
	}
}


$(function(){
	if($('body > div').hasClass('accueil')) $(window).scroll(setHeader);

	$('.plus').click(openTxtPlus);

	/*var isOpera = !!window.opera || /opera|opr/i.test(navigator.userAgent);
	var isSafari = /constructor/i.test(window.HTMLElement);
	if(isOpera || isSafari){
		$('body').addClass('ope');
	}*/

	$('.input').on('focus', setLabel);

	$('.creas').find('li').addClass('here');
	nbLi = $('.here').size();

	$('#nav-crea').find('a').click(showSomeCrea);

	$('.creas').on('click', '.a', function(e){
		e.preventDefault();
		preDetailCrea($(this));
	});

	if($.urlParam('c') !== null){
		var c = $.urlParam('c');
		thisA = $('.creas').find('li').eq(c).find('.a');
		preDetailCrea(thisA);
	}

	if($('body').hasClass('apropos')){
		google.maps.event.addDomListener(window, 'load', initMap);
	}
});