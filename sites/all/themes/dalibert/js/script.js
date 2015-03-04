/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.
    $('.i18n-fr #reservation-entityform-edit-form .field-add-more-submit').val('Ajouter une chambre');

    //fix body size
    var widthScreen = $(window).width();
    var heightScreen = $(window).height();
    $('body').css('width', widthScreen);
    $('body').css('height', heightScreen);

    $('#reservation-entityform-edit-form > div').addClass('scroll-content')



  }
};


})(jQuery, Drupal, this, this.document);
