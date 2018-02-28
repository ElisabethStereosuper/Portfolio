const $ = require('jquery-slim');

require('gsap/CSSPlugin');
const TweenLite = require('gsap/TweenLite');

const throttle = require('./throttle.js');
window.requestAnimFrame = require('./requestAnimFrame.js');

module.exports = function( chart, isIE ){

    if( !chart.length ) return;

    let myScroll, windowHeight = $(window).height();
    const chartPath = chart.find('path');

    function animChart(){
        chart.addClass('done');

        TweenLite.set( chart.find('.puce'), {css: {className: '+=on'}, onComplete: function(){
            TweenLite.set( chart.find('.puce'), {css: {className: '+=final'}, delay: 0.34, onComplete: function(){
                TweenLite.set( chart.find('.paths'), {css: {className: '+=on'}, delay: 0.25, onComplete: function(){
                    chart.delay(500).queue(function(){
                        chart.find('.paths > g').each(function( i ){
                            var thisPath = $(this);
                            thisPath.delay(i*150).queue(function(){
                                thisPath.find('line + circle').addClass('on').end().dequeue();
                            }).delay(100).queue(function(){
                                thisPath.find('line').addClass('on').end().dequeue();
                            }).delay(100).queue(function(){
                                thisPath.find('.title').addClass('on').end().dequeue();
                            });
                        }).end().dequeue();
                    });
                }} );
            }} );
        }} );
    }

    function launchAnimChart(){
        myScroll = $(document).scrollTop();

        if( !chart.hasClass('done') && myScroll > chart.data('top') - windowHeight/1.7 ){
            animChart();
        }
    }


    chart.data('top', chart.offset().top).on('click', '.puce', function(){

        if( $(this).data('on') ){
            chartPath.attr('class', '');
            $(this).attr('class', 'puce final on').data('on', false);
        }else{
            chartPath.attr('class', 'on');
            $(this).attr('class', 'puce on').data('on', true);
        }

    });

    if( isIE ) return;

    launchAnimChart();

    $(document).on('scroll', throttle(function(){
        requestAnimFrame(launchAnimChart);
    }, 60));

    $(window).on('resize', throttle(function(){

        windowHeight = $(window).height();
        chart.data('top', chart.offset().top);

    }, 60));
}
