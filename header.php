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

		<!--[if lt IE 9]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" />
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

		<div id="nav-wrapper">
			<nav class='menu-pages-container'>
				<?php function menu_empty() {}; wp_nav_menu(array('container' => 'false', 'theme_location' => 'primary', 'fallback_cb' => menu_empty, 'link_before' => '')); ?>
				<div id="social" style="color: #fff;    float: right;">
					<a class="icon-twitter" href="https://twitter.com/#!/jungePiraten" title="Twitter"></a>
					<a class="icon-facebook" href="https://facebook.com/jungePiraten" title="facebook"></a>
					<a class="icon-flickr" href="http://flickr.com/photos/jungePiraten" title="flickr"><span>•</span><span>•</span></a>
					<a class="icon-google-plus-sign" href="https://plus.google.com/111687817103191810370" title="googleplus"></a>
					<a class="icon-github" href="https://github.com/jungePiraten" title="github"></a>
				</div>
			</nav>
		</div>

		<div id="headerwrapper">
		<header>
			<a id="name" href="<?php echo site_url("/"); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php if(isset($options['title']) && $options['title'] != '') { echo $options['title']; } else { ?>Junge PIRATEN<?php } ?></a>
			<img id="signet" src="<?php bloginfo('template_directory'); ?>/img/signet.svg" />
		</header>
		</div>
		<div id="wrapper">
			<aside>
				<?php dynamic_sidebar(); ?> 
			</aside>
			<section id="content-wrapper">
