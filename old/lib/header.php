<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : Flight::get('flight.title'); ?></title>
		<meta name="description" content="Bill Young Productions - Serving the live entertainment industry for over 35 years">
		<meta name="keywords" content="bill young,productions,concert,tour,sugarland,houston,texas,los angeles,california,video,audio,voice,art,interactive,live,entertainment">
    <meta name="p:domain_verify" content="77de80a3ce47e8d139e3c2636aecda1d"/> <!-- Pinterest -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/favicon-16x16.png" sizes="16x16">
    <!-- <link rel="manifest" href="<?//php echo Flight::get('flight.asset_url'); ?>img/icons/manifest.json"> -->
    <link rel="mask-icon" href="<?php echo Flight::get('flight.asset_url'); ?>img/icons/safari-pinned-tab.svg" color="#cc0000">
    <!-- <link rel="shortcut icon" href="<?//php echo Flight::get('flight.asset_url'); ?>img/icons/favicon.ico"> -->
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php echo Flight::get('flight.asset_url'); ?>img/icons/mstile-144x144.png">
    <!-- <meta name="msapplication-config" content="<?//php echo Flight::get('flight.asset_url'); ?>img/icons/browserconfig.xml"> -->
    <meta name="theme-color" content="#000000">
		<link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/base.css<?php if(ENVIRONMENT !== 'production') echo '?v=' . strtotime("now"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/skeleton1020.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/magnificPop.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/select2.css">
    <!--<link rel="stylesheet" type="text/css" href="./js/chosen_v1.5.1/chosen.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/masterslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/masterslider_default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Flight::get('flight.asset_url'); ?>css/layout.css">
    <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url'); ?>js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url'); ?>js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url'); ?>js/select2.js"></script>
    <!--<script type="text/javascript" src="./js/chosen_v1.5.1/chosen.jquery.MOD.js"></script>-->
    <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url'); ?>js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo Flight::get('flight.asset_url'); ?>js/masterslider.min.js"></script>
	</head>
	<body>
    <div id="preloaded-images">
      <!--<img src="./#" width="1" height="1" alt="" />-->
    </div>

    <a class="anchor" id="top"></a>

    <div id="topbanner">
      <div id="topbanner-close"></div>
    </div>

    <!-- HEADER -->
    <div id="header">
      <div id="navbar-bg">
        <div id="navbar">
          <div id="logo-tiny">
						<a class="scroller" href="#top">
							<img src="<?php echo Flight::get('flight.asset_url'); ?>img/logo-byp-tiny.png" alt="" />
						</a>
					</div>
          <div id="nav">
            <div id="menubutton"></div>
              <ul class="nav">
                <!--<li><a class="scroller" href="#reel">REEL</a></li>-->
                <li><a class="scroller" href="#work">WORK</a>
                  <ul class="subnav">
                  	<li><a href="<?php echo Flight::get('flight.base_url'); ?>video">VIDEO</a></li>
                    <li><a href="<?php echo Flight::get('flight.base_url'); ?>audio">AUDIO</a></li>
                    <li><a href="<?php echo Flight::get('flight.base_url'); ?>voicetalent">VOICE TALENT</a></li>
                    <li><a href="<?php echo Flight::get('flight.base_url'); ?>art">ART</a></li>
                    <li><a href="<?php echo Flight::get('flight.base_url'); ?>interactive">INTERACTIVE</a></li>
                    <li><a href="<?php echo Flight::get('flight.base_url'); ?>event">LIVE EVENT</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo Flight::get('flight.base_url'); ?>tours">TOURS</a></li>
                <li><a href="<?php echo Flight::get('flight.base_url'); ?>order">ORDER</a></li>
                <li><a href="<?php echo Flight::get('flight.base_url'); ?>contact">CONTACT</a></li>
								<li><a href="<?php echo Flight::get('flight.base_url'); ?>login">LOGIN</a></li>
                <br class="clear" />
              </ul>
              <ul class="social-top">
                <li><a href="https://www.facebook.com/byp" target="_blank"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/icon-facebook.png" alt="" /></a></li>
                <li><a href="https://twitter.com/bypconcerts" target="_blank"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/icon-twitter.png" alt="" /></a></li>
                <li><a href="https://www.instagram.com/bypconcerts/" target="_blank"><img src="<?php echo Flight::get('flight.asset_url'); ?>img/icon-instagram.png" alt="" /></a></li>
                <!--<li><a href="https://www.pinterest.com/billyoungprod" target="_blank"><img src="./img/icon-pinterest.png" alt="" /></a></li>-->
                <br class="clear" />
              </ul>
            <br class="clear" />
          </div>
        </div>
      </div>

      <div id="logo-container">
        <div id="logoflag2"><img class="noscale" src="<?php echo Flight::get('flight.asset_url'); ?>img/logo-byp-flag2-v2.png" alt="" /></div>
        <div id="logoflag1"><img class="noscale" src="<?php echo Flight::get('flight.asset_url'); ?>img/logo-byp-flag-v2.png" alt="" /></div>
      </div>
			<?php if(isset($show_link_container)) { ?>
      <a id="byp_link_container" href="http://www.bypextreme.com/">
        <div id="corporate_logo"></div>
        <div id="corporate_text">See our corporate and<br />tradeshow work!</div>
        <div id="corporate_arrow"></div>
      </a>
			<?php } ?>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobilemenu-container">
      <div id="mobilemenu">
        <ul class="mobilenav">
          <li><a class="scroller mobilenav" href="#top">HOME</a></li>
          <!--<li><a class="scroller mobilenav" href="#reel">REEL</a></li>-->
          <li><a class="scroller mobilenav" href="#work">WORK</a></li>
          <li><a class="mobilenav" href="<?php echo Flight::get('flight.base_url'); ?>tours">TOURS</a></li>
          <li><a class="mobilenav" href="<?php echo Flight::get('flight.base_url'); ?>order">ORDER</a></li>
          <li><a class="mobilenav" href="<?php echo Flight::get('flight.base_url'); ?>contact">CONTACT</a></li>
					<li><a class="mobilenav" href="<?php echo Flight::get('flight.base_url'); ?>login">LOGIN</a></li>
        </ul>
      </div>
      <div class="closebutton"></div>
    </div>
