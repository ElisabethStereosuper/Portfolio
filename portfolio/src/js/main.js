'use strict';

const $ = require('jquery-slim');

// require('gsap');
//require('gsap/CSSPlugin');
require('gsap/AttrPlugin');
require('gsap/ScrambleTextPlugin');
const TweenLite = require('gsap/TweenLite');


$(function(){

    window.requestAnimFrame = require('./requestAnimFrame.js');
    //const throttle = require('./throttle.js');

    const isIE = navigator.userAgent.indexOf('Edge') > -1 || navigator.userAgent.indexOf('Trident/7.0') > -1;

    const body = $('body');
    const forms = $('form');
    // window.outerWidth returns the window width including the scroll, but it's not working with $(window).outerWidth
    // let windowWidth = window.outerWidth, windowHeight = $(window).height();


    // function resizeHandler(){
    //     windowWidth = window.outerWidth;
    //     windowHeight = $(window).height();
    // }

    function loadHandler(){
        const animChart = require('./chart.js');
        const mapInit = require('./map.js');

        const eltsToAnim = $('.anim-elt');
        //const grid = $('#gridPlus');
        const logo = $('#logo');
        const header = $('#header');
        const tentacles = $('#octopus').find('.tentacle'), matrix = $('#octopusMatrix');

        let rgb, matrixRgb;

        
        TweenLite.to(eltsToAnim, 0.4, {opacity: 1, y: 0, onComplete: function(){
            TweenLite.to(header, 0.4, {opacity: 1, y: 0});
        }});


        header.on('mouseenter', 'a', function(){
            TweenLite.to($(this).find('.scramble'), 0.5, {scrambleText: {text: $(this).find('.scramble').data('text'), speed: 0.4}}); 
        });

        $('#portfolio').on('mouseenter', 'a', function(){

            TweenLite.to([$(this).parents('li').siblings(), $(this).parents('ul').siblings().find('li')], 0.25, {opacity: 0.2});

            TweenLite.to($(this).find('.scramble'), 0.7, {scrambleText: {text: $(this).find('.scramble').data('text'), speed: 0.4}});

            TweenLite.set(logo.find('.body'), {fill: 'rgb(' + $(this).data('color') + ')'});

            rgb = $(this).data('color').split(',');
            matrixRgb = rgb.map(x => (parseInt(x)/250));
            tentacles.toggleClass('on');
            TweenLite.to(matrix, 0.5, {attr: {'values': (1 - matrixRgb[0]) + ' 0 0 0 ' + matrixRgb[0] + ' ' + (1 - matrixRgb[1]) + ' 0 0 0 ' + matrixRgb[1] + ' ' + (1 - matrixRgb[2]) + ' 0 0 0 ' + matrixRgb[2] + ' 0 0 0 1 0'}});

            //grid.css('color', $(this).data('color')).addClass('on');

        }).on('mouseleave', 'a', function(){

            TweenLite.to([$(this).parents('li').siblings(), $(this).parents('ul').siblings().find('li')], 0.25, {opacity: 1});

            logo.find('.body').attr('style', '');

            tentacles.toggleClass('on');

            //grid.attr('style', '').removeClass('on');

        });

        animChart( $('#chart'), isIE );
        mapInit( $('#map') );
    }

    const checkEmptyInput = ( input ) => {
        input.val() !== '' ? input.addClass('filled') : input.removeClass('filled');
    };


    // IE
    if( isIE ) body.addClass('ie');

    // Form inputs
    if( forms.length ){
        forms.on('change input', 'input, textarea', function(){
            checkEmptyInput($(this));
        }).find('input, textarea').each(function( i ){
            if( $(this).is(':hidden') ) return;
            checkEmptyInput($(this));

            if( i !== 0 || $(this).parents('form').hasClass('form-error') ) return;
            $(this).focus();
        });
    }


    // Since script is loaded asynchronously, load event isn't always fired !!!
    document.readyState === 'complete' ? loadHandler() : $(window).on('load', loadHandler);

    // $(window).on('resize', throttle(function(){
    //     requestAnimFrame(resizeHandler);
    // }, 60));

    // $(document).on('scroll', throttle(function(){

    // }, 60));

});
