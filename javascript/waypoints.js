jQuery( document ).ready(function($) {


	// Fader


	 $('.fader').waypoint(function(direction) {

	    if (direction === 'up') {
	      $(this.element).removeClass('fader-on');
	    }

    },{
      offset:'90%'
    });

    $('.fader').waypoint(function(direction) {

	    if (direction === 'down') {
	      $(this.element).addClass('fader-on');
	    }

    },{
      offset:'90%'
    });



    // H2

	$('h2').waypoint(function(direction) {

	    if (direction === 'down') {

			var tl = gsap.timeline(), 
			    mySplitText1 = new SplitText(this.element, {type:"chars"}), 
			    chars = mySplitText1.chars; //an array of all the divs that wrap each character

			//gsap.set("#quote", {perspective: 400});

			tl.from(chars, {duration: 1, opacity:0, y:30, ease:"back", stagger: 0.05}, "+=0");

	    }

	},{
	  offset:'90%'
	});






    $('.cta-panel-title').waypoint(function(direction) {

	    if (direction === 'down') {
	      
	    	// CTA Title

			var tl = gsap.timeline(), 
			    mySplitText1 = new SplitText(".cta-panel-title", {type:"words,chars"}), 
			    chars = mySplitText1.chars; //an array of all the divs that wrap each character

			//gsap.set("#quote", {perspective: 400});

			tl.from(chars, {duration: 1, opacity:0, y:30, ease:"back", stagger: 0.05}, "+=0");

	    }

    },{
      offset:'90%'
    });





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






	 

});