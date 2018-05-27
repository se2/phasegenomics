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

<!-- Product CTA -->
<section class="page page-block page-block--product-cta bg-cover bg-center-bottom" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/Proximeta.png');">
	<div class="main-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-8">
				<h4 class="bold uppercase secondary-color">PROXIMETA HI-C METAGENOMIC DECONVOLUTION</h4>
				<p>
					A true revolution in microbial research, ProxiMeta Hi-C metagenome deconvolution
					offers researchers the ability to identify dozens or hundreds of high-quality,
					strain-level microbial genomes from a single sample, with no culturing or high
					molecular weight DNA extraction required. With high-quality genomes for microbes
					with as little as 0.05% cellular abundance in a sample, you can discover novel organisms
					and strains, identify plasmid-host relationships, study eukaryotic metagenomes, and more.
				</p>
			</div>
			<div class="cell large-3 large-offset-1">
				<a href="<?php the_clean_url(); ?>/product" class="button uppercase secondary w100p">Buy Kits</a>
				<a href="<?php the_clean_url(); ?>/product" class="button uppercase blue light w100p">Our Services</a>
				<a href="<?php the_clean_url(); ?>/product" class="button uppercase blue light w100p">Product FAQ</a>
			</div>
		</div>
	</div>
</section>
<!-- /Product CTA -->

<!-- Product CTA -->
<section class="page page-block page-block--product-cta bg-cover bg-center-bottom" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/bg-hex.png');">
	<div class="main-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-8">
				<h4 class="bold uppercase secondary-color">Proximo HI-C Scaffolding</h4>
				<p>
					The best solution on the market to create complete end-to-end chromosome-scale
					genome scaffolds—even from short-read assemblies–are our Proximo Hi-C genome scaffolding
					kits and services. Proximo Hi-C’s ability capture ultra-long genomic contiguity information
					from unbroken chromosomes enables researchers to answer questions difficult or impossible
					though other means, including structural variation, complex gene structure, gene linkage,
					gene regulation, and more.
				</p>
			</div>
			<div class="cell large-3 large-offset-1">
				<a href="<?php the_clean_url(); ?>/product" class="button uppercase secondary w100p">Buy Kits</a>
				<a href="<?php the_clean_url(); ?>/product" class="button uppercase blue light w100p">Our Services</a>
			</div>
		</div>
	</div>
</section>
<!-- /Product CTA -->

<!-- CTA -->
<section class="page page-block--cta bg-cover bg-center-right" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/cta-bg.png');">
	<div class="container">
			<div class="grid-x">
				<div class="cell small-12 medium-12 large-7">
					<h5 class="title blue-color">Interested in proximity-guided assembly?</h5>
					<a href="<?php the_clean_url(); ?>/contact" class="button secondary uppercase small">Contact Us</a>
				</div>
			</div>
	</div>
</section>
<!-- /CTA -->

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
