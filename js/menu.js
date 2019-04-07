// JavaScript Document


// For Menu Slide
$(document).ready (main);
	var mymenu = 1;
	function main (argumnet) {
		$('.menu').click(function() {
            if (mymenu == 1) {
				
				$('nav').animate({
					left:'0'
				});
				mymenu = 0;
			}
			else {
				mymenu = 1;
				$('nav').animate({
					left:'-100%'
				});
			}
        });
	}
	
	
	
// For Accordian Dropdown When Responsive

