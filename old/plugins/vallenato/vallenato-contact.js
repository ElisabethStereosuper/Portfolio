/*!
 * Vallenato 1.0
 * A Simple JQuery Accordion
 *
 * Designed by Switchroyale
 * 
 * Use Vallenato for whatever you want, enjoy!
 */

$(document).ready(function()
{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	$('.accordion-content').first().css('display', "none");
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.reseaux').addClass('margereseaux');
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
			$('.reseaux').removeClass('margereseaux');
		}
	});
	
	return false;
});