(function($) { "use strict";
	
	//Particle js
	   /*----- Particles JS Config -----*/
    var $particles = $('#particles-js');
    if($particles.length) {

        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 50,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 4,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "push"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
			"backgroundMode": {
				"zIndex": 100, // any value >= 0 is good
				/* if you want elements above particles 
				   just set a bigger z-index in your css */
				"enable": false
			  },
            "retina_detect": false
        });

    }
	
	// acordian FAQ
	$('.head').click(function() {
	  $(this).toggleClass('active');
	  $(this).parent().find('.arrow').toggleClass('arrow-animate');
	  $(this).parent().find('.content').slideToggle(280);
	});
	
	// parallax
	$(window).scroll(function() {
			var scrollDistance = $(window).scrollTop();

			// Show/hide menu on scroll
			//if (scrollDistance >= 850) {
			//		$('nav').fadeIn("fast");
			//} else {
			//		$('nav').fadeOut("fast");
			//}
		
			// Assign active class to nav links while scolling
			$('.section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
					$('.menu li.active').removeClass('active');
					$('.menu li').eq(i).addClass('active');
				}
			});
	}).scroll();
	
	//Menu Sticky
	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});		
	
	//Funfact
	$('.funfact-title').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
	
	//Serch
	$('.header').on('click', '.search-toggle', function(e) {
	  var selector = $(this).data('selector');

	  $(selector).toggleClass('show').find('.search-input').focus();
	  $(this).toggleClass('active');

	  e.preventDefault();          
	});
	
	
	//Menu On Hover
		
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
	
	$('.dropdown-submenu a').click(function() {

       $('.dropdown-submenu').toggleClass('show');
		return false;
	});
		
	// Scroll to down anchor                
	$(function() {
		$('.scroll-down').click (function() {
		  $('html, body').animate({scrollTop: $('section.service').offset().top }, 'slow');
		  return false;
		});
	});
	
	/* ---------------------------------------------- /*
	* Scroll top
	/* ---------------------------------------------- */

	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.page-scroll-up').fadeIn();
		} else {
			jQuery('.page-scroll-up').fadeOut();
		}
	});
	
	jQuery('.page-scroll-up').click(function () {
		jQuery("html, body").animate({
			scrollTop: 0
		}, 700);
		return false;
	});
	
	//Owl Carousel
	$(document).ready(function() {
		
		 // Loader
			setTimeout(function() {
				$('body').addClass('loaded');
			}, 3500);
				
		
		$("#owl-main").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:0, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 1,
			dots: true,
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-portfolio").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 3,
			dots: false,
			 responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});

		$("#owl-post-slider").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:30, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 3,
			dots: false,
			 responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:4
				}
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-portfolio-single").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			//autoHeight : false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 1,
			dots: false,
			 responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-portfolio-realted").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:false, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 3,
			dots: false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			},
			//navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-product").owlCarousel({
			
			navigation : true, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 3,
			dots: true,
			 responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:4
				}
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-testimonial").owlCarousel({
	 
			navigation : true, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 2,
			dots: true,
			responsive:{
				100:{ items:1 },
				480:{ items:1 },
				768:{ items:2 },
				1000:{ items:2 }
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-service-single").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:true, // loop is true up to 1199px screen.
			nav:false, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 2,
			dots: true,
			responsive:{
				100:{ items:1 },
				480:{ items:1 },
				768:{ items:1 },
				1000:{ items:1 }
			},
			//navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});
		
		$("#owl-client").owlCarousel({
	 
			navigation : false, // Show next and prev buttons	
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 800,			
			singleItem:true,
			loop:false, // loop is true up to 1199px screen.
			nav:false, // is true across all sizes
			margin:15, // margin 10px till 960 breakpoint
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 4,
			dots: true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:4
				}
			},
			navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"]
		
		});

		// News
		$('.news-ticker').owlCarousel({
			loop: true,
			items: 1,
			dots: false,
			animateOut: 'animate__fadeOutDown',
			animateIn: 'animate__fadeInUp',
			autoplay: true,
			autoplayTimeout: 3000, //Set AutoPlay to 4 seconds
			autoplayHoverPause: true,
			nav: true,
			navText: [
				"<i class='fas fa-chevron-left'></i>",
				"<i class='fas fa-chevron-right'></i>"
			]
		});
		//heart
		$(function() {
			$(".heart").on("click", function() {
				$(this).toggleClass("is-active");
			});
		});
		//Theme toggle icon
		$('.dark-switch').click(function() {
			$(this).css({"opacity": 0, "pointer-events": "none"}); 
			$('.light-switch').css({"opacity": 1, "pointer-events": "auto"}); 
			$('body').addClass('dark');
			$('.dark-brand').show();
			$('.light-brand').hide();
		});
		$('.light-switch').click(function() {
			$(this).css({"opacity": 0, "pointer-events": "none"});
			$('.dark-switch').css({"opacity": 1, "pointer-events": "auto"}); 
			$('body').removeClass('dark');
			$('.dark-brand').hide();
			$('.light-brand').show(); 
		});
		
		
	});
	
 })(jQuery);

