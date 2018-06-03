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
					<h2 class="lighter text-center secondary-color">
						ProxiMeta Hi-C is available as both a kit-plus-software product and a service.
					</h2>
				</div>
				<div class="cell large-10 large-centered">
					<p class="text-center small">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum vestibulum finibus.
						Phasellus magna nibh, egestas eu porttitor eu, pretium sit amet nulla. Ut aliquam justo id quam efficitur,
						a molestie ex finibus. Etiam eros nulla, commodo vitae accumsan a, porttitor et quam. In consequat molestie
						velit, vitae commodo risus. Integer ultricies arcu felis, euismod imperdiet massa viverra vitae. Curabitur
						id luctus justo. Duis eleifend maximus metus, ac rutrum tortor pretium eu. Suspendisse blandit justo
						interdum fermentum tristique. Integer porttitor elit augue.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /Big Text -->

	<?php get_template_part( 'parts/page', 'blocks' ); ?>

	<?php if ( get_field( 'cta_group_title' ) && get_field( 'ctas' ) ) : ?>
	<!-- CTAs Group -->
	<div class="page-block page-block--cta-group" style="background-image:url('<?php the_field( 'background_image' ); ?>');">
		<div class="main-container">
			<h2 class="white-color text-center lighter mb0"><?php the_field( 'cta_group_title' ); ?></h2>
			<div class="text-center page-block--cta-group__btn-group">
				<?php
				$ctas = get_field( 'ctas' );
				foreach ( $ctas as $key => $cta ) :
				?>
				<a href="<?php echo esc_attr( $cta['cta_button_link'] ); ?>" class="button blue large uppercase regular"><?php echo esc_html( $cta['cta_button_title'] ); ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- /CTAs Group -->
	<?php endif; ?>

	<?php get_template_part( 'parts/page', 'footer' ); ?>

</article>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
