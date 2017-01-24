'use strict';

var $ = require('./libs/jquery/dist/jquery.slim.min.js');
var Cookies = require('./libs/js.cookie.js');
// var particlesJS = require('./libs/particles.min.js');


// $(function(){

// });

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
        });
    }

    if(body.hasClass('home')){
        if(Cookies.get('octopus')){
            animElts(eltsToAnim);
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
    }

    if($('#map').length){
        mapInit();
    }

    if(chart.length){
        animChart(chart);
    }

    console.log(particlesJS)

    particlesJS.load('particles', 'js/particles.json', function(){
        console.log('callback - particles.js config loaded');
    });
    // particlesJS();

});
