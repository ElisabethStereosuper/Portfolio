'use strict';

const $ = require('jquery-slim');

require('gsap/AttrPlugin');
require('gsap/ScrambleTextPlugin');
const TweenLite = require('gsap/TweenLite');


$(function(){

    const isIE = navigator.userAgent.indexOf('Edge') > -1 || navigator.userAgent.indexOf('Trident/7.0') > -1;

    const forms = $('form');


    function loadHandler(){
        const animChart = require('./chart.js');
        const mapInit = require('./map.js');

        const eltsToAnim = $('.anim-elt');
        const logo = $('#logo').find('.body');
        const header = $('#header');
        const tentacles = $('#octopus').find('.tentacle'), matrix = $('#octopusMatrix');

        let rgb, matrixRgb;

        
        TweenLite.to(eltsToAnim, 0.4, {opacity: 1, y: 0, onComplete: function(){
            TweenLite.to(header, 0.4, {opacity: 1, y: 0});
        }});

        if( tentacles.length ){
            tentacles.eq(0).addClass('on');
        }

        $('#img404').addClass('on');


        header.on('mouseenter', 'a', function(){
            TweenLite.to($(this).find('.scramble'), 0.5, {scrambleText: {text: $(this).find('.scramble').data('text'), speed: 0.4}}); 
        });

        $('#portfolio').on('mouseenter', 'a', function(){

            TweenLite.to([$(this).parents('li').siblings(), $(this).parents('ul').siblings().find('li')], 0.25, {opacity: 0.2});

            TweenLite.to($(this).find('.scramble'), 0.7, {scrambleText: {text: $(this).find('.scramble').data('text'), speed: 0.4}});

            TweenLite.set(logo, {fill: 'rgb(' + $(this).data('color') + ')'});

            rgb = $(this).data('color').split(',');
            matrixRgb = rgb.map(x => (parseInt(x)/250));
            tentacles.toggleClass('on');
            
            TweenLite.to(matrix, 0.5, {attr: {'values': (1 - matrixRgb[0]) + ' 0 0 0 ' + matrixRgb[0] + ' ' + (1 - matrixRgb[1]) + ' 0 0 0 ' + matrixRgb[1] + ' ' + (1 - matrixRgb[2]) + ' 0 0 0 ' + matrixRgb[2] + ' 0 0 0 1 0'}});

        }).on('mouseleave', 'a', function(){

            TweenLite.to([$(this).parents('li').siblings(), $(this).parents('ul').siblings().find('li')], 0.25, {opacity: 1});

            logo.attr('style', '');

            tentacles.toggleClass('on');

        });

        animChart( $('#chart'), isIE );
        mapInit( $('#map') );
    }

    const checkEmptyInput = ( input ) => {
        input.val() !== '' ? input.addClass('filled') : input.removeClass('filled');
    };


    // IE - Chart bugs
    if( isIE ) $('body').addClass('ie');

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

});
