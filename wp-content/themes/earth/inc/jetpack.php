<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Earth
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function earth_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'earth_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function earth_jetpack_setup
add_action( 'after_setup_theme', 'earth_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function earth_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function earth_infinite_scroll_render
