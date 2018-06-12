<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

		<div class="header-bg" style="background: url('<?php echo get_field('background_image'); ?>');">
				<div class="row">
					<div class="large-10 medium-12 large-centered medium-centered columns">
						<div class="fullwidth-module">
							<h2 class="bb-header"><?php echo get_field('header'); ?></h2>
							<p class="bb-sub"><?php echo get_field('sub_header'); ?></p>
						</div>
                    </div>
                </div>
   		 	</div>

		<!-- SECTION 1 HEADING -->
		<div class="fullwidth-module" style="background: url('<?php echo get_field('background_4'); ?>'); padding: 3.5rem 0 2.5rem">
			<div class="row">
				<div class="medium-10 large-centered medium-centered columns">
					<p style="display:inline"><?php echo get_field('blog_body'); ?></p>
				</div>
			</div>
		</div>

	<!-- POSTS -->
	<article>
		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<hr>
		<div class="row">
				<div class="medium-10 large-centered medium-centered columns">
					<i><p><?php the_date(); ?></p></i>
					<h3><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h3>
						<table style="display: inline">
						<tr>
						<td>
						<div class="thumbnail"><?php the_post_thumbnail('medium_large') ?></div>
						</td>
						<td>
						<div class="excerpt"><p><?php ; echo get_the_excerpt(); ?></p></div>
						</td></tr>
						</table>
				</div>
		</div>


		<?php endwhile; ?>
		<hr>
		<p />

		<?php if ($paged > 1) { ?>
		<div class="row">
				<nav id="nav-posts">
					<div class="medium-10 large-centered medium-centered columns" style="text-align: center">
						<div class="prev" style="display: inline"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						<div style="display: inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
						<div class="next" style="display: inline"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
					</div>
				</nav>
		</div>

		<?php } else { ?>
		<div class="row">
			<nav id="nav-posts">
				<center>
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				</center>
			</nav>
		</div>

		<?php } ?>

		<?php wp_reset_postdata(); ?>
	</article>


	<!-- CTA -->
		<div class="cta-fullwidth-banner">
			<div class="row">
				<div class="large-10 medium-12 large-centered medium-centered columns">
					<p class="cta-header"><?php echo get_field('cta_caption'); ?></p>
					<div class="button-div">
						<?php if( have_rows('cta') ): ?>
						<?php while( have_rows('cta') ): the_row();
						// vars
						$ctabl = get_sub_field('cta_button_text');
						$link = get_sub_field('link');
						$ctabl = get_sub_field('cta_button_link');
						$ctaex = get_sub_field('cta_external');
						?>
							<?php if( get_sub_field('link') == 'Internal' ): ?>
								<a class="orange-button" href="<?php echo the_sub_field('cta_button_link'); ?>"><?php echo the_sub_field('cta_button_text'); ?></a>
							<?php endif; ?>

							<?php if( get_sub_field('link') == 'External' ): ?>
								<a class="orange-button" href="<?php echo the_sub_field('cta_external'); ?>" target="_blank"><?php echo the_sub_field('cta_button_text'); ?></a>
							<?php endif; ?>

						<?php endwhile; ?>
						<?php endif; ?>


					</div>
				</div>
			</div>
		</div>


<?php get_footer(); ?>
