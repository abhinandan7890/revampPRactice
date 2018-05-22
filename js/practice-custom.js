//jQuery IIFE
(function($){
  //jquery "plugin" function
  $.hoverSlider = function($sliderWrapper, settings) {
    var $sliderWrapper = $($sliderWrapper),
        $slider = $sliderWrapper.children("div"),
        $slides = $slider.children("div"),
        $wrapperWidth = $sliderWrapper.outerWidth(),
        $sliderWidth = 0,
        $tallestElementHeight = 0;

    //mouse watchers
    var watchers = function() {
      //set our timeout vars
      var mouseMoveTimeout, mouseOutTimeout;

      //mousemove watcher -- the gutz of the plugin
      $sliderWrapper.mousemove(function(event) {
        clearTimeout(mouseMoveTimeout);
        mouseMoveTimeout = setTimeout(function() {
          /*---------------------------------------
          Padding percentage:
          Take the percent we defined, turn it into a decimal, and divide it by two to share it on both sides
          Multiply it by the wrapper width to find the percent of the wrapper width

          Left Val: 
          Find the mouse position, less the padding and offset
          Divide it by the wrapper width less the percentage, doubled. 
          Then make it negative to move in the opposite direction, and multiply it by the actual slider width to get our px val
          ---------------------------------------*/
          var paddingPercentage = ((parseInt(settings.mouseMovePaddingPercent) / Math.pow(10, 2)) / 2) * $wrapperWidth,
              leftVal = $sliderWidth * (((event.pageX - ($sliderWrapper.offset().left + paddingPercentage)) / ($wrapperWidth - (paddingPercentage * 2))) * -1);

          //if we go less than zero, or greater than the slider width, cap them out
          if(leftVal * -1 <= 0) {
            leftVal = 0;
          } else if(leftVal * -1 >= $sliderWidth) {
            leftVal = $sliderWidth * -1;
          }

          //old way; its jittery
          //$slider.css({ left: leftVal + "px)" });
          
          //new way; not jittery; hardware accelerated, and hella prefixed
          $slider.css({ 
            '-webkit-transform' : 'translate3d(' + leftVal + 'px, 0, 0)',
            '-moz-transform'    : 'translate3d(' + leftVal + 'px, 0, 0)',
            '-ms-transform'     : 'translate3d(' + leftVal + 'px, 0, 0)',
            '-o-transform'      : 'translate3d(' + leftVal + 'px, 0, 0)',
            'transform'         : 'translate3d(' + leftVal + 'px, 0, 0)'
          });
        }, 10);
      })

      //mouseout
      //only call if we send the parameter
      if(settings.resetOnMouseout) {
        $sliderWrapper.mouseout(function(event) {
          clearTimeout(mouseOutTimeout);
          mouseOutTimeout = setTimeout(function() {
            //reset the position on mouseout
            $slider.css({ 
            '-webkit-transform' : 'translate3d(0, 0, 0)',
            '-moz-transform'    : 'translate3d(0, 0, 0)',
            '-ms-transform'     : 'translate3d(0, 0, 0)',
            '-o-transform'      : 'translate3d(0, 0, 0)',
            'transform'         : 'translate3d(0, 0, 0)'
          });
          }, 10);
        }) 
      };

      $(window).resize(function() {
        //re-set the widths
        $wrapperWidth = $sliderWrapper.outerWidth();
        $sliderWidth = $slider.width() - $wrapperWidth;
      });
    };

    //INITIALIZE FUNCTION
    var init = function() {
      //first we find out the height of the slider 
      //based on the tallest slide
      $.each($slides, function(i, slide) {
        if($(slide).outerHeight() > $tallestElementHeight) {
          $tallestElementHeight = $(slide).outerHeight();
        }
      })

      //set the REQUIRED parameters for the slider to function 
      //on the parent wrapper
      $sliderWrapper.css({
        position: "relative",
        overflow: "hidden",
        "white-space": "nowrap",
        height: $tallestElementHeight
      });

      //on the child slider wrapper
      $slider.css({
        position: "absolute",
        left: "0",
        top: "0",
        transition: "all " + settings.transitionSpeed + " ease-out"
      });

      $slides.css({
        "vertical-align": settings.verticalAlignSlides
      })

      //set sliderwidth after we add our CSS
      //this is due to positioned element being absolute
      $sliderWidth = $slider.width() - $wrapperWidth;

      //lastly, start watchers
      watchers();
    }(); //immediately invoke our init funciton
  };

  //jQuery plugin init on all 
  //elements with the plugin bound to them
  $.fn.hoverSlider = function(options) {
    var settings = $.extend({
      //these are the default settings
      //they can be overrode in the instantiation
      //just like jQuery or similar
      resetOnMouseout: false,
      verticalAlignSlides: "middle",
      mouseMovePaddingPercent: "20%",
      transitionSpeed: "0.35s"
    }, options);

    return this.each(function() {
      (new $.hoverSlider(this, settings));
    });
  };
  // add active class on programs tab on solutions page 
  $('.proGrams .tabs li').first().addClass('active');

})(jQuery);

