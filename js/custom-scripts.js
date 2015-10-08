jQuery(document).ready(function($) {

var wheight = $(window).height(); 
	
	$('.fullheight').css('height', wheight);

	//adjust height of .fullheight elements on window resize
  	$(window).resize(function() {
   	wheight = $(window).height(); //get the height of the window
    	$('.fullheight').css('height', wheight); //set to window tallness  
  	});
  	
});