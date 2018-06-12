<?php
	/**
	 * Page Header
	 *
	 * @category   Components
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

?>

<?php if ( get_field( 'show_footer_cta' ) ) : ?>
<!-- CTA -->
<section class="home page-block--cta bg-cover bg-center-right" style="background-image:url('<?php the_field( 'page_footer_background_image' ); ?>');">
	<div class="container">
			<div class="grid-x">
				<div class="cell small-12 medium-12 large-7">
					<h5 class="title blue-color"><?php the_field( 'page_footer_cta_title' ); ?></h5>
					<a href="<?php the_field( 'page_footer_cta_link' ); ?>" class="button secondary uppercase small"><?php the_field( 'page_footer_cta_button_title' ); ?></a>
				</div>
			</div>
	</div>
</section>
<!-- /CTA -->
<?php endif; ?>
