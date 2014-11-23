(function ($) {

  new WOW().init();

  jQuery(window).load(function () {
//    jQuery("#preloader").delay(100).fadeOut("slow");
//    jQuery("#load").delay(100).fadeOut("slow");
    var wHeight = $(window).height();
    $.each($("body > section"), function () {
      var homeHeight = $(this).outerHeight(true);
      if (homeHeight < wHeight) {
        var padding = (wHeight - homeHeight) / 2;
        var old = ($(this).outerHeight(true) - $(this).height()) / 2;
        padding += old;
        $(this).css("padding-top", padding + "px");
        $(this).css("padding-bottom", padding + "px");
      }
    });
  });


  //jQuery to collapse the navbar on scroll
  $(window).scroll(function () {
    if ($(".navbar").offset().top > $(window).height() / 2 - 10) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
      $("#sign_up_btn").removeClass("sign-up-collapse");
    } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
      $("#sign_up_btn").addClass("sign-up-collapse");
    }
  });

  //jQuery for page scrolling feature - requires jQuery Easing plugin
  $(function () {
    $('.navbar-nav li a').bind('click', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000, 'easeInOutExpo');
      event.preventDefault();
    });
    $('.page-scroll a').bind('click', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000, 'easeInOutExpo');
      event.preventDefault();
    });

//    var p = $("#content-scroll-h").portfolio({
//      enableKeyboardNavigation: true, // enable / disable keyboard navigation (default: true)
//      loop: false, // loop on / off (default: false)
//      easingMethod: 'easeOutQuint', // other easing methods please refer: http://gsgd.co.uk/sandbox/jquery/easing/
//      height: '500px', // gallery height
//      width: '100%', // gallery width in pixels or in percentage
//      lightbox: false, // dim off other images, highlights only currently viewing image
//      showArrows: true, // show next / prev buttons
//      logger: false, // for debugging purpose, turns on/off console.log() statements in the script
//      spinnerColor: '#000', // Ajax loader color
//      offsetLeft: -4, // position left value for current image
//      opacityLightbox: '0.2' // opacity of other images which are not active
//    });
//    p.init();
    var $frame = $('#content-scroll-h');
    var $wrap = $frame.parent();

    $("#content-scroll-h").sly({
      horizontal: 1,
      itemNav: 'basic',
      smart: 1,
      activateOn: 'click',
      mouseDragging: 1,
      touchDragging: 1,
      releaseSwing: 1,
      startAt: 0,
      scrollBar: $wrap.find('.scrollbar'),
      scrollBy: 1,
      pagesBar: $wrap.find('.pages'),
      activatePageOn: 'click',
      speed: 300,
      elasticBounds: 1,
      easing: 'easeOutExpo',
      dragHandle: 1,
      dynamicHandle: 1,
      clickBar: 1,
      // Buttons
      forward: $wrap.find('.forward'),
      backward: $wrap.find('.backward'),
      prev: $wrap.find('.prev'),
      next: $wrap.find('.next'),
      prevPage: $wrap.find('.prevPage'),
      nextPage: $wrap.find('.nextPage')
    });
  });
})(jQuery);
