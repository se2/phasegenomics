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
			default:
				break;
		}
	endwhile;
endif;
