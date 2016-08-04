<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Masonry_PK
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'masonry-pk' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-inverse" role="navigation">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>

					<?php masonry_pk_logo(); ?>
	    		</div>
				<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
					<?php
			            wp_nav_menu( array(
			                'theme_location'    => 'primary',
			                'container'         => false,
			                'menu_class'        => 'nav navbar-nav navbar-left',
			                'fallback_cb'       => 'masonry_pk_bootstrap_navwalker::fallback',
			                'walker'            => new masonry_pk_bootstrap_navwalker())
			            );
		        	?>
	    		</div> <!-- .navbar-collapse -->
        	</div><!-- /.container -->
		</nav><!-- .navbar .navbar-default -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">