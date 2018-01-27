'use strict';

var $ = require('jquery-slim');

// require('gsap');
require('gsap/CSSPlugin');
require('gsap/ScrambleTextPlugin');
var TweenLite = require('gsap/TweenLite');


$(function(){

    window.requestAnimFrame = require('./requestAnimFrame.js');
    var throttle = require('./throttle.js');

    var body = $('body');
    // window.outerWidth returns the window width including the scroll, but it's not working with $(window).outerWidth
    var windowWidth = window.outerWidth, windowHeight = $(window).height();


    function resizeHandler(){
        windowWidth = window.outerWidth;
        windowHeight = $(window).height();
    }

    function loadHandler(){
        $('#header').on('mouseenter', 'a', function(){
            TweenLite.to($(this).find('.scramble'), 0.5, {scrambleText: {text: $(this).find('.scramble').data('text'), speed: 0.4}}); 
        });

        $('#portfolio').on('mouseenter', 'a', function(){
            TweenLite.to([$(this).parents('li').siblings(), $(this).parents('ul').siblings().find('li')], 0.25, {opacity: 0.2});

            TweenLite.to($(this).find('.scramble'), 0.7, {scrambleText: {text: $(this).find('.scramble').data('text'), speed: 0.4}});

            TweenLite.set($('.logo').find('.body'), {fill: $(this).data('color')});
            // TweenLite.to([$('body'), $('p')], 0.3, {backgroundColor: $(this).data('color')});
            // TweenLite.set([$('#portfolio').find('a')], {background: $(this).data('color')});
        }).on('mouseleave', 'a', function(){
            TweenLite.to([$(this).parents('li').siblings(), $(this).parents('ul').siblings().find('li')], 0.25, {opacity: 1});

            $('.logo').find('.body').attr('style', '');
        });
    }


    // isMobile.any ? body.addClass('is-mobile') : body.addClass('is-desktop');

    // Since script is loaded asynchronously, load event isn't always fired !!!
    document.readyState === 'complete' ? loadHandler() : $(window).on('load', loadHandler);

    $(window).on('resize', throttle(function(){
        requestAnimFrame(resizeHandler);
    }, 60));

    $(document).on('scroll', throttle(function(){

    }, 60));

});
