'use strict';

var $ = require('./libs/jquery/dist/jquery.slim.min.js');
window.requestAnimFrame = require('./requestAnimFrame.js');


$(function(){

    var body = $('body');
    var header = $('#header');
    var windowWidth = $(window).outerWidth(), windowHeight = $(window).height();
    var headerTimer;
    var myScroll;
    var siblingPath, chart = $('#chart'), chartPath = chart.find('path');



    // isMobile.any ? body.addClass('is-mobile') : body.addClass('is-desktop');

    $('#portfolio').on('mouseenter focusin', 'a', function(){
        $(this).parents('li').siblings().addClass('off');
    }).on('mouseleave focusout', 'a', function(){
        $(this).parents('li').siblings().removeClass('off');
    });

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

        myScroll = $(document).scrollTop();

        if(!chart.length || chart.hasClass('done')) return;

        if(myScroll > chart.offset().top - windowHeight/1.5){
            chart.queue(function(){
                $(this).find('.puce').addClass('on');
                $(this).dequeue();
            }).delay(340).queue(function(){
                $(this).find('.puce').addClass('final');
                $(this).dequeue();
            }).delay(250).queue(function(){
                $(this).find('.paths').addClass('on');
                $(this).dequeue();
            }).delay(350).queue(function(){
                $(this).find('.paths > g').each(function(i){
                    var thisPath = $(this);
                    thisPath.delay(i*150).queue(function(){
                        thisPath.find('line + circle').addClass('on');
                        thisPath.dequeue();
                    }).delay(100).queue(function(){
                        thisPath.find('line').addClass('on');
                        thisPath.dequeue();
                    }).delay(100).queue(function(){
                        thisPath.find('.title').addClass('on');
                        thisPath.dequeue();
                    });;
                });
                $(this).addClass('done').dequeue();
            });
        }

    });

});

