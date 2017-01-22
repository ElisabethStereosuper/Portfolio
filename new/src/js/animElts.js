var $ = require('./libs/jquery/dist/jquery.slim.min.js');

module.exports = function(elts){
    var delay = 150;

    elts.each(function(i){
        $(this).delay(delay*i).queue(function(){
            $(this).addClass('on').dequeue();
        }).delay(250).queue(function(){
            $(this).removeClass('anim-elt on').dequeue();
        });
        delay -= 1;
    });
}
