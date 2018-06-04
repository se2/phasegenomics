<?php
	/**
	 * Single Loop
	 *
	 * @category   Template
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail( 'full' ); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ),
			'after'  => '</div>',
		));
		?>
		<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', '' ); ?></p>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