$(window).on('load', function(){

    var body = $('body'), header = $('#header');
    var endAnimHome = false;

    function animElts(){
        var delay = 150;

        $('.anim-elt').each(function(i){
            $(this).delay(delay*i).queue(function(){
                $(this).addClass('on').dequeue();
            }).delay(250).queue(function(){
                $(this).removeClass('anim-elt on').dequeue();
            });
            delay -= 1;
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

    function mapInit(){
        var mapOptions = {
            center: new google.maps.LatLng(48.5, -25),
            zoom: 3,
            minZoom: 1,
            scrollwheel: false,
            //zoomControl: true,
            mapTypeControl: false,
            //scaleControl: true,
            panControl: false,
            streetViewControl: false,
            styles: [{'featureType':'administrative','elementType':'geometry','stylers':[{'visibility': 'off'}]},{'featureType':'administrative.country','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.province','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.locality','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.neighborhood','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative.land_parcel','elementType':'geometry.stroke','stylers':[{'visibility':'on'}]},{'featureType':'administrative','elementType':'labels.text.fill','stylers':[{'color':'#444444'}]},{'featureType':'administrative.country','elementType':'geometry.fill','stylers':[{'color':'#e7d5ba'}]},{'featureType':'administrative.locality','elementType':'labels.text.fill','stylers':[{'color':'#615439'}]},{'featureType':'administrative.land_parcel','elementType':'geometry.fill','stylers':[{'color':'#e7d5ba'}]},{'featureType':'landscape','elementType':'all','stylers':[{'color':'#f2f2f2'}]},{'featureType':'landscape','elementType':'geometry','stylers':[{'visibility':'on'}]},{'featureType':'landscape','elementType':'geometry.fill','stylers':[{'color':'#e7d5ba'}]},{'featureType':'landscape.man_made','elementType':'geometry.fill','stylers':[{'color':'#eee4d4'},{'visibility':'on'}]},{'featureType':'landscape.man_made','elementType':'geometry.stroke','stylers':[{'color':'#eee4d4'}]},{'featureType':'landscape.man_made','elementType':'labels.text.fill','stylers':[{'color':'#eee4d4'}]},{'featureType':'landscape.natural','elementType':'geometry.fill','stylers':[{'visibility':'on'}]},{'featureType':'landscape.natural.terrain','elementType':'geometry.fill','stylers':[{'saturation':'0'}]},{'featureType':'landscape.natural.terrain','elementType':'labels.text.fill','stylers':[{'color':'#eee4d4'}]},{'featureType':'poi','elementType':'all','stylers':[{'visibility':'off'}]},{'featureType':'road','elementType':'all','stylers':[{'saturation':-100},{'lightness':45}]},{'featureType':'road','elementType':'geometry.fill','stylers':[{'color':'#fcefd2'}]},{'featureType':'road.highway','elementType':'all','stylers':[{'visibility':'simplified'}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#fcefd2'}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#fcefd2'}]},{'featureType':'road.arterial','elementType':'geometry.fill','stylers':[{'hue':'#ffb000'}]},{'featureType':'road.arterial','elementType':'labels.icon','stylers':[{'visibility':'off'}]},{'featureType':'road.local','elementType':'geometry.stroke','stylers':[{'color':'#fcefd2'}]},{'featureType':'transit','elementType':'all','stylers':[{'visibility':'off'}]},{'featureType':'water','elementType':'all','stylers':[{'color':'#7dacbc'},{'visibility':'on'}]}]
        },
        mapElement = $('#map')[0],
        map = new google.maps.Map(mapElement, mapOptions),
        icon = {
            url: 'layoutImg/pin.svg',
            scaledSize: new google.maps.Size(25, 25)
        },
        icon2 = {
            url: 'layoutImg/pin2.svg',
            scaledSize: new google.maps.Size(25, 25)
        },
        loc = [
            ['Montreal', 45.5086699, -73.55399249999999, icon],
            //['Ottawa', 45.4215296, -75.69719309999999, icon],
            ['Québec', 46.8032826, -71.242796, icon],
            ['Gatineau', 45.4765446, -75.7012723, icon2],
            ['Madrid', 40.4167754, -3.7037902, icon],
            ['Toledo', 39.8628471, -4.0378849, icon],
            ['Lisboa', 38.7222524, -9.1393366, icon],
            ['Barcelona', 41.3850639, 2.1734035, icon],
            ['Paris', 48.856614, 2.3522219, icon],
            ['Poitiers', 46.58022400000001, 0.340375, icon2],
            ['Limoges', 45.83361900000001, 1.261105, icon2],
            ['Nantes', 47.218371, -1.553621, icon2],
            ['Marseille', 43.296482, 5.36978, icon],
            ['Bordeaux', 44.837789, -0.57918, icon],
            ['Pointe du Raz', 48.039989, -4.740394999999999, icon],
            ['Amsterdam', 52.3702157, 4.895167900000001, icon],
            ['London', 51.5073509, -0.1277583, icon],
            ['Praha', 50.0755381, 14.4378005, icon],
            ['Athenes', 37.983917, 23.7293599, icon],
            ['Oslo', 59.910481, 10.723311, icon],
            ['Bergen', 60.3896719, 5.2876997, icon],
            ['Stavanger', 58.9665138, 5.7040474, icon],
            ['Berlin', 52.5001056, 13.3409657, icon],
            ['Bruxelles', 50.8550625, 4.3053498, icon]
        ],
        i = 0,
        nbLocs = loc.length,
        marker;
        //popin = new google.maps.InfoWindow();

        for(i; i<nbLocs; i++){
            marker = new google.maps.Marker({
                icon: loc[i][3],
                position: new google.maps.LatLng(loc[i][1], loc[i][2]),
                map: map,
                title: loc[i][0],
                cursor: 'crosshair'
            });

            // google.maps.event.addListener(marker, 'click', function(){
            //     popin.setContent(this.title);
            //     popin.open(map, this);
            // });
        }
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

    if($('#map').length){
        mapInit();
    }

});
