/*
 *
 * Miriam Soto (aka Cool Colors) site
 * Visual Designer, Lead UX / UI Design
 * http://coolcolors.es/
 *
 * Created:  August 2015.
 * Author :  Nadal Soler </> Front-end Developer
 *           nadal dot soler at gmail dot com
 *           https://github.com/nadalsol
 *           https://twitter.com/nadalsol
 *
 */


/*
 * The document ready event executes already when the HTML-Document is loaded
 * and the DOM is ready, even if all the graphics haven’t loaded yet.
 */
$(document).ready(function() {

  /*
   * Set Hero height
   *
   * Get Viewport height - Header Main height
   * and assign it to the Hero.
   *
   */
  function setHeroHeight() {
    var viewportHeight = $(window).height(),
        headerMainHeight = $('#top').outerHeight(),
        heroHeight = viewportHeight - headerMainHeight;
    $('#hero').css('height', heroHeight);
  }
  // On window load
  setHeroHeight();
  // On window resize
  $(window).resize(function() {
    setHeroHeight();
  });

});


/*
 * The window load event executes a bit later when the complete page
 * is fully loaded, including all frames, objects and images.
 */
// $(window).load(function() {
  // Your code here...
// });
