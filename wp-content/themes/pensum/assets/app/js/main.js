
jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = jQuery('#top-bar-menu').outerHeight();

jQuery(window).scroll(function(event){
    didScroll = true;

});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = jQuery(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        jQuery('#top-bar-menu').removeClass('nav-down').addClass('nav-up');
        jQuery(".sub-nav-mobile").slideUp(300);
        jQuery(".menu-toggle span.icon").removeClass('icon-up-open-mini').addClass('icon-down-open-mini');

    } else {
        // Scroll Up
        if(st + jQuery(window).height() < jQuery(document).height()) {
            jQuery('#top-bar-menu').removeClass('nav-up').addClass('nav-down');
        }
    }


    lastScrollTop = st;
}

jQuery(document).ready(function($) {

  //$('#myBlock').vide('http://airvu.local.collective.design/wp-content/themes/airvu/assets/dist/videos/prison1.mp4');
  if( $('[data-vide-bg]').length ){
    var instance = $('#background-video').data('vide');
    var video = instance.getVideoObject()
    video.onloadeddata = function(){;
      $('#background-video').addClass('playing');
    }
  }

  $("#modal-video").bind("open.zf.reveal",function(){
    $("#myVideo").vimeo("play");
    video.pause();
  })

  $("#modal-video").bind("closed.zf.reveal", function(){
    $("#myVideo").vimeo("pause");
    video.play();
  })



  // setTimeout(function(){
	// 	$('body').addClass('loaded');
	// }, 3000);

  $(".menu-toggle").click(function(e){
		$(".sub-nav-mobile").slideToggle(300);
    $(this).find('span.icon').toggleClass('icon-down-open-mini icon-up-open-mini');
    e.preventDefault();
    return false;
	});

  // $("#intro-animation-text span.first").typed({
  //     strings: ['police force', 'fire department','marine unit', 'security team', 'prison', 'loss adjusters'],
  //     startDelay: 2000,
  //     typeSpeed: 100,
  //     backSpeed: 50,
  //     backDelay: 1000,
  //     loop: true,
  //     loopCount: false,
  //     contentType: 'text', // or
  // });


  // IF video header set it up
  if (typeof header_video_id != 'undefined') {
    $('#background-video').YTPlayer({
      fitToBackground: true,
      videoId: header_video_id,
      pauseOnScroll: true,
      playerVars: {
        start: 12,
        mute: true
      }
    });
  }



  // $('.background-video').each(function(index, value) {
  //   console.log($(this).data('video-url'));
  //   $(this).YTPlayer({
  //     fitToBackground: true,
  //     videoId: $(this).data('video-url'),
  //     pauseOnScroll: true,
  //     playerVars: {
  //       start: 12,
  //       mute: true
  //     }
  //   });
  //
  // });

  $('.select-group input').change(function() {
      if($(this).prop("checked")) {
        $(this).closest('.tabs-panel').find('[data-group="true"]').find('input[type="number"]').val('1');
      } else{
        $(this).closest('.tabs-panel').find('input[type="number"]').val('0');
      }
  });

  //$('#login-modal').foundation('open');


  $('#menu-item-281').click(function(e){
    $('#login-modal').foundation('open');
    return false;
    e.preventDefault();
  });

  $('.select-custom .option').click(function(){

    var custom_select = $(this).closest('.select-custom');

    if($(this).hasClass('active')){
  		return false;
   	} else {
   		custom_select.find('.option').removeClass('active');
  		$(this).addClass('active');
   	}

    var val = custom_select.find('.option.active').data('name');
    custom_select.find('.select-value').val(val).trigger('change');;

  });

  /* ==========================================================================
    Fade
   ========================================================================== */

    function fade() {
     $('.animate-scroll-block').each(function() {
       /* Check the location of each desired element */
       var objectBottom = $(this).offset().top;
       var windowBottom = $(window).scrollTop() + $(window).innerHeight();

       /* If the object is completely visible in the window, fade it in */
       if (objectBottom < windowBottom) {
         $(this).addClass('show');
       } else {
         $(this).removeClass('show');
       }
     });
   }
   fade(); //Fade in completely visible elements during page-load
   $(window).scroll(function() {fade();}); //Fade in elements during scroll

  /* ==========================================================================
    SCROLL
   ========================================================================== */

   $('.scroll-to').click(function(e){
    target = $(this).attr('href');
    $('html, body').stop().animate({
     scrollTop: $(target).offset().top
    }, 500);
    e.preventDefault();
    return false;
  });


  if( $('body').hasClass('smooth-active') ){
    var lastPosition = -100;
    $('.wrapper').height($('.smooth').height() - 35);

    $(window).resize(function() {
        $('.wrapper').height($('.smooth').height() - 35);
    });

    // $('.flat-button').click(function() {
    //     $(".smooth").clearQueue().css({
    //         transform: 'translate3d(0px, -' + $('.toggle').offset().top + 'px, 0px)'
    //     });
    //     $(window).scrollTop($('.toggle').offset().top);
    //     return false;
    // });


    var scroll = window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      // IE Fallback, you can even fallback to onscroll
      function(callback) {
          window.setTimeout(callback, 1000 / 60)
      };

    function loop() {

      // Avoid calculations if not needed
      if (lastPosition == window.pageYOffset) {
          scroll(loop);
          return false;
      } else lastPosition = window.pageYOffset;

      var transform = 'translate3d(0px, -' + lastPosition + 'px, 0px)';
      var smoothScoll = $(".smooth")[0];

      smoothScoll.style.webkitTransform = transform;
      smoothScoll.style.mozTransform = transform;
      smoothScoll.style.transform = transform;


      scroll(loop)
    }

    // Call the loop for the first time
    loop();
  }

    $( window ).scroll(function() {
        navigation();
    });


  /* ==========================================================================
    NAVIGATION
   ========================================================================== */

	function navigation(){
    //
    // if( $('body').hasClass('menu-active') ){
    //  return false;
    // }

		stickyNavTop = 100;

		$(window).scrollTop() > stickyNavTop ?
			$("body").addClass('menu-sticky') :
	  		$("body").removeClass('menu-sticky');

	}

  navigation();

  jQuery(".backstretch-image").not('.async').each(function(index, value) {

      var bs_transition = $(this).attr('data-transition') ? $(this).data('transition') : 1000;
      var bs_duration = 5000;

      jQuery(this).backstretch( $(this).data('bg-image')
      , {duration: bs_duration, fade: bs_transition}
      );

      $(this).find('.backstretch').addClass('active');

      if( $( this ).attr('data-bg-color') && $(this).attr('data-bg-color') != '#' && ( $(this).attr('data-bg-color') != '' || $(this).attr('data-bg-color') != undefined ) ){
          $(this).css('background', $(this).data('bg-color') );
      }

      if( $(this).attr('data-opacity') ){
          $(this).find('.backstretch').children('img').css('opacity', $(this).data('opacity'));
      }

  });

    $('.backstretch-image-fullscreen').each(function( index ) {

        if ( !$(this).closest('.slim-hero').length > 0){

            $wheight = $(window).height();
            $height = $(this).height();
          //  $height = $height < $wheight ? $wheight : $height;
          	$height = $wheight;
            //
            //if( $('body').hasClass('home') ){
            $height = $height -= $('#top-bar-menu').height();


            // iF ADMIN
            $adminbar = $('#wpadminbar');
            if( $adminbar.length ){
              $height -= $adminbar.height();
            }

            $(this).css(
                { 'min-height':($height)+'px',
                  'height':($height)+'px'
                }
            );


            $('.header-slider-wr').css(
                { 'min-height': ($height)+'px',
                    'height': ($height)+'px'
                }
            );



        }

    });


    // Facebook Share
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }

    function tweetShare(url, title, winWidth, winHeight){

        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);

         window.open('http://twitter.com/share?url=' + url + '&text=' + title + '&', 'twitterwindow', 'height=450, width=550, top='+ winTop +', left='+ winLeft +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');

    }


  /* ==========================================================================
    MAPS
   ========================================================================== */

   /* ==========================================================================
     CONTACT & BOOK DEMO
    ========================================================================== */

    $('#dp1').fdatepicker({
  		//initialDate: '09-04-2016',
  		format: 'mm-dd-yyyy',
  		disableDblClickSelection: true
  	});

    $('#demo-for').change(function(){
      var demo_val = $(this).val()
      $('[name="_subject"]').val( 'Request a demo for: ' + demo_val );
    })

    $('#contact_form').submit(function(e) {

      var name = $('#user_name')
      var email = $('#user_email')
      var message = $('#user_message')

      if(name.val() == "" || email.val() == "" || message.val() == "") {
        return false;
      }
      else {
        $.ajax({
          method: 'POST',
          url: '//formspree.io/info@collective.design',
          data: $('#contact_form').serialize(),
          datatype: 'json'
        });
        e.preventDefault();
        $(this).get(0).reset();
        $('#contact_confirmation').removeClass('hide');
      }
    });

  $('.submit-fail, .submit-success').click(function() {
    $(this).hide();
  })


  /* ==========================================================================
    FIX
   ========================================================================== */

  // Remove empty P tags created by WP inside of Accordion and Orbit
  jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

});
