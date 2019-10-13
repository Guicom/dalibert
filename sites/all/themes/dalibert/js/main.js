(function ($) {
  /**
   *  Add a relevant body class when Commerce Kickstart Demo mode is on.
   */
  Drupal.behaviors.dalibert = {
    attach: function (context, settings) {

      $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var headerHeight = $('.header-main').outerHeight();
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - headerHeight - 120
            }, 500);
            return false;
          }
        }
      });


      $(document).on('scroll', function() {
        var documentTop = $(this).scrollTop();

        if (documentTop <= 0) {
          $('#navbar').removeClass('fixed');
          $('#navbar').removeClass('middle-step');
        }
        if (documentTop > 100 && documentTop < 250 ) {
          if (!$('#navbar').hasClass('middle-step')) {
            $('#navbar').removeClass('fixed');
            $('#navbar').addClass('middle-step');
          }
        }
        if (documentTop > 300 ) {
          if (!$('#navbar').hasClass('fixed')) {
            $('#navbar').addClass('fixed');
          }
          if (!$('#navbar').hasClass('middle-step')) {
            $('#navbar').addClass('middle-step');
          }
        }
      });


      $('.popups-close').click(function(){
        $('body').removeClass('modal-open')
      });

      $('#block-system-main-menu .nav a').click(function() {
        $('.navbar-collapse').removeClass('in');
      });


    }
  };
})(jQuery);
