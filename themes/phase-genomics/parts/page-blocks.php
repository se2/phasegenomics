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
			default:
				break;
		}
	endwhile;
endif;
