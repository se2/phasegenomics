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

<div class="page page-block page-block--title">
	<div class="main-container">
		<h2 class="text-center secondary-color mb50 mt50 lighter"><?php the_title(); ?></h2>
	</div>
</div>

<?php get_template_part( 'parts/page', 'blocks' ); ?>

<?php
$show_reports = false;
if ( $show_reports ) :
?>
<!-- Example Data & Reports -->
<div class="page page-block page-block--posts page-block--padding bg-cover bg-center-bottom" style="background-color:#eef7fd;">
	<div class="main-container">
		<h2 class="text-center secondary-color lighter mb40">Example Data & Reports</h2>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4">
				<strong class="fz-18 secondary-color">ProxiMeta: Fecal Sample</strong>
				<ul class="mt10">
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Deconvoluted genome FASTAs</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Sample ProxiMeta report</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Initial shotgun assembly FASTA</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Hi-C read FASTQs</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Paper</a></li>
				</ul>
			</div>
			<div class="cell small-12 medium-4">
				<strong class="fz-18 secondary-color">Proximo: Goat Sample</strong>
				<ul class="mt10">
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Chromosome-scale scaffold FASTA</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Sample Proximo report</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Sample Proximo heatmap</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Initial draft assembly contig FASTA</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Hi-C read FASTQs</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Paper</a></li>
				</ul>
			</div>
			<div class="cell small-12 medium-4">
				<strong class="fz-18 secondary-color">Acute Myeloid Leukemia<br>(AML) Sample</strong>
				<ul class="mt10">
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Sample structural variation (SV) report</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Sample SV figure</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Human reference genome (hg38)</a></li>
					<li class="mb0"><a href="#" class="primary-color fz-14 light ">Hi-C read FASTQs</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /Example Data & Reports -->
<?php endif; ?>

<?php get_template_part( 'parts/page', 'footer' ); ?>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
