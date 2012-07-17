<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
<!--

.       _,..wWWw--./+'.            _      ,.                          .
  ..wwWWWWWWWWW;ooo;++++.        .ll'  ,.++;
   `'"">wW;oOOOOOO;:++\++.      .lll .l"+++'   ,..
     ,wwOOOOOOOO,,,++++\+++.    lll',ll'++;  ,++;'
    ,oOOOOOOOO,,,,+++++`'++ll. ;lll ll:+++' ;+++'
   ;OOOOOOOOO,,,'++++++++++lll ;lll ll:++:'.+++'
   OOOO;OOO",,"/;++++,+,++++ll`:llllll++++'+++
  OOOO;OO",,'++'+++;###;"-++llX llll`;+++++++'  ,.    .,      _
;O;'oOOO ,'+++\,-:  ###++++llX :l.;;;,--++."-+++++ w":---wWWWWWww-._
;'  /O'"'"++++++' :;";#'+++lllXX,llll;++.+++++++++W,"WWWWWWWWww;""""'`
   ."     `"+++++'.'"''`;'ll;xXXwllll++;--.++++;wWW;xXXXXXXXXXx"Ww.
           .+++++++++++';xXXXXX;Wll"+-"++,'---"-.x""`"lllllllxXXxWWw.
           "---'++++++-;XXXXXXwWWl"++++,"---++++",,,,,,,,,,;lllXXXxWW,
             `'""""',+xXXXXX;wWW'+++++++++;;;";;;;;;;;oOo,,,,,llXXX;WW`
                   ,+xXXXXXwWW"++.++++-.;;+++<'   `"WWWww;Oo,,,llXXX"Ww
                   +xXXX"wwW"+++++'"--'"'  )+++     `WWW"WwOO,,lllXXXww
                  ,x++++;"+++++++++++`., )  )+++     )W; ,WOO,,lllX:"Ww
                  :++++++++++++++++++++W'"-:++++    .W'  WWOO,,lllX; `w
                  .++++++++++++++++.+++"ww :+++'   ,"   ,WWOO,,lllX;  ;
           ;ll--.-"`.;++++++++++++++.+++;+.;++(         :WWOO,,lllXx
          ,'lllllllll,++++;+++++++++;"++++++++++++-.    :WWOO,,lllXx
          ;llll;;;"';'++++;'"""'''`` `lll;;:+++++++++.  WWOOO,,lllX'
         ,lllll,    ;+++++;            `"lllll.++++++++ WWwO,,,llX;
         lllllll,  ,++++++;               llllll+++++++.:WWw',,llx
        ,llllllll, ;++++++;               :llllll+++++++."WW;,,llx
        ;lllllllllV+++++++;               :lllllll+++++++.`w' `.lx.
        `lllllllll'+++++++;               :lllllll++++++++  `\  `,X\
         "llllll;++++++++;                ;llllll'+++++++++   `-  \X;
          "llll'+++++++++;               ;lllllll"+++++++++        `)
           `-'`+++++++++;'              ,llllllll++++++++++
             +++++++++++;              ,llllllll'++++++++++
.           '++++++++++"               `""""""""'+++++++++"           .
Tadness                                   http://tadness.deviantart.com

-->
  <!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="Die Jungen Piraten sind die Jugendorganisation der Piratenpartei und setzen sich für die Belange Jugendlicher in der Politik ein.">

  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width"> 
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Open+Sans+Condensed:300,400,700'>
  <link rel='icon' type='image/png' href='https://static.junge-piraten.de/favicon.png' />

  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- Javascript is in the footer. -->
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Dein Webbrowser ist <em>antik!</em> Bitte <a href="http://browsehappy.com/">installiere einen halbwegs aktuellen Browser</a>, um diese Seite korrekt dargestellt zu sehen.</p><![endif]-->
  <div id="topbar">
    <a href="https://wiki.junge-piraten.de/">Wiki</a>
    <a href="https://forum.junge-piraten.de/">Forum</a>
    <a href="https://ucp.junge-piraten.de/">UCP</a>
  </div>
  <div id="headerwrapper">
  <header>
    <a id="name" href="<?php echo site_url("/"); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home">Junge <span class="bold">PIRATEN</span></a>
    <img id="signet" src="<?php bloginfo('template_directory'); ?>/img/signet.png" />
    <?php function menu_empty() {}; wp_nav_menu(array('container' => 'nav', 'container_class' => '', 'theme_location' => 'primary', 'fallback_cb' => menu_empty, 'link_before' => '')); ?>
    <div id="header-right-skew">
     <div id="header-right-skew-background">
     </div>
    </div>
    <div id="header-right">
      <div id="social">
        <a class="icon-twitter" href="https://twitter.com/#!/jungePiraten" title="Twitter"></a>
        <a class="icon-facebook" href="https://facebook.com/jungePiraten" title="Facebook"></a>
        <a class="icon-picture" href="http://flickr.com/photos/jungePiraten" title="Flickr"></a>
        <a class="icon-google-plus-sign" href="https://plus.google.com/111687817103191810370" title="Google Plus"></a>
        <a class="icon-github" href="https://github.com/jungepiraten" title="GitHub"></a>
      </div>
      <a id="mitglied-werden" href="https://anmelden.junge-piraten.de/"></a>
      <form action="<?php echo site_url("/"); ?>" method="get" id="search-form">
          <input type="text" placeholder="Suchbegriff" name="s" />
          <button class="submit" type="submit"><i class="icon-search"></i></button>
      </form>
    </div>
  </header>
  </div>
  <div id="wrapper">

  <?php if(is_home()) { ?>  
  <a href="/2012/06/30/junge-piraten-beteiligen-sich-an-der-aktion-schlussel-nach-brussel/" id="slider-link"><div id="slider">
    <div class="box">
      <span class="plus">+</span>
      <h1><span>Brüsselreise</span></h1>
      <div class="text">Junge Piraten zu Besuch in Brüssel</div>
    </div>
  </div></a>
  <?php } ?>