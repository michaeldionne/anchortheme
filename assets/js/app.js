$(document).ready(function(){
   new Share('.element');
}); // end doc ready

$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.navbar-inverse').addClass('shrink');
        }
        else {
            $('.navbar-inverse').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset;
    }
});