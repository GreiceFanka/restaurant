$(function(e){$('#home').click(function(e){
    $('html,body').animate({scrolltop:$('#home').offset().top},800);
                });
    $('#menu').click(function(e){
            $('html,body').animate({scrolltop:$('#menu').offset().top},800);
                });
    $('#contatto').click(function(e){
            $('html,body').animate({scrolltop:$('#contatto').offset().top},800);
                });
    });

    $('.navbar-nav li a').click(function() {
        if (!$(this).parent().hasClass('dropdown')) {
            $('.navbar-collapse').collapse('hide'); 
            }
    });


var pos = 0;
var speed = 250;
var str = document.getElementById('welcome').innerText;

document.getElementById('welcome').innerText = '';

function write(){
    if(pos < str.length){
      document.getElementById('welcome').innerText += str.charAt(pos);pos++;
        setTimeout(write,speed);
    } else {
       setTimeout(speed) 
    }
}
setTimeout(write,speed);
