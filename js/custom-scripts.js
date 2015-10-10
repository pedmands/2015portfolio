jQuery(document).ready(function($) {

var wheight = $(window).height(); 
	
$('.fullheight').css('height', wheight);

//adjust height of .fullheight elements on window resize
$(window).resize(function() {
	wheight = $(window).height(); //get the height of the window
	$('.fullheight').css('height', wheight); //set to window tallness 
  navHover();
});

var breakpoint = 745;

// Superfish Setup
var sf = $('ul.nav-menu');

if($(document).width() >= breakpoint){
    sf.superfish({
        delay: 200,
        speed: 'fast'
    });
}

$(window).resize(function(){
    if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')){
        sf.superfish({
            delay: 200,
            speed: 'fast'
        });
    } else if($(document).width() < breakpoint) {
        sf.superfish('destroy');
    }
}); // End Superfish Setup

// Nav Menu
var navHover = function(){
    $('.main-navigation').mouseover(function (){
      if ( $(document).width() >= 745 ){
        $('.nav-logo').addClass('nav-logo-show');
        $(this).css({'padding-top':'30px'});
      }
    }).mouseleave(function(){
      $('.nav-logo').removeClass('nav-logo-show');
      $(this).css({'padding-top':'0px'});
    });
  
}// Nav Hover

navHover();

// End Nav Menu
   
  	
});