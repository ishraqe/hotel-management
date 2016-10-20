// JavaScript for themezinho
(function($) {
$(document).ready(function() {
	"use strict";
	
	
	
	// FANCYBOX
	$(".fancybox").fancybox({
		helpers: {
		overlay: {
		  locked: false
			}
		  }
	});
	
	
	// MOBILE MENU
	$('.toggle-menu').jPushMenu({closeOnClickLink: true});
	$('.dropdown-toggle').dropdown();
	
	// DATEPICKER
	

	//  var c=	$('#Check-In').datepicker({
	// 	orientation: 'left bottom'
			

	// });
	//  console.log(c);
	$(function(){
			var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
		 var bla = $('#dpd1').val();
		
		var checkin = $('#dpd1').datepicker({
		  onRender: function(date) {
		    return date.valueOf() > now.valueOf() ? 'disabled' : '';
		  }
		}).on('changeDate', function(ev) {
		  if (ev.date.valueOf() > checkout.date.valueOf()) {
		    var newDate = new Date(ev.date)
		    newDate.setDate(newDate.getDate() + 1);
		    checkout.setValue(newDate);
		  }
		  checkin.hide();
		  $('#dpd2')[0].focus();
		}).data('datepicker');
		var checkout = $('#dpd2').datepicker({
		  onRender: function(date) {
		    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
		  }
		}).on('changeDate', function(ev) {
		  checkout.hide();
		}).data('datepicker');



	});
			
		     
		  
	// PRICE RANGE
		$(function() {
			$( "#slider-range" ).slider({
			  range: true,
			  min: 0,
			  max: 500,
			  values: [ 75, 300 ],
			  slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			  }
			});
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
		  });
	
	
	// STELLAR PARALLAX
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 0,
			responsive:true
		});
	
	
	// READ MORE
		$('.readmore-btn').on('click', function(e) {
			$(this).parent().find(".readmore-box").toggleClass("show-me");
		});
	
	
	// SEARCH BOX
		$('.search-btn').on('click', function(e) {
		$(".search-box").toggleClass("show-me");
		});
		
		$('.close-btn').on('click', function(e) {
		$(".search-box").removeClass("show-me");
		});
	
	
	// BG SLIDER
	$(".home-slider-header").backgroundCycle({
		imageUrls: [
       		'images/hero1.jpg',
           'images/hero2.jpg',
           'images/hero3.jpg'
           ],
           fadeSpeed: 2000,
           duration: 5000,
           backgroundSize: SCALING_MODE_COVER
	});
  
	
	
	
	// TESTIMONIALS
	$('.testimonials-carousel').owlCarousel({
		center: true,
       items:3,
		loop:true,
		margin:60,
		nav:true,
    responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 20,
				nav:false,
			},
			600:{
				items:1,
				nav:false,
			},
			1000:{
				items:3,
			}
		}
		});
	
	
	// HISTORY
	$('.history-carousel').owlCarousel({
		center: true,
       items:2,
       loop:true,
		stagePadding: 104,
		nav:true,
       margin:60,
	   responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 20,
			},
			600:{
				items:1,
			},
			1000:{
				items:2,
			}
		}
		});
	
	
	// PARTNERS
	$('.partners-carousel').owlCarousel({
		items:6,
       loop:true,
    	nav: true,
    	autoPlay : 3000,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
			},
			600:{
				items:4,
			},
			1000:{
				items:6,
			}
		}
		});
	
	
	// TEAM
	$('.team-carousel').owlCarousel({
		dot: true,
		autoPlay : 3000,
		loop:true,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:2,
			},
			1000:{
				items:4,
				loop:false
			}
		}
		});
	
	
	
	
	// TESTIMONIALS CAROUSEL
	$('.testimonials-carousel-new').owlCarousel({
		items:1,
		nav:false,
		loop:true,
		dot: true,
		autoPlay : 3000,
		responsive:{
        479:{
            items:1
        },
        768:{
            items:1
        },
		989:{
            items:2
        }
    }
    });
	
	
	
	// HOME ROOM
	$('.home-room-carousel').owlCarousel({
    	items: 1,
    	nav: false, 
    	loop: false,
		dots:true
	});


	// POPULAR ROOMS
	$('.popular-rooms-carousel').owlCarousel({
    	items: 1,
    	nav: true, 
    	loop: false,
		dots:false,
		loop:true,
		autoPlay : 3000
	});


	// OUR ROOMS
	$('.our-rooms-carousel').owlCarousel({
    	stagePadding: 54,
    	loop:true,
    	margin:15,
    	nav:true,
    	responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        },
		1170:{
            items:5
        }
    }
	});
	
	
	// ISOTOPE
	$(window).load(function(){
		var $container = $('.gallery-grid');
		$container.isotope({
			filter: '*',
			percentPosition: true,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		}
	});
	 
	 
	// FILTER
	$('.filter a').click(function(){
	$('.filter .current').removeClass('current');
		$(this).addClass('current');
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
			}
	});
		return false;
	});
	});
	
  	}); // END DOCUMENT READY
	
	
	// CLOCK COUNTER
	var clock;
		clock = $('.clock').FlipClock({
		clockFace: 'DailyCounter',
		autoStart: false,
		callbacks: {
			stop: function() {
		    	$('.message').html('The clock has stopped!')
		       }
			}
		});    
		clock.setTime(220880);
		clock.setCountdown(true);
		clock.start();
		
	
	
	// QTY INPUT	
	$('.qtyplus, .qtyplus2').click(function(e){
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        if (!isNaN(currentVal)) {
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            $('input[name='+fieldName+']').val(0);
        }
    });
	
    $(".qtyminus, .qtyminus2").click(function(e) {
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            $('input[name='+fieldName+']').val(0);
        }
    });
	
	
	
	// COUNTER EFFECT
	var n = document.getElementById("process");
		if (n == null) {
	} 
	else {
	
	var lastWasLower = false;
		$(document).scroll(function(){
		
		var p = $( "#process" );
		var position = p.position();
		var position2 = position.top;
	
		if ($(document).scrollTop() > position2-300){
		if (!lastWasLower)
			$('#1').html('896');
			$('#2').html('45');
			$('#3').html('599');
			$('#4').html('260');
	
		lastWasLower = true;
			} else {
		lastWasLower = false;
		}
		});		
	};
	
	
})(jQuery);