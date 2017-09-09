(function() {
    var triggerBttn = document.querySelector( 'button.mjp-hamburger' ),
    overlay = document.querySelector( 'div.mjp-overlay' ),
    closeBttn = overlay.querySelector( 'button.mjp-overlay-close' );
    transEndEventNames = {
        'WebkitTransition': 'webkitTransitionEnd',
        'MozTransition': 'transitionend',
        'OTransition': 'oTransitionEnd',
        'msTransition': 'MSTransitionEnd',
        'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
    support = { transitions : Modernizr.csstransitions };

    function toggleOverlay() {
        if( classie.has( overlay, 'open' ) ) {
            classie.remove( overlay, 'open' );
            classie.add( overlay, 'close' );
            var onEndTransitionFn = function( ev ) {
            if( support.transitions ) {
                if( ev.propertyName !== 'visibility' ) return;
                this.removeEventListener( transEndEventName, onEndTransitionFn );
                }
                classie.remove( overlay, 'close' );
            };
            if( support.transitions ) {
                overlay.addEventListener( transEndEventName, onEndTransitionFn );
            }
            else {
                onEndTransitionFn();
            }
        }
        else if( !classie.has( overlay, 'close' ) ) {
            classie.add( overlay, 'open' );
        }
    }

    triggerBttn.addEventListener( 'click', toggleOverlay );
    closeBttn.addEventListener( 'click', toggleOverlay );


    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300;
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    var offset_opacity = 1200;
    //duration of the top scrolling animation (in ms)
    var scroll_top_duration = 700;
    //grab the "back to top" link
    var $back_to_top = document.querySelector('.mjp-top');
    var last_known_scroll_position = 0;
    var ticking = false;

    function swapClass(scroll_pos, element) {
        if (scroll_pos > offset) {
         	element.classList.add('mjp-is-visible');
        } else {
            element.classList.remove('mjp-is-visible');
            element.classList.remove('mjp-fade-out');
        }
        if (scroll_pos > offset_opacity) {
         	element.classList.add('mjp-fade-out');
        }
    }

    window.addEventListener('scroll', function(e) {
      last_known_scroll_position = window.scrollY;
      if (!ticking) {
        window.requestAnimationFrame(function() {
          swapClass(last_known_scroll_position, $back_to_top);
          ticking = false;
        });
      }
      ticking = true;
    });

    $back_to_top.addEventListener('click', function(e){
        var $body = document.body;
        Velocity($body, 'scroll', { duration: scroll_top_duration, easing: 'spring', opacity: 1 });
    });
    
    /* Masonry */
    var mjpMasonry = document.getElementById( 'mjp-masonry' );

    if ( mjpMasonry == null ) { return; }

    masonryNewsAnim = new AnimOnScroll( mjpMasonry, {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
    });

    masonryNewsAnim._init();
})();
