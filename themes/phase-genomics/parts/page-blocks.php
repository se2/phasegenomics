<?php
	/**
	 * Page Blocks
	 *
	 * @category   Components
	 * @package    FoundationPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

if ( have_rows( 'page_blocks' ) ) :
	while ( have_rows( 'page_blocks' ) ) :
		the_row();
		switch ( get_row_layout() ) {
			case 'editor_block':
?>
<!-- Editor Block -->
<div class="page page-block page-block--editor" style="background-color:<?php the_sub_field( 'background_color' ); ?>;">
	<div class="main-container">
		<div class="grid-x">
			<div class="cell large-10 large-centered">
				<?php the_sub_field( 'editor_content' ); ?>
			</div>
		</div>
	</div>
</div>
<!-- /Editor Block -->
<?php
				break;
			case 'cta_group_block':
?>
<!-- CTAs Group -->
<div class="page-block page-block--cta-group" style="background-image:url('<?php the_sub_field( 'background_image' ); ?>');">
	<div class="main-container">
		<h2 class="white-color text-center lighter mb0"><?php the_sub_field( 'cta_group_title' ); ?></h2>
		<div class="text-center page-block--cta-group__btn-group">
			<?php
			$ctas = get_sub_field( 'ctas' );
			foreach ( $ctas as $key => $cta ) :
			?>
			<a href="<?php echo esc_attr( $cta['cta_button_link'] ); ?>" class="button blue large uppercase regular"><?php echo esc_html( $cta['cta_button_title'] ); ?></a>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- /CTAs Group -->
<?php
				break;
			case 'faq_block':
?>
<!-- FAQ Block -->
<div class="page-block page-block--faq mb50">
	<div class="main-container">
		<h3 class="secondary-color regular mb20 fz-36"><?php the_sub_field( 'faq_title' ); ?></h3>
		<?php if ( get_sub_field( 'faqs' ) ) : ?>
		<ul class="accordion accordion--faq" data-accordion data-allow-all-closed="true">
			<?php
			$faqs = get_sub_field( 'faqs' );
			foreach ( $faqs as $key => $faq ) :
			?>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title bold primary-color"><?php echo esc_html( $faq['question'] ); ?></a>
				<div class="accordion-content" data-tab-content>
					<?php echo esc_html( $faq['answer'] ); ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
</div>
<!-- FAQ Block -->
<?php
				break;
			default:
				break;
		}
	endwhile;
endif;