//-------------------------------------------------------------

$(function() {
  //base slider
  $(".slider-one").hoverSlider();

  
});

/*
  Page hedline styling
*/
$(document).ready(function() {
$('.page h1').each(function(j){
  var wordscount1 = $(this).text().split(" ").length;
  if(wordscount1 > 1){
    var words1 = $(this).text().split(" ");
    $(this).empty();
    $.each(words1, function(i, v) {
      $('.page h1').eq(j).append($("<span>").text(v));
    });
  } else {
    // $(this).append($('<span>'))
  }
});
});

/*
  Navigation  styling
*/
$( "#menu-primary > li > a" ).each(function(j) {
		//var words = $(this).text().split(" ");
		var wordscount = $(this).text().split(" ").length;
		//$(this).empty();
//		if(wordscount > 1){
			var words = $(this).text().split(" ");
			$(this).empty();
			$.each(words, function(i, v) {
				$( "#menu-primary > li > a" ).eq(j).append($("<span>").text(v));
			});
//		} else {
      // $(this).append($('<span>'))
//    }
	});



Modernizr.addTest('lifeaPr',function() {

    var div = document.createElement('div');

    if ('lifeaPr' in div.style)
      return true;

    'Webkit Moz O ms Khtml'.replace(/([A-Za-z]*)/g,function(val) { 
      if (val+'lifeaPr' in div.style) return true;
    });

  });


$(window).scroll(function() {
  var sticky = $('.topNavSec'),
    scroll = $(window).scrollTop();

  if (scroll >= 40) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});


//HOME TAB AND ACCORDIAN
$(document).ready(function() {
 $('#homeTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        });




//VIEWPOINT CAROUSEL
$(document).ready(function() {
              $('.view-owl-carousel').owlCarousel({
                nav: !0,
                loop: !0,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                },
                  autoplay: !0,
        navText: ['<img src="wp-content/themes/revampedpractice/images/leftNavigation.png"/>', '<img src="wp-content/themes/revampedpractice/images/rightNavigation.png"/>']
              });
            });

//TEAM CAROUSEL
$(document).ready(function() {
              $('.team-owl-carousel').owlCarousel({
                nav: !0,
                loop: !0,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: false,
                    loop: false,
                    margin: 20
                  }
                },
                  autoplay: !0,
        navText: ['<img src="wp-content/themes/revampedpractice/images/leftNavigation.png"/>', '<img src="wp-content/themes/revampedpractice/images/rightNavigation.png"/>']
              });
            });

//HISTORY & AWARDS CAROUSEL

$(document).ready(function() {
              $('.award-owl-carousel').owlCarousel({
                nav: !0,
                loop: !0,                
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 6,
                    nav: false,
                    loop: false,
                    margin: 20
                  }
                },
                  autoplay: !0,
        navText: ['<img src="wp-content/themes/revampedpractice/images/leftNavigation.png"/>', '<img src="wp-content/themes/revampedpractice/images/rightNavigation.png"/>']
              });
            });

//OTHER PROGRAMM
$(document).ready(function() {
              $('.other-program-owl-carousel').owlCarousel({
                nav: !0,
                loop: !0,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: false,
                    loop: false,
                    margin: 20
                  }
                },
                  autoplay: !0,
        navText: ['<img src="wp-content/themes/revampedpractice/images/leftNavigation.png"/>', '<img src="wp-content/themes/revampedpractice/images/rightNavigation.png"/>']
              });
            });

//REPUTATION MANAGEMENT
$(document).ready(function() {
              $('.repoManagement-owl-carousel, .brandComm-owl-carousel').owlCarousel({
                nav: !0,
                loop: !0,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 2,
                    nav: false
                  },
                  1000: {
                    items: 3,
                    nav: false,
                    loop: false,
                    margin: 0
                  }
                },
                  autoplay: false,
                  dots: false,
        navText: ['<img src="wp-content/themes/revampedpractice/images/leftNavigation.png"/>', '<img src="wp-content/themes/revampedpractice/images/rightNavigation.png"/>']
              });
            });

//document.addEventListener('DOMContentLoaded', () => { 
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
const player = new Plyr('#player');
  const player1 = new Plyr('#player1');
const player2 = new Plyr('#player2');
const player3 = new Plyr('#player3');

  // Bind event listener
//  function on(selector, type, callback) {
//    document.querySelector(selector).addEventListener(type, callback, false);
//  }
//});

$('.plyr').on('ready', function(event) {

    $(this).addClass('plyr--init-hide-controls');

})