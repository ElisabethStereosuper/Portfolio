var $ = require('jquery-slim');

module.exports = function(elts){
    var delay = 100;

    elts.each(function(i){
        $(this).delay(delay*i).queue(function(){
            $(this).addClass('on').dequeue();
        }).delay(400).queue(function(){
            $(this).removeClass('anim-elt on').dequeue();
        });
        delay -= 1;
    });
}
