<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

 <head>
 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
	 
	<?php // Blueprint ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/print.css" type="text/css" media="print" />
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
	
	<?php // default style ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie.css" type="text/css" media="all"><![endif]-->
	 
	<?php // jQuery ?>
	<script src="<?php bloginfo('template_url'); ?>/lib/jquery/jquery-1.3.2.min.js" type="text/javascript" ></script>
	<script type="text/javascript">
		$j = jQuery.noConflict();
	</script>
	
	<?php // rounded corners ?>
	<script src="<?php bloginfo('template_url'); ?>/lib/jquery/corners/jquery.corner.js" type="text/javascript"></script>

	<?php // form validation ?>
	<?php if (is_single()) : ?>
		<script src="<?php bloginfo('template_url'); ?>/lib/jquery/validate/jquery.validate.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/commentValidation.js" type="text/javascript"></script>
	<?php endif; ?>
	
	<?php //tooltips ?>
	<script src="<?php bloginfo('template_url'); ?>/lib/jquery/tooltips/jquery.tooltip.pack.js" type="text/javascript"></script>
	
	<?php // tooltips z-index fixes for ie ?>
	<!--[if IE]><script src="<?php bloginfo('template_url'); ?>/lib/jquery/bgiframe/jquery.bgiframe.pack.js" type="text/javascript"></script><![endif]-->
	
	<?php // hoverFlow - avoid animation queuing issues ?>
	<script src="<?php bloginfo('template_url'); ?>/lib/jquery/hoverFlow/jquery.hoverflow.min.js" type="text/javascript"></script>
	
	<?php // Syntax Highlighter ?>	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/xregexp/xregexp-1.5.0-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/syntaxhighlighter/src/shCore.js"></script>	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/syntaxhighlighter/src/shAutoloader.js"></script>
	<link href="<?php bloginfo('template_url'); ?>/lib/syntaxhighlighter/styles/shCore.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php bloginfo('template_url'); ?>/lib/syntaxhighlighter/styles/shThemeFadeToGrey.css" rel="stylesheet" type="text/css" media="all" />
	
	<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript"></script>
	
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	 
	<!-- Feeds -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 @ FeedBurner" href="https://feeds.feedburner.com/MidnightLight" /> 
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url'); ?>/xmlrpc.php?rsd" />

	<?php // SearchBox swaptext ?>
	<script src="<?php bloginfo('template_url'); ?>/js/search.js" type="text/javascript"></script>

	<?php wp_head(); ?>
 </head>
 
 <?php flush(); ?>
 
 <body> 
 	<div class="container" id="wrapper">
		<div class="container" id="innerWrapper">
			<div class="span-24 last" id="logoTile">
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>" title="Home">
						<span><?php bloginfo('name'); ?></span>
					</a>
				</div>
			</div>
			<div class="span-24 last" id="layoutMenu">
				<div class="span-18">
					<ul id="menu">
							<li><a href="<?php bloginfo('url'); ?>" title="Home">Home</a></li>
							<!-- WP Pages -->
							<?php
							if($options['menu_type'] == 'categories') {
								wp_list_categories('depth=2&title_li=0&orderby=name&show_count=0');
							} else {
								wp_list_pages('depth=2&title_li=0&sort_column=menu_order');
							}
						?>
						<?php if( current_user_can('manage_options')) : ?>
						<li><a href="<?php echo admin_url(); ?>" title="Administrate">Admin</a></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="span-6 last" id="layoutSearch">
					<div id="searchBox">
						<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
							<input type="text" name="s" id="s" size="10" value="Search" class="swap_value" title="Enter search term and hit enter to start searching" />
							<input type="image" src="<?php bloginfo('template_url'); ?>/images/btn_search_box.png" id="go" alt="Search" title="Search" value="<?php _e('Search'); ?>" />
						</form>
					</div>

				</div>
			</div>
			<div class="span-24 last" id="mainWrapper">
				<div class="span-18" id="mainContentWrapper">
					<div id="mainContent">
					
						<p>