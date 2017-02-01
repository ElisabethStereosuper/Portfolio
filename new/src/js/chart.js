var $ = require('jquery-slim');

var throttle = require('./throttle.js');
window.requestAnimFrame = require('./requestAnimFrame.js');

module.exports = function(chart){
    var myScroll, windowHeight = $(window).height();
    var siblingPath, chartPath = chart.find('path');

    function animChart(){
        chart.queue(function(){
            $(this).find('.puce').addClass('on').end().dequeue();
        }).delay(340).queue(function(){
            $(this).find('.puce').addClass('final').end().dequeue();
        }).delay(250).queue(function(){
            $(this).find('.paths').addClass('on').end().dequeue();
        }).delay(350).queue(function(){
            $(this).find('.paths > g').each(function(i){
                var thisPath = $(this);
                thisPath.delay(i*150).queue(function(){
                    thisPath.find('line + circle').addClass('on').end().dequeue();
                }).delay(100).queue(function(){
                    thisPath.find('line').addClass('on').end().dequeue();
                }).delay(100).queue(function(){
                    thisPath.find('.title').addClass('on').end().dequeue();
                });;
            }).end().addClass('done').dequeue();
        });
    }

    function launchAnimChart(){
        myScroll = $(document).scrollTop();

        if(!chart.hasClass('done') && myScroll > chart.offset().top - windowHeight/1.7){
            animChart()
        }
    }
    launchAnimChart();

    chart.on('click', 'line + circle', function(){
        siblingPath = $(this).siblings('path');
        siblingPath.attr('class') === 'on' ? siblingPath.attr('class', '') : siblingPath.attr('class', 'on');
    }).on('click', '.puce', function(){
        if($(this).data('on')){
            chartPath.attr('class', '');
            $(this).attr('class', 'puce final on').data('on', false);
        }else{
            chartPath.attr('class', 'on');
            $(this).attr('class', 'puce on').data('on', true);
        }
    });

    $(document).on('scroll', throttle(function(){
        requestAnimFrame(launchAnimChart);
    }, 60));

    $(window).on('resize', throttle(function(){
        windowHeight = $(window).height();
    }, 60));
}
