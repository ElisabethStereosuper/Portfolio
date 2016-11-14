'use strict';

var $ = require('./libs/jquery/dist/jquery.slim.min.js');
window.requestAnimFrame = require('./requestAnimFrame.js');


$(function(){

    var body = $('body');
    var header = $('#header');
    var windowWidth = $(window).outerWidth(), windowHeight = $(window).height();
    var headerTimer;



    // isMobile.any ? body.addClass('is-mobile') : body.addClass('is-desktop');

    $('#portfolio').on('mouseenter', 'a', function(){
        $(this).parents('li').siblings().addClass('off');
    }).on('mouseleave', 'a', function(){
        $(this).parents('li').siblings().removeClass('off');
    });


    // var specialChars = ['?', '$', '*', '!', '%', '[', '(', '}', '°', 'A', 'B', 'O'];

    // function clearChar(letter){
    //     letter.html(letter.data('char'));
    // }
    // function clearChars(string){
    //     string.find('span').each(function(){
    //         clearChar($(this));
    //     });
    // }

    // function changeChars(string){
    //     var letterIndex = Math.random() * string.find('span').length | 0,
    //         charIndex = Math.random() * specialChars.length | 0;

    //     string.queue(function(){
    //         $(this).find('span').eq(letterIndex).html(specialChars[charIndex]);
    //         $(this).dequeue();
    //     }).delay(300).queue(function(){
    //         clearChar($(this).find('span').eq(letterIndex));
    //         $(this).dequeue();
    //     });

    //     headerTimer = setTimeout(function(){ changeChars(string); }, Math.random() * (1000 - 300) + 300);
    // }

    // header.find('li > a').each(function(){
    //     var text = $(this).html();
    //     var splitText = text.split('').map(function(n){ return '<span data-char="'+n+'">' + n + '</span>'; });
    //     $(this).html(splitText).width($(this).width()).css({'paddingLeft': 0, 'paddingRight': 0});
    // });
    // header.on('mouseenter', 'li > a', function(){
    //     changeChars($(this));
    // }).on('mouseleave', 'li > a', function(){
    //     clearChars($(this))
    //     clearTimeout(headerTimer);
    // });


    $(window).on('resize', function(){

        windowWidth = $(window).outerWidth();
        windowHeight = $(window).height();

    });

    $(document).on('scroll', function(){

    });

});

$(window).on('load', function(){

    var body = $('body'), header = $('#header');
    var delayAnimElt, delayTransitionElt = 0.15;
    var endAnimHome = false;

    function animElts(){
        $('.anim-elt').each(function(i){
            delayAnimElt = i === 0 ? 310 : 460*i;
            $(this).queue(function(){
                $(this).css('transition-delay', delayTransitionElt*i + 's').addClass('on').dequeue();
            }).delay(delayAnimElt).queue(function(){
                $(this).removeClass('anim-elt on').attr('style', '').dequeue();
            });
            delayTransitionElt -= 0.005;
        });
    }

    function headerAnimation(){
        header.delay(100).queue(function(){
            $(this).find('.logo').addClass('on');
            $(this).dequeue();
        }).delay(900).queue(function(){
            $(this).find('.logo').addClass('op');
            $(this).dequeue();
        }).delay(150).queue(function(){
            $(this).addClass('off').dequeue();
        }).delay(200).queue(function(){
            $(this).find('ul').removeClass('off');
            $(this).find('.logo').removeClass('op off');
            $(this).dequeue();
        }).delay(200).queue(function(){
            $(this).removeClass('off').dequeue();
        }).delay(400).queue(function(){
            endAnimHome = true;
            animElts();
        });
    }

    if(body.hasClass('home')){
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

    }else{
        animElts();
    }

});
