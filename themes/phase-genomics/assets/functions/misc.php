<?php
	/**
	 * Miscellaneous Functions
	 *
	 * @category   Function
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

/*
 * Global variables
 */

 // Hi-C Category, change this if admin changes category for Hi-C products.
global $hic_category;
$hic_category = 57;

 // Products Overview page ID.
global $products_overview_page;
$products_overview_page = 7;
/**
 * Print clean current site's URL.
 */
function the_clean_url() {
	echo esc_attr( get_site_url() );
}

/**
 * Get Products Query.
 *
 * @param  int    $category_id Product category ID.
 * @param  String $operator Logic to query products ('IN', 'NOT IN', 'AND').
 * @return Object
 */
function get_products_query( $category_id, $operator = 'IN' ) {
	/**
	 * Keep this $tax_query simple, MySQL doesn't deal well with the multiple joins to the same table (wp_postmeta).
	 * https://wordpress.stackexchange.com/questions/294039/too-slow-when-using-both-tax-query-and-meta-query-both-in-wp-query
	 */
	$tax_query = array(
		array(
			'taxonomy' => 'product_cat',
			'field'    => 'term_id',
			'terms'    => $category_id,
			'operator' => $operator,
		),
	);
	$args      = array(
		'post_type'   => 'product',
		'post_status' => 'publish',
		'order'       => 'ASC',
		'tax_query'   => $tax_query,
	);
	return ( new WP_Query( $args ) );
}
