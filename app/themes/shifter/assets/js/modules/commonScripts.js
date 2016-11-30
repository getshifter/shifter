/**
 * Module for js that fires on all pages.
 */

module.exports = function() {

  console.log("Hi, I'm Shifter.");

  // Match Height
  require('matchHeight');
  $('.match-h').matchHeight();

  // Slide Toggle Responsive Nav
  $('#js__nav-toggle').on('touchstart click', function(event) {
    event.preventDefault();
    $('body').toggleClass('open-nav');
  });

  $('.nav').each(function () {
    var height = $(this).height();
    $( '.nav__drawer' ).css( 'top', function( index ) {
      return height - 1;
    });
  });

};
