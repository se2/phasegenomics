<?php
/*
Template Name: Terms of Service
*/
?>

<?php get_header(); ?>

		<!-- DESCRIPTION -->
		<div class="fullwidth-module" id="<?php echo get_field('section_id'); ?>" style="background: url('<?php echo get_field('background_1'); ?>');">
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<p><?php echo get_field('text_area_1'); ?></p>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
