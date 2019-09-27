$(document).ready(function($) {
	$(".youtube-demo").simpleOverlay({
	  "insertBy": "embed",
	  "attribute": "data-youtube"
	});
	// owl-carousel 
	$('.owl-carousel.owl-img').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    dots:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:3
	        }
	    }
	});	
	// owl-carousel-feedback
	$('.owl-carousel.owl-carousel-fb').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:false,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:3
	        }
	    }
	});	
	// slider
	$('.owl-carousel.owl-slider').owlCarousel({
	    loop:true,
	    margin:0,
	    dots:true,
	    nav:false,
	    animateOut: 'fadeOut',
	    autoplay: true,
	    autoplayTimeout:5000,
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
	    }
	})

	//owl-partner
	$('.owl-carousel.owl-partner').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    dots:false,
	    responsive:{
	        0:{
	            items:2,
	            nav:false,
	   			dots:true
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:6
	        }
	    }
	});	

	//popup lightgallery
	$(".text__icon").click(function() {
		$(".hover-img").lightGallery({
			thumbnail: true,
			selector: ".text__icon"
		}); 
	});
});

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
	$(window).on('load', function(event) {
		$('body').removeClass('preloading');
	    $('.load').delay(1200).fadeOut('fast');
	    $('.loader').delay(500).fadeOut('fast');
	});
	// hide #go-top first
    $("#go-top").hide();
    // fade in #go-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 90) {
                $('#go-top').fadeIn();
            } else {
                $('#go-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#go-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
    // text-slider
   	var typed = new Typed('#typist-element', {
	    strings: ["BaaS", "Cloud", "Backup", "Services"],
	    typeSpeed: 150,
	    loop:true,
	    showCursor: false,
    });

    // popup form page hoptac
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }

});