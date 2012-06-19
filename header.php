<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="Die Jungen Piraten sind die Jugendorganisation der Piratenpartei und setzen sich für die Belange Jugendlicher in der Politik ein.">

  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400,700'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,700'>
  <link rel='icon' type='image/png' href='https://static.junge-piraten.de/favicon.png' />

  <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div id="headerwrapper">
  <header>
    <a id="name" href="<?php echo site_url("/"); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><span class="light">JUNGE</span> PIRATEN</a>
    <img id="signet" src="<?php bloginfo('template_directory'); ?>/img/signet.png" />

    <!--
        <li class="home"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/home_16x16.png" alt="Hauptseite" width="16" height="16" /></a></li>
    -->
    <?php function menu_empty() {}; wp_nav_menu(array('container' => 'nav', 'container_class' => '', 'theme_location' => 'primary', 'fallback_cb' => menu_empty, 'link_before' => '', 'before' => '<span class="divisor">//</span>')); ?>
    <div id="header-aktiv-werden">
      <h3 onclick="$('#header-aktiv-werden > ul').fadeToggle();">Direkt mitmachen</h3>
      <ul style="display: none;">
        <li><a href="https://forum.junge-piraten.de/">Forum</a></li>
        <li><a href="https://wiki.junge-piraten.de/">Wiki</a></li>
        <li><a href="https://pad.junge-piraten.de/">Pads</a></li>
      </ul>
    </div>
  </header>
  </div>
  <div id="wrapper">

  <?php if(is_home()) { ?>  
  <a href="?bxl"><div id="slider">
    <div class="box">
      <span class="plus">+</span>
      <h1><span>BRÜSSELREISE</span></h1>
      <div class="text">JUNGE PIRATEN ZU BESUCH IN BRÜSSEL</div>
    </div>
  </div></a>
  <?php } ?>
