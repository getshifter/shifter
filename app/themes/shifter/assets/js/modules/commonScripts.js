/**
 * Module for js that fires on all pages.
 */

module.exports = function() {

  console.log("Hi, I'm Shifter.");

  // Match Height
  require('matchHeight');
  $('.match-h').matchHeight();

  // Accordions
  // require('aria-accordion');
  var accordion = require('aria-accordion');
  new accordion.Accordion();
};
