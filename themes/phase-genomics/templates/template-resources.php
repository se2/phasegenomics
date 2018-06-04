<?php
	/**
	 * Template Name: Resources
	 *
	 * @category   Template
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
?>

<?php get_template_part( 'parts/page', 'header' ); ?>

<div class="content-padding">

	<div class="page page-block page-block--title">
		<div class="main-container">
			<h2 class="text-center secondary-color mb50"><?php the_title(); ?></h2>
		</div>
	</div>

<?php get_template_part( 'parts/page', 'blocks' ); ?>

</div>

<?php get_template_part( 'parts/page', 'footer' ); ?>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
