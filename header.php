<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js zero-margin"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(' | '); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="theme-color" content="#000000">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- FONTS -->
		<script src="https://use.fontawesome.com/5ecbfa525f.js"></script>
		
		<?php wp_head(); ?>
		<?php $options = get_option('rh_settings'); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header <?php if ( wp_is_mobile() ) echo 'sticky'; ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="cf">
					
					<?php
					if($options['logo']){
						echo '<a id="logo" href="'. home_url() .'"><img src="'. $options['logo'] .'" alt="'. get_bloginfo('name') .'" /></a>';
					} else {
						echo '<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="'. home_url() .'">'. get_bloginfo('name') .'</a></p>';
					}
					?>
					
					<div class="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<nav role="navigation" class="main-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
								 'container' => false,                           // remove nav container
								 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
								 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
								 'menu_class' => 'nav cf',               // adding custom nav class
								 'theme_location' => 'main-nav',                 // where it's located in the theme
								 'before' => '',                                 // before the menu
								   'after' => '',                                  // after the menu
								   'link_before' => '',                            // before each link
								   'link_after' => '',                             // after each link
								   'depth' => 0,                                   // limit the depth of the nav
								 'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</nav>
					
					<div class="social">
						<?php
						if($options['twitter_url']) { echo '<a href="'.$options['twitter_url'].'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>'; } else { echo ''; }
						if($options['instagram_url']) { echo '<a href="'.$options['instagram_url'].'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>'; } else { echo ''; }
						if($options['facebook_url']) { echo '<a href="'.$options['facebook_url'].'" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>'; } else { echo ''; }
						if($options['youtube_url']) { echo '<a href="'.$options['youtube_url'].'" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>'; } else { echo ''; }
						if($options['linkedin_url']) { echo '<a href="'.$options['linkedin_url'].'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>'; } else { echo ''; }
						?>
					</div>

				</div>

			</header>
