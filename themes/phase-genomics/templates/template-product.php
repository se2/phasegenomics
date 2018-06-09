<?php
	/**
	 * Template Name: Product Detail
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'parts/page', 'header' ); ?>

	<!-- Big Text -->
	<section class="page page-block page-block--text">
		<div class="container pos-rel">
			<div class="grid-x">
				<div class="cell large-11 large-centered">
					<h2 class="lighter text-center secondary-color">Delve into the microbiome</h2>
				</div>
				<div class="cell large-10 large-centered">
					<p class="text-center small">
						Extract reference-quality genomes for rare, novel, and unculturable microbes directly from mixed populations.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /Big Text -->

	<?php get_template_part( 'parts/page', 'blocks' ); ?>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

</article>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
