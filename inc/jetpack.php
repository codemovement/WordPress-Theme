<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Masonry_PK
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function masonry_pk_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'masonry_pk_jetpack_setup' );
