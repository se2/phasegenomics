<?php
	/**
	 * Template Name: Publications
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

<!-- 2-Column News -->
<div class="page page-block page-block--news">
	<div class="main-container">
		<h2 class="text-center secondary-color light">Papers</h2>
		<div class="grid-x grid-margin-x page-block--news__grid">
			<div class="cell small-12 medium-6">
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">February 10, 2018</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Unveils a Hi-C Kit for Human Samples, Expanding Their Hi-C Product Portfolio »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">January 11, 2018</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Launches World’s First Commercial Hi-C Kits for Plants and Animals »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">December 3, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							With $1M in funding, Phase Genomics looks to crack genetic codes and discover unknown bacteria »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">October 6, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Announces Availability of Kit-based ProxiMeta™ Hi-C Metagenome Deconvolution »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">October 6, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Pushes Forward With Hi-C-Based Metagenome Deconvolution Kit, Service »
						</a>
					</p>
				</div>
			</div>
			<div class="cell small-12 medium-6">
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">July 7, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Proximo Hi-C a "New technology to boost genome quality" in Science »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">May 16, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							ProxiMeta Hi-C Metagenome Deconvolution Now Available »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">April 11, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phyzen Partners To Distribute Phase Genomics’ Services in South Korea »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">March 29, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics and Hi-C Scaffolding Featured inthe Atlantic »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">March 6, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Nature Genetics Publishes Most Contiguous Mammalian Genome Ever, Created with Proximo Hi-C »
						</a>
					</div>
			</div>
		</div>
		<div class="text-center">
			<a href="/#!" class="button secondary uppercase">Read More</a>
		</div>
	</div>
</div>
<!-- /2-Column News -->

<!-- 2-Column News -->
<div class="page page-block page-block--news" style="background-color:#eef7fd;">
	<div class="main-container">
		<h2 class="text-center secondary-color light">In the News</h2>
		<div class="grid-x grid-margin-x page-block--news__grid">
			<div class="cell small-12 medium-6">
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">February 10, 2018</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Unveils a Hi-C Kit for Human Samples, Expanding Their Hi-C Product Portfolio »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">January 11, 2018</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Launches World’s First Commercial Hi-C Kits for Plants and Animals »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">December 3, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							With $1M in funding, Phase Genomics looks to crack genetic codes and discover unknown bacteria »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">October 6, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Announces Availability of Kit-based ProxiMeta™ Hi-C Metagenome Deconvolution »
						</a>
					</p>
				</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">October 6, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics Pushes Forward With Hi-C-Based Metagenome Deconvolution Kit, Service »
						</a>
					</p>
				</div>
			</div>
			<div class="cell small-12 medium-6">
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">July 7, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Proximo Hi-C a "New technology to boost genome quality" in Science »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">May 16, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							ProxiMeta Hi-C Metagenome Deconvolution Now Available »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">April 11, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phyzen Partners To Distribute Phase Genomics’ Services in South Korea »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">March 29, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Phase Genomics and Hi-C Scaffolding Featured inthe Atlantic »
						</a>
					</div>
				<div class="page-block--news__item">
					<p class="bold uppercase page-block--news__date">March 6, 2017</p>
					<p class="mb0">
						<a href="/#!" class="primary-color light">
							Nature Genetics Publishes Most Contiguous Mammalian Genome Ever, Created with Proximo Hi-C »
						</a>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- /2-Column News -->

<!-- Latest Blog Posts -->
<div class="page page-block page-block--posts bg-cover bg-center-bottom" style="background-image:url('<?php the_clean_url(); ?>/wp-content/uploads/2018/05/latest-blog.png');">
	<div class="main-container">
		<h2 class="text-center secondary-color light">Latest Blog Posts</h2>
		<div class="grid-x grid-margin-x page-block--posts__grid">
			<?php
			$args  = array(
				'post_type' => 'post',
				'posts_per_page' => '3',
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_status' => 'publish',
			);
			$posts_query = new WP_Query( $args );
			while ( $posts_query->have_posts()) :
				$posts_query->the_post();
				$thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
			?>
			<div class="cell small-12 medium-4 text-center box-shadow--posts" style="background-color:#ffffff;">
				<div class="page-block--posts__thumbnail bg-contain bg-center" style="background-image:url('<?php echo esc_attr( $thumb_url ) ?>');"></div>
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

<?php get_template_part( 'parts/page', 'footer' ); ?>

<?php endwhile; else : ?>
	<div class="main-container">
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
