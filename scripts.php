<script type="text/javascript" src="js/vendor/retina.js"></script>
<script type="text/javascript" src="js/vendor/smoothscroll.js"></script>
<script type="text/javascript">

<!-- Scroll animation trigger -->

                        document.addEventListener('DOMContentLoaded', function(){
                            var trigger = new ScrollTrigger();

                        });
                                
<!-- Parallax scroll on -->

                                (function($){
                        $(window).enllax();
                })(jQuery);
            

<!-- Toggle hamburger button state -->

                        var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

                        var hamburgers = document.querySelectorAll(".hamburger");
                        if (hamburgers.length > 0) {
                        forEach(hamburgers, function(hamburger) {
                        hamburger.addEventListener("click", function() {
                          this.classList.toggle("is-active");
                        }, false);
                        });
                        }

<!-- Toggle mobile menu-->

                        $(".hamburger").click(function() {
                        $(".hamburger_menu").toggle();
                        });


<!-- Create text that automatically fits the full width of a div -->

                        $( '.box' ).each(function ( i, box ) {

                        var width = $( box ).width(),
                        html = '<span style="white-space:nowrap">',
                        line = $( box ).wrapInner( html ).children()[ 0 ],
                        n = 100;
    
                        $( box ).css( 'font-size', '100px' );

                        $(box).css('font-size', Math.floor( width/$(line).width()*100 ));
                        $( box ).text( $( line ).text() );

                        });


<!-- Quotes bar fade loop -->

                        var divs = $('div[id^="content-"]').hide(),
                            i = 0;

                        (function cycle() { 

                            divs.eq(i).fadeIn(400)
                                      .delay(6000)
                                      .fadeOut(400, cycle);

                            i = ++i % divs.length;

                        })();

<!-- Shrinking nav bar -->

                        $(function(){
                         var shrinkHeader = 510;
                          $(window).scroll(function() {
                            var scroll = getCurrentScroll();
                              if ( scroll >= shrinkHeader ) {
                                   $('.fixed-nav-bar').addClass('shrink');
                                   $('.fixed-nav-bar-home').addClass('shrink');
                                   $('.logo').addClass('shrink');
                                }
                                else {
                                    $('.fixed-nav-bar').removeClass('shrink');
                                    $('.fixed-nav-bar-home').removeClass('shrink');
                                    $('.logo').removeClass('shrink');
                                }
                          });
                        function getCurrentScroll() {
                            return window.pageYOffset || document.documentElement.scrollTop;
                            }
                        });  


<!-- Smooth scroll -->

                        smoothScroll.init({
                        selector: 'a', // Selector for links (must be a class, ID, data attribute, or element tag)
                        easing: 'easeInOutCubic', // Easing pattern to use
                        offset: 50, // Integer. How far to offset the scrolling anchor location in pixels
});


</script>  