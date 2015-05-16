//Code based on horizontal scrolling solution found by Andrew Valums at http://valums.com/scroll-menu-jquery/.
$(function(){	var div = $('div.notice'), ul = $('ul.notice_container'), ulPadding = 15;

				//Remove scrollbars
			    div.css({overflow: 'hidden'});

			    //When user moves mouse over menu...
			    div.mousemove(function(e){
								
					//Get width of container div
					var divWidth = div.width();

				    //Find the last li-item
			    	var lastLi = ul.find('li:last-child');

			    	//As items are loaded ul the width increases so it is recalculated each time
			    	var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;

					//Calculates the number of pixels (+/-) that should be scrolled to the left
    				var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
								
					//Scrolls the div to the left/right
    				div.scrollLeft(left);
    			});
			});
						
//Resets scrolling position on the event of window resizing.			
$(window).resize(function () {	var div = $('div.notice');
								div.scrollLeft(0);
							 });