jQuery(document).ready((function(e){e(".fader").waypoint((function(t){"up"===t&&e(this.element).removeClass("fader-on")}),{offset:"90%"}),e(".fader").waypoint((function(t){"down"===t&&e(this.element).addClass("fader-on")}),{offset:"90%"}),e("h2").waypoint((function(e){if("down"===e){var t=gsap.timeline(),a,o=new SplitText(this.element,{type:"chars"}).chars;t.from(o,{duration:1,opacity:0,y:30,ease:"back",stagger:.05},"+=0")}}),{offset:"90%"}),e(".cta-panel-title").waypoint((function(e){if("down"===e){var t=gsap.timeline(),a,o=new SplitText(".cta-panel-title",{type:"words,chars"}).chars;t.from(o,{duration:1,opacity:0,y:30,ease:"back",stagger:.05},"+=0")}}),{offset:"90%"}),e(".header-fixer").waypoint((function(t){"up"===t&&(e("#header").addClass("hw-top").removeClass("hw-crunch"),e(".mobile-menu-button").addClass("mmb-down"))}),{offset:"-100px"}),e(".header-fixer").waypoint((function(t){"up"===t&&(e("#header").addClass("hw-top").removeClass("hw-crunch"),e(".mobile-menu-button").addClass("mmb-down"))}),{offset:"-5px"}),e(".hero-image-wrap").waypoint((function(t){"up"===t&&e(".mobile-menu-button").removeClass("mmb-bg")}),{offset:"-100%"}),e(".hero-image-wrap").waypoint((function(t){"down"===t&&e(".mobile-menu-button").addClass("mmb-bg")}),{offset:"-100%"})}));