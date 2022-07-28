jQuery( document ).ready(function($) {



	//$(document).foundation();



	/* SPLIT TEXT

	var tl = gsap.timeline(), 
	    mySplitText1 = new SplitText(".hero-image-subtitle h1", {type:"words,chars"}), 
	    chars = mySplitText1.chars; //an array of all the divs that wrap each character

	tl.from(chars, {duration: 1, opacity:0, scale:0, y:50, ease:"back", stagger: 0.05}, "+=0");

	*/


    //////////////////////////////////////////////////////////////////////////

    $( '.unsetcookie' ).click(function() {
        Cookies.remove('notice-hidden');
        location.reload();
    });


    //////////////////////////////////////////////////////////////////////////


    // Tabbed Sections

    $('section.tabbed-section').first().addClass('tabbed-section-active');

    var tarID;

    $( '.tab-link' ).click(function(e) {
        
        e.preventDefault();

        $('.tab-link').removeClass('tab-link-active');
        $(this).addClass('tab-link-active');
    
        $( '.tabbed-section' ).removeClass('tabbed-section-active');
        tarID = $(this).attr('href');
        console.log(tarID);
        $(tarID).addClass('tabbed-section-active');
    
    });



    //////////////////////////////////////////////////////////////////////////


    $( '.notice-banner-close' ).click(function() {
    
        $( '.notice-banner' ).addClass('notice-banner-hide');

        Cookies.set('notice-hidden', 'hidden', { expires: 1 });

        setTimeout(function() {
            var headHeight = $('#header').height(); 
            $('.header-rescue').css('height', headHeight+'px');
        }, 250);
    
    });



    // Search

    $("form#searchform").keypress(function(e) {
      //Enter key
      if (e.which == 13) {
        return false;
      }
    });

    $( '.search-button' ).click(function() {
    
        $( '.search-overlay' ).addClass('search-overlay-block');

        setTimeout(function() {
            $( '.search-overlay' ).addClass('search-overlay-opacity');
        }, 10);
    
    });

    $( '.search-close' ).click(function() {
    
        $( '.search-overlay' ).removeClass('search-overlay-opacity');

        setTimeout(function() {
            $( '.search-overlay' ).removeClass('search-overlay-block');
        }, 300);

    
    });

	
	
	//////////////////////////////////////////////////////////////////////////
	

	// Hash Link Activate
	
	window.onload = function() {
		if(location.hash) { $(location.hash).trigger('click'); }
	};
	
	 
	//////////////////////////////////////////////////////////////////////////
	
	
	// FANCYBOX

	$(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
	
	 
	//////////////////////////////////////////////////////////////////////////
    
    
    // SCROLL TO ANCHOR

    $('.anchorLink').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top -115
	    }, 800);
	    return false;
	});

	function scrollToElement(ele) {
	    $(window).scrollTop(ele.offset().top).scrollLeft(ele.offset().left);
	}


	//////////////////////////////////////////////////////////////////////////


	// Hide Header on on scroll down

    /*

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta) {
            return;
        }
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down



        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('#header').addClass('header-reveal');
            }
        }
        
        lastScrollTop = st;
    }

    */

    var position = $(window).scrollTop(); 

    // should start at 0

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > position) {
             $('#header').removeClass('header-reveal');
        } else {
             $('#header').addClass('header-reveal');
        }
        position = scroll;
    });
	
	 
	 
	//////////////////////////////////////////////////////////////////////////


	$( '.mobile-menu-button' ).click(function() {
    
        $( '.mobile-menu' ).addClass('mobile-menu-on');
        //$( '.hamburger' ).toggleClass('open');
        //$( '#contact' ).removeClass('contact-active');
        //$( '.mobile-menu-button' ).removeClass('mobile-menu-button-back');
    
    });


    $( '.mm-close' ).click(function() {
    
        $( '.mobile-menu' ).removeClass('mobile-menu-on');
        //$( '.hamburger' ).toggleClass('open');
        //$( '#contact' ).removeClass('contact-active');
        //$( '.mobile-menu-button' ).removeClass('mobile-menu-button-back');
    
    });
	 
	 
	//////////////////////////////////////////////////////////////////////////


	// Waypoints



	
	// Header

    $('.header-fixer').waypoint(function(direction) {

        if (direction === 'down') {
            $('#header').addClass('header-scrolled');
            $('.mobile-menu-button').addClass('mmb-scrolled');
        }

    },{
      offset:'-50px'
    });

    $('.header-fixer').waypoint(function(direction) {

        if (direction === 'up') {
            $('#header').removeClass('header-scrolled').removeClass('header-reveal');
            $('.mobile-menu-button').removeClass('mmb-scrolled');
        }

    },{
      offset:'-5px'
    });



    // Fader
    
    $('.fader').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('.fader').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, y:0, scale:1});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('.fader').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9});
    
        }
    
    },{
      offset:'100%'
    });




    // H2
    
    $('h2').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('h2').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, y:0, scale:1});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('h2').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9});
    
        }
    
    },{
      offset:'100%'
    });
    



    // H3
    
    $('h3').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('h3').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, y:0});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('h3').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30});
    
        }
    
    },{
      offset:'100%'
    });




    // P
    
    $('p').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('p').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, y:0});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('p').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30});
    
        }
    
    },{
      offset:'100%'
    });




    // Button
    
    $('a.button').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('a.button').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9})
    		.to(this.element, 0.5, {delay: 0.3, opacity:10, y:0, scale:1});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('a.button').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, y:30, scale:0.9});
    
        }
    
    },{
      offset:'100%'
    });
    
    


    // .wp-block-button
    
    $('.wp-block-button').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('.wp-block-button').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, x:0});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('.wp-block-button').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'100%'
    });
    



    // Block Image
    
    $('.wp-block-image').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('.wp-block-image').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, x:0});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('.wp-block-image').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'100%'
    });
    



    // Block Embed
    
    $('.wp-block-embed').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('.wp-block-embed').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30})
    		.to(this.element, 0.5, {delay: 0.3, opacity:1, x:0});
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('.wp-block-embed').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		gsap.timeline().to(this.element, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'100%'
    });
    



    // ul > li
    
    $('.page-content ul').waypoint(function(direction) {
    
        if (direction === 'down') {
    
        	var ulVar = this.element.querySelectorAll("li");
    		gsap.timeline().to(ulVar, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'110%'
    });
    
    
    $('.page-content ul').waypoint(function(direction) {
    
        if (direction === 'down') {
    
    		var ulVar = this.element.querySelectorAll("li");
    		gsap.timeline().to(ulVar, 0, {opacity:0, x:-30})
    		.staggerTo(ulVar, 0.5, {delay: 0.3, opacity:1, x:0}, 0.05);
    
        }
    
    },{
      offset:'100%'
    });
    
    
    $('.page-content ul').waypoint(function(direction) {
    
        if (direction === 'up') {
    
    		var ulVar = this.element.querySelectorAll("li");
    		gsap.timeline().to(ulVar, 0, {opacity:0, x:-30});
    
        }
    
    },{
      offset:'100%'
    });




    // Footer

	$('.footer-wrap').waypoint(function(direction) {

	    if (direction === 'down') {

			gsap.timeline()
			.to('.footer-left', 0, {opacity:0, x:-30})
			.to('.footer-right', 0, {opacity:0, x:30})
			.to('.bottom-bar-wrap', 0, {opacity:0, y:30});

	    }

	},{
	  offset:'110%'
	});

	$('.footer-wrap').waypoint(function(direction) {

	    if (direction === 'down') {

			gsap.timeline()
			.to('.footer-left', 0, {opacity:0, x:-30})
			.to('.footer-right', 0, {opacity:0, x:30})
			.to('.bottom-bar-wrap', 0, {opacity:0, y:30})

			gsap.timeline().to('.footer-left', 0.3, {delay: 0.2, opacity:1, x:0});
			gsap.timeline().to('.footer-right', 0.3, {delay: 0.35, opacity:1, x:0});
			gsap.timeline().to('.bottom-bar-wrap', 0.3, {delay: 0.275, opacity:1, y:0});

	    }

	},{
	  offset:'100%'
	});

	$('.footer-wrap').waypoint(function(direction) {

	    if (direction === 'up') {

			gsap.timeline()
			.to('.footer-left', 0, {opacity:0, x:-30})
			.to('.footer-right', 0, {opacity:0, x:30})
			.to('.bottom-bar-wrap', 0, {opacity:0, y:30});

	    }

	},{
	  offset:'100%'
	});




	// Standard Waypoints


    $('.header-fixer').waypoint(function(direction) {

    if (direction === 'up') {
      $('#header').addClass('hw-top').removeClass('hw-crunch');
      $('.mobile-menu-button').addClass('mmb-down');
    }

    },{
      offset:'-100px'
    });



    $('.header-fixer').waypoint(function(direction) {

    if (direction === 'up') {
      $('#header').addClass('hw-top').removeClass('hw-crunch');
      $('.mobile-menu-button').addClass('mmb-down');
    }

    },{
      offset:'-5px'
    });



    $('.hero-image-wrap').waypoint(function(direction) {

    if (direction === 'up') {
      $('.mobile-menu-button').removeClass('mmb-bg');
    }

    },{
      offset:'-100%'
    });

    $('.hero-image-wrap').waypoint(function(direction) {

    if (direction === 'down') {
      $('.mobile-menu-button').addClass('mmb-bg');
    }

    },{
      offset:'-100%'
    });
	 
	 
	//////////////////////////////////////////////////////////////////////////


	// Skrollr Init

	if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){

	    skrollr.init({
	    	forceHeight: false,
	    	smoothScrolling: true,
	    	smoothScrollingDuration: 1000,
			edgeStrategy: 'ease',
	    	easing: {
		        //This easing will sure drive you crazy
		        wtf: Math.random,
		        outCubic: function(p) {
				  return 0*(p*p*p*p*p) + 0*(p*p*p*p) + 1*(p*p*p) - 3*(p*p) + 3*p;
				}
		    }
	    	});

	}
	
	 
	//////////////////////////////////////////////////////////////////////////


	// Slick
    
    
    /*

    $('.home-area').slick({
	  arrows: false,
	  dots: false,
	  infinite: true,
	  speed: 2000,
	  fade: true,
	  autoplay: true,
	  autoplaySpeed: 5500
	});

	*/
	 
	 
	//////////////////////////////////////////////////////////////////////////
	 
	 

});