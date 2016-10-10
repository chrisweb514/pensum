<?php

	// if(WP_ENV != 'development' ):
	// 	die('This site is under construction');
	// endif;

?>
<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/dist/images/win8-tile-icon.png">
	    <meta name="theme-color" content="#121212">
	    <?php } ?>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif|Roboto" rel="stylesheet">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

    <?php if( collective::is_production() ): ?>

      <?php if(false): ?>
        <script>
        !function() {
          var t;
          if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
          t.methods = [ "identify", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
          t.factory = function(e) {
            return function() {
              var n;
              return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
            };
          }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
          }), t.load = function(t) {
            var e, n, o, r;
            e = 3e5, r = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + r + "/" + t + ".js",
            n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
          });
        }();
        drift.SNIPPET_VERSION = '0.2.0';
        drift.load('ywh9d7xamue2');
        </script>
      <?php endif; ?>

    <!-- <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:269534,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-82854413-1', 'auto');
      ga('send', 'pageview');

    </script> -->

    <?php endif; ?>

    <style>
      #loader-wrapper {
      height: 100%; left: 0; position: fixed; top: 0; width: 100%; z-index: 2500;
      }
      #loader-wrapper .loader-section {
      -ms-transform: translateX(); -webkit-transform: translateX(); background: #292440; height: 100%; position: fixed; top: 0; transform: translateX(); width: 100%; z-index: 1000;
      }
      #loader {
      display: block; height: 150px; left: 50%; margin: -75px 0 0 -75px; position: relative; top: 50%; width: 150px; z-index: 1001;
      }
      .pace-done #loader-wrapper {
      opacity: 0; transition: all 0.3s 1s ease-out; visibility: hidden;
      }
      .pace-done #loader {
      -webkit-transition: all 0.3s ease-out; opacity: 0; transition: all 0.3s ease-out;
      }
      .no-js #loader-wrapper {
      display: none
      }
      .circle {
      -moz-transform: translate(-50%, -50%); -moz-transition: all 200ms ease; -ms-transform: translate(-50%, -50%); -o-transition: all 200ms ease; -webkit-transform: translate(-50%, -50%); -webkit-transition: all 200ms ease; border-radius: 50%; height: 0; left: 50%; position: absolute; top: 50%; transform: translate(-50%, -50%); transition: all 200ms ease; width: 0; z-index: 1;
      }
      .circle:nth-child(1) {
      animation-delay: 0; animation-duration: 1s; animation-iteration-count: infinite; animation-name: explode; animation-timing-function: ease; background: #B7291D; z-index: 2;
      }
      .circle:nth-child(2) {
      animation-delay: 0.5s; animation-duration: 1s; animation-iteration-count: infinite; animation-name: explode; animation-timing-function: ease; background: #D1392D;
      }
      @keyframes explode {
        0% {
         width: 0; height: 0; z-index: 1;
        }
        50% {
         width: 3em; height: 3em; z-index: 1;
        }
        100% {
         display: none
        }
      }
    </style>

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->

	<body <?php body_class(); ?>>

    <?php if( is_front_page() ): ?>
    <div id="loader-wrapper">
			<div id="loader" style="">
        <div class="circle"></div>
        <div class="circle"></div>
			</div>
			<div class="loader-section"></div>
		</div>
    <?php endif; ?>

		<div id="content-wrapper" class="off-canvas-wrapper">

			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

				<div class="off-canvas-content" data-off-canvas-content>

    					<header class="header" data-sticky-container>

    						 <!-- This navs will be applied to the topbar, above all content
    							  To see additional nav styles, visit the /parts directory -->
    						 <?php
                  //get_template_part( 'parts/nav', 'offcanvas-topbar' );
                  get_template_part( 'parts/nav', 'offcanvas-topbar' );
                ?>


    					</header> <!-- end .header -->

              <div class="wrapper">
                <div class="smooth">
                  <div id="site-cont" class="site-cont">
    					         <?php get_template_part('parts/slider'); ?>
