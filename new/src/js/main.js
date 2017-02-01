'use strict';

var $ = require('jquery-slim');
var Cookies = require('js-cookie');

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
            particlesJS.load('particles', 'js/particles.json');
        });
    }

    if(body.hasClass('home')){
        if(Cookies.get('octopus')){
            animElts(eltsToAnim);
            particlesJS.load('particles', 'js/particles.json');
        }else{
            headerAnimation();

            $(window).on('focusin', function(){
                if(!endAnimHome){
                    headerAnimation();
                }
            }).on('focusout', function(){
                if(!endAnimHome){
                    header.clearQueue();
                }
            });
        }
    }else{
        animElts(eltsToAnim);
        particlesJS.load('particles', 'js/particles.json');
    }

    if($('#map').length){
        mapInit();
    }

    if(chart.length){
        animChart(chart);
    }

});
