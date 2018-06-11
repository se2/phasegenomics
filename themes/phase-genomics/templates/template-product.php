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

	<?php if ( get_field( 'page_intro_title' ) || get_field( 'page_intro_content' ) ) : ?>
	<!-- Page Intro -->
	<section class="page page-block page-block--text">
		<div class="container pos-rel">
			<div class="grid-x">
				<div class="cell">
					<h2 class="lighter text-center secondary-color"><?php the_field( 'page_intro_title' ); ?></h2>
					<p class="text-center"><?php the_field( 'page_intro_content' ); ?></p>
				</div>
			</div>
		</div>
	</section>
	<!-- /Page Intro -->
	<?php endif; ?>

	<?php get_template_part( 'parts/page', 'blocks' ); ?>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

</article>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
