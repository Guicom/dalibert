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



      // menu center verticalement
      var heightMenu = $('.links').height();
      var menuMargin = (heightScreen - heightMenu )/2;

      $('.links').css('top', menuMargin);
      
      $('.photos a').click(function() {
          $('.region-bottom .views_slideshow_cycle_main .views-field img').click();
      });

      // Display slider in full screen
      $('.views-slideshow-controls-bottom').hide();
      $('.region-bottom .views_slideshow_cycle_main .views-field img').click(function() {
          $('#content').fadeToggle( "slow", "linear" );
          $('.sidebars').fadeToggle( "slow", "linear" );
          $('#footer').fadeToggle( "slow", "linear" );
          $('.views-slideshow-controls-bottom').fadeToggle( "slow", "linear" );
      });



      // Slideshow

      var slides = $(".views_slideshow_cycle_main .views-field img", context);
      // Resize on page load.
      slides.each( resize_slide );

      // Trigger resize of element on window resize.
      $(window).resize(function() {
          slides.each( resize_slide );
      });
      // Define resize function.
      function resize_slide() {
          var doc_width = $(document).width();
          var doc_height = $(document).height();
          var image_width = $(this).width();
          var image_height = $(this).height();
          var image_ratio = image_width/image_height;
          var new_width = doc_width;
          var new_height = Math.round(new_width/image_ratio);
          $(this).width(new_width);
          $(this).height(new_height);
          $(this).removeAttr('width').removeAttr('height');
          if (new_height<doc_height) {
              new_height = doc_height;
              new_width = Math.round(new_height*image_ratio);
              $(this).width(new_width);
              $(this).height(new_height);
              var width_offset = Math.round((new_width-doc_width)/2);
              $(this).css("left","-"+width_offset+"px");
          }
      }


  }
};


})(jQuery, Drupal, this, this.document);
