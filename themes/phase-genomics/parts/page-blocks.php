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
		switch ( get_row_layout() ) :
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
				<a href="#" class="accordion-title bold primary-color"><?php echo $faq['question']; ?></a>
				<div class="accordion-content" data-tab-content>
					<?php echo $faq['answer']; ?>
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
			case 'cta_block':
				$layout = get_sub_field( 'cta_size' );
?>
<!-- CTA Block -->
<section class="home page-block--cta <?php echo ( 'large' === $layout ) ? 'page-block--cta--large bg-center' : 'bg-center-right'; ?> bg-cover" style="background-image:url('<?php the_sub_field( 'background_image' ); ?>');">
	<div class="container <?php echo ( 'large' === $layout ) ? 'h100p' : ''; ?>">
			<div class="grid-x <?php echo ( 'large' === $layout ) ? 'h100p flex-center-items' : ''; ?>">
				<div class="cell small-12 medium-12 <?php echo ( 'large' === $layout ) ? 'large-12 text-center' : 'large-7'; ?>">
					<?php if ( 'large' === $layout ) : ?>
					<h2 class="title" style="color:<?php the_sub_field( 'cta_title_color' ); ?>"><?php the_sub_field( 'cta_title' ); ?></h2>
					<?php else : ?>
					<h5 class="title" style="color:<?php the_sub_field( 'cta_title_color' ); ?>"><?php the_sub_field( 'cta_title' ); ?></h5>
					<?php endif; ?>
					<a href="<?php the_sub_field( 'cta_link' ); ?>" class="button secondary uppercase <?php echo ( 'large' === $layout ) ? 'large' : 'small'; ?>"><?php the_sub_field( 'cta_button_title' ); ?></a>
				</div>
			</div>
	</div>
</section>
<!-- /CTA Block -->
<?php
				break;
			case '2_column_testimonials_block':
?>
<!-- Home Quotes -->
<section class="home home--quotes">
	<div class="container text-center">
		<h2 class="secondary-color"><?php the_sub_field( 'block_title' ); ?></h2>
		<?php if ( have_rows( 'testimonials' ) ) : ?>
		<div class="grid-x grid-margin-x home--quotes__wrapper">
			<?php
			while ( have_rows( 'testimonials' ) ) :
				the_row();
			?>
			<div class="cell medium-6 home--quotes__cell">
				<p class="quote"><?php the_sub_field( 'testimonial' ); ?></p>
				<strong class="referee primary-color"><?php the_sub_field( 'referee' ); ?></strong>
				<p class="source"><?php the_sub_field( 'source' ); ?></p>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- /Home Quotes -->
<?php
				break;
			case 'latest_blog_block':
?>
<!-- Latest Blog Posts -->
<div class="page page-block page-block--posts page-block--padding bg-cover bg-center-bottom" style="background-image:url('<?php the_sub_field( 'background_image' ); ?>');">
	<div class="main-container">
		<h2 class="text-center secondary-color lighter"><?php the_sub_field( 'block_title' ); ?></h2>
		<div class="grid-x grid-margin-x page-block--posts__grid">
			<?php
			$args  = array(
				'post_type'      => 'post',
				'posts_per_page' => '3',
				'orderby'        => 'post_date',
				'order'          => 'DESC',
				'post_status'    => 'publish',
			);
			$posts_query = new WP_Query( $args );
			while ( $posts_query->have_posts() ) :
				$posts_query->the_post();
				$thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
			?>
			<div class="cell small-12 medium-4 text-center box-shadow--posts" style="background-color:#ffffff;">
				<div class="page-block--posts__thumbnail bg-contain bg-center" style="background-image:url('<?php echo esc_attr( $thumb_url ); ?>');"></div>
				<div class="page-block--posts__info">
					<p class="bold"><?php the_date( 'F d, Y' ); ?></p>
					<p class="mb0"><a class="primary-color light" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<!-- /Latest Blog Posts -->
<?php
				break;
			case '2_column_links_block':
				$links   = get_sub_field( 'links' );
				$columns = array_chunk( $links, ceil( count( $links ) / 2 ) );
?>
<!-- 2-Column News -->
<div class="page page-block page-block--news" style="background-color:<?php the_sub_field( 'background_color' ); ?>;">
	<div class="main-container">
		<h2 class="text-center secondary-color lighter"><?php the_sub_field( 'block_title' ); ?></h2>
		<div class="grid-x grid-margin-x page-block--news__grid">
			<div class="cell small-12 medium-6">
				<?php foreach ( $columns[0] as $key => $link ) : ?>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date"><?php echo esc_html( $link['link_date'] ); ?></p>
					<p class="mb0">
						<a href="<?php echo esc_attr( $link['link_url'] ); ?>" class="primary-color light" target="_blank">
							<?php echo esc_html( $link['link_title'] ); ?>
						</a>
					</p>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="cell small-12 medium-6">
				<?php foreach ( $columns[1] as $key => $link ) : ?>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date"><?php echo esc_html( $link['link_date'] ); ?></p>
					<p class="mb0">
						<a href="<?php echo esc_attr( $link['link_url'] ); ?>" class="primary-color light" target="_blank">
							<?php echo esc_html( $link['link_title'] ); ?>
						</a>
					</p>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php if ( get_sub_field( 'block_cta_title' ) && get_sub_field( 'block_cta_link' ) ) : ?>
		<div class="text-center">
			<a href="<?php the_sub_field( 'block_cta_link' ); ?>" class="button secondary uppercase"><?php the_sub_field( 'block_cta_title' ); ?></a>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- /2-Column News -->
<?php
				break;
			case 'left_right_text_block':
				$bg_size = get_sub_field( 'background_size' ) ? get_sub_field( 'background_size' ) : 'bg-contain';
?>
<!-- 2-Column Text Block -->
<section class="page page-block page-block--text-2col <?php echo ( 'right' === get_sub_field( 'block_layout' ) ) ? 'bg-center-left ' : 'bg-center-right '; echo esc_attr( $bg_size ); ?>" style="background-image:url('<?php the_sub_field( 'background_image' ); ?>');">
	<div class="main-container">
		<div class="grid-x <?php echo ( 'right' === get_sub_field( 'block_layout' ) ) ? 'grid-right' : ''; ?>">
			<div class="cell large-7">
				<h2 class="lighter secondary-color fz-36"><?php the_sub_field( 'block_title' ); ?></h2>
				<?php the_sub_field( 'block_content' ); ?>
				<?php if ( get_sub_field( 'block_cta_title' ) && get_sub_field( 'block_cta_link' ) ) : ?>
				<a href="<?php the_sub_field( 'block_cta_link' ); ?>" class="button secondary uppercase semibold small"><?php the_sub_field( 'block_cta_title' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- /2-Column Text Block -->
<?php
				break;
			default:
				break;
		endswitch;
	endwhile;
endif;
