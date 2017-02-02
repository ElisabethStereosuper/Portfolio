'use strict';

var $ = require('jquery-slim');
var Cookies = require('js-cookie');
//var isMobile = require('ismobilejs');

require('particles.js');


$(function(){

    function checkEmptyInput(input){
        input.val() !== '' ? input.addClass('filled') : input.removeClass('filled');
    }

    $('form').on('input propertychange', 'input, textarea', function(){
        checkEmptyInput($(this));
    }).find('input, textarea').each(function(){
        checkEmptyInput($(this));
    });

});

$(window).on('load', function(){

    var animElts = require('./animElts.js');
    var animChart = require('./chart.js');
    var mapInit = require('./map.js');

    var ff = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

    var body = $('body'), header = $('#header');
    var endAnimHome = false;
    var eltsToAnim = $('.anim-elt');
    var chart = $('#chart');
    var logo = $('#logo');

    function headerAnimation(){
        header.delay(100).queue(function(){
            logo.addClass('on');
            $(this).dequeue();
        }).delay(800).queue(function(){
            logo.addClass('op');
            $(this).dequeue();
        }).delay(100).queue(function(){
            animElts(eltsToAnim);
            $(this).dequeue();
        }).delay(1000).queue(function(){
            $(this).removeClass('off').dequeue();
            endAnimHome = true;
            Cookies.set('octopus', true, { expires: 1, path: '/' });
            !ff & particlesJS.load('particles', 'js/particles.json');
        });
    }

    ff & body.addClass('ff');

    if(body.hasClass('home')){
        if(Cookies.get('octopus')){
            animElts(eltsToAnim);
            !ff & particlesJS.load('particles', 'js/particles.json');
        }else{
            headerAnimation();

            $(window).on('focusin', function(){
                !endAnimHome && headerAnimation();
            }).on('focusout', function(){
                !endAnimHome && header.clearQueue();
            });
        }
    }else{
        animElts(eltsToAnim);
        !ff & particlesJS.load('particles', 'js/particles.json');
    }

    $('#map').length && mapInit();
    chart.length && animChart(chart);

    if($('#logo-404').length){
        var x, y;
        body.on('mousemove', function(e){
            x = e.pageX;
            y = e.pageY;
            console.log(x)
            console.log(y)
        });
        //$('#logo-404').find('.eye-center')
    }

});
