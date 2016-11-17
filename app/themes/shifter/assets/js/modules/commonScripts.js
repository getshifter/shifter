/**
 * Module for js that fires on all pages.
 */

module.exports = function() {

  console.log('We have liftoff.');

  require('./node_modules/gsap/src/uncompressed/jquery.gsap.js');
  require('./node_modules/gsap/src/uncompressed/TweenLite.js');
  require('scrollmagic');

};