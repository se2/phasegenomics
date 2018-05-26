<?php
	/**
	 * Template Name: Products Overview
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

<!-- Banner -->
<section class="page bg-cover bg-center-top banner" style="background-image:url('<?php the_field( 'billboard_background_image' ); ?>');">
	<div class="main-container pos-rel h100p">
		<div class="grid-x h100p flex-bottom">
			<div class="cell small-12 large-7">
				<h3 class="white-color bold text-shadow uppercase banner__title"><?php the_field( 'page_title' ); ?></h3>
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->

<!-- Big Text -->
<section class="page page-block page-block--text">
	<div class="container pos-rel">
		<div class="grid-x">
			<div class="cell">
				<h2 class="lighter text-center secondary-color">Hi-C genome assembly and metagenome deconvolution products and services</h2>
				<p class="text-center">
					Get complete data with clear interpretations to quickly advance your research and publications.
					Our breadth of delivered data also enables researchers to explore future applications and make
					new discoveries hidden in every genome.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- /Big Text -->

<!-- CTA -->
<section class="home home--cta bg-cover bg-center-right" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/cta-bg.png');">
	<div class="container">
			<div class="grid-x">
				<div class="cell small-12 medium-12 large-7">
					<h5 class="title blue-color">Interested in proximity-guided assembly?</h5>
					<a href="<?php the_clean_url(); ?>/contact" class="secondary-button secondary-button--small">Contact Us</a>
				</div>
			</div>
	</div>
</section>
<!-- /CTA -->

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
