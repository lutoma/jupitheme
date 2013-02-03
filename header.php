<?php $options = get_option('kb_theme_options'); ?>
<!doctype html>
<html lang="de">
	<head>
		<title><?php wp_title('–', true, 'right'); bloginfo('name'); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<?php if (is_single() || is_page()): ?>
			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID)); ?>
			<meta name="description" content="<?php echo strip_tags(wp_trim_words($post->post_content, 55, '')); ?>" />
			<meta name="twitter:card" content="summary" />
			<meta name="twitter:site" content="@jungePiraten" />
			<meta name="twitter:url" content="<?php echo get_permalink($post->ID); ?>" />
			<meta name="twitter:image" content="<?php echo $image[0]; ?>" />
			<meta name="twitter:title" content="<?php wp_title('', true, ''); ?>" />
			<meta name="twitter:description" content="<?php echo strip_tags(wp_trim_words($post->post_content, 55, '')); ?>" />
		<?php else: ?>
			<meta name="description" content="Die Jungen Piraten sind die Jugendorganisation der Piratenpartei und setzen sich für die Belange Jugendlicher in der Politik ein." />
		<?php endif; ?>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700|Open+Sans+Condensed:300,700|Viga:400" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
		<link rel="icon" type="image/png" href="https://static.junge-piraten.de/favicon.png" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php if(!empty($options['skyline'])): ?>
			<style>
				body {
					background: url(<?php echo $options['skyline']; ?>) repeat-x bottom left #046D8B;
					background-attachment: fixed !important;
				}
			</style>
		<?php endif; ?>

		<!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>
	<body>
		<!--[if lt IE 9]>
			<div class="old_browser_warning">
				<h1>Oh nein, dein Webbrowser ist veraltet!</h1>
				<div>Dein Webbrowser ist veraltet! Das ist leider problematisch, weil unsere Seite nur in aktuellen Browsern korrekt angezeigt werden kann – Ausserdem haben alte Browserversionen oft gravierende Sicherheitsprobleme. Bitte <a href="http://browsehappy.com/">installiere einen aktuellen Browser</a>, um diese Seite korrekt dargestellt zu sehen.</div>
			</div>
		<![endif]-->

		<div id="topbar">
			<a href="https://wiki.junge-piraten.de/wiki/<?php echo $options['wikilink']; ?>">Wiki</a>
			<a href="https://forum.junge-piraten.de/viewboard.php?boardid=<?php echo $options['forumlink']; ?>">Forum</a>
			<a href="https://ucp.junge-piraten.de/">UCP</a>
		</div>
		<div id="headerwrapper">
		<header>
			<a id="name" href="<?php echo site_url("/"); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php if(isset($options['title']) && $options['title'] != '') { echo $options['title']; } else { ?>Junge <span class="bold">PIRATEN</span><?php } ?></a>
			<img id="signet" src="<?php bloginfo('template_directory'); ?>/img/signet.svg" />

			<?php function menu_empty() {}; wp_nav_menu(array('container' => 'nav', 'container_class' => '', 'theme_location' => 'primary', 'fallback_cb' => menu_empty, 'link_before' => '', 'before' => '<span class="divisor">//</span>')); ?>
			<div id="header-right">
				<div id="social">
					<?php if(!empty($options['twitter'])) { ?><a class="icon-twitter" href="https://twitter.com/#!/<?php echo $options['twitter']; ?>" title="Twitter"></a><?php } ?>
					<?php if(!empty($options['facebook'])) { ?><a class="icon-facebook" href="https://facebook.com/<?php echo $options['facebook']; ?>" title="facebook"></a><?php } ?>
					<?php if(!empty($options['flickr'])) { ?><a class="icon-flickr" href="http://flickr.com/photos/<?php echo $options['flickr']; ?>" title="flickr"><span>•</span><span>•</span></a><?php } ?>
					<?php if(!empty($options['googleplus'])) { ?><a class="icon-google-plus-sign" href="https://plus.google.com/<?php echo $options['googleplus']; ?>" title="googleplus"></a><?php } ?>
					<?php if(!empty($options['github'])) { ?><a class="icon-github" href="https://github.com/<?php echo $options['github']; ?>" title="github"></a><?php } ?>
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

		<?php if(is_home() && !is_paged() && false): ?>	
			<a href="/2012/06/30/junge-piraten-beteiligen-sich-an-der-aktion-schlussel-nach-brussel/" id="slider-link"><div id="slider">
				<div class="box">
					<span class="plus">+</span>
					<h1><span>Brüsselreise</span></h1>
					<div class="text">Junge Piraten zu Besuch in Brüssel</div>
				</div>
			</div></a>
		<?php endif; ?>
		<aside>
			<?php dynamic_sidebar(); ?> 
			<a href="https://anmelden.junge-piraten.de/"><img src="<?php bloginfo('template_directory'); ?>/img/mitgliedwerden-banner.png" /></a>
			<a href="/die-jungen-piraten/bankverbindung/"><img src="<?php bloginfo('template_directory'); ?>/img/spenden-banner.png" /></a>
		</aside>

