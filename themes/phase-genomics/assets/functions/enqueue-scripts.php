<?php
	/**
	 * Site Scripts Enqueue
	 *
	 * @category   Functions
	 * @package    WordPress
	 * @subpackage Phase Genomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

/**
 * Enqueue all scripts.
 */
function site_scripts() {
	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way.

	// Load What-Input files in footer.
	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

	// Adding Foundation scripts file in the footer.
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist//js/foundation.min.js', array( 'jquery' ), '6.2.3', true );

	// Adding Slick carousel.
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/vendor/slick-carousel/slick.min.js', array( 'jquery' ), '6.2.3', true );

	// Twitter JavaScript.
	wp_enqueue_script( 'twitter-js', 'http://platform.twitter.com/widgets.js', array( 'jquery' ), '', true );

	// Adding scripts file in the footer.
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

	$data = array(
		'THEME_URL' => get_template_directory_uri(),
	);
	wp_localize_script( 'site-js', 'theme', $data );

	// Register Motion-UI.
	// phpcs:ignore
	// wp_enqueue_style( 'motion-ui-css', get_template_directory_uri() . '/vendor/motion-ui/dist/motion-ui.min.css', array(), '', 'all' );

	// Select which grid system you want to use (Foundation Grid by default).
	// wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/css/foundation.min.css', array(), '', 'all' );
	// wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation-flex.min.css', array(), '', 'all' );

	// Foundation icons.
	wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/vendor/foundation-icons/foundation-icons.css', array(), '', 'all' );

	// Register main stylesheet.
	// wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
	wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/app.min.css', array(), '', 'all' );

	// Comment reply script for threaded comments.
	if ( is_singular() && comments_open() && ( get_option( 'thread_comments' ) === 1 ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );

