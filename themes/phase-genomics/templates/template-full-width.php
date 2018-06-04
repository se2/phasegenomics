<?php
	/**
	 * Template Name: Full Width (No Sidebar)
	 *
	 * @category   Template
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

			<main id="main" class="large-12 medium-12 columns" role="main">

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
			?>
			<?php get_template_part( 'parts/loop', 'page' ); ?>
			<?php
				endwhile;
			endif;
			?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
