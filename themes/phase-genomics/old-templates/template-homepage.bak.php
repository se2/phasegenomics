<!-- Template Home -->
<?php get_header(); ?>

<!-- Rotating banner -->
<div class="rotating-header-banner">
	<div class="orbit" role="region" aria-label="News" data-orbit>
		<div class="orbit-wrapper">
			<ul class="centered orbit-container homepage-orbit-container">
				<?php if ( have_rows('rbanner') ): ?>
				<?php while ( have_rows('rbanner') ): the_row();
				// vars
				$rbanner_header = get_sub_field('rbanner_header', false, false);
				$rbanner_subheader = get_sub_field('rbanner_subheader');
				$rbanner_text = get_sub_field('rbanner_text');
				$rbanner_image = get_sub_field('rbanner_image');
				$rbanner_background_image = get_sub_field('rbanner_background_image');
				$rbanner_link = get_sub_field('rbanner_link');
				$rbanner_link_text = get_sub_field('rbanner_link_text');
				$rbanner_color_style = get_sub_field('rbanner_color_style');
				?>
				<?php if ( $rbanner_text != "" ): ?>
				<li class="centered orbit-slide homepage-orbit-slide header-bg columns" style="background: url('<?php echo $rbanner_background_image ?>');">
					<div class="row">
						<h1 class="<?php echo $rbanner_color_style == 'Light'? 'hp-bb-header' : 'hp-bb-header-dark'; ?>"><?php echo $rbanner_header; ?></h1>
						<p class="<?php echo $rbanner_color_style == 'Light'? 'hp-bb-sub' : 'hp-bb-sub-dark'; ?>"><?php echo $rbanner_subheader; ?></p>
					</div>
					<div class="row">
						<div class="medium-3 columns">&nbsp</div>
						<div class="medium-4 columns">
							<p class="<?php echo $rbanner_color_style == 'Light'? 'hp-bb-text' : 'hp-bb-text-dark'; ?>"><a target="_blank" class="<?php echo $rbanner_color_style == 'Light'? 'light-link' : ''; ?>" href="<?php echo $rbanner_link; ?>"><?php echo $rbanner_link_text; ?></a></p>
							<p class="<?php echo $rbanner_color_style == 'Light'? 'hp-bb-text' : 'hp-bb-text-dark'; ?>"><?php echo $rbanner_text; ?></p>
						</div>
						<div class="medium-2 columns">
							<div class="hp-bb-icon">
								<img class="three-mod-icon" src="<?php echo $rbanner_image['url']; ?>" alt="<?php echo $rbanner_image['alt'] ?>" />
							</div>
						</div>
						<div class="medium-3 columns">&nbsp</div>
					</div>
				</li>
				<?php else: ?>
				<li class="centered orbit-slide homepage-orbit-banner-slide header-bg columns" style="background: url('<?php echo $rbanner_background_image ?>');">
					<div class="row">
						<h1 class="<?php echo $rbanner_color_style == 'Light'? 'hp-bb-header' : 'hp-bb-header-dark'; ?>"><?php echo $rbanner_header; ?></h1>
						<p class="<?php echo $rbanner_color_style == 'Light'? 'hp-bb-sub' : 'hp-bb-sub-dark'; ?>"><?php echo $rbanner_subheader; ?></p>
					</div>
				</li>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
		<nav class="orbit-bullets homepage-orbit-bullets">
		<?php $bullet_counter = 0; while( have_rows('rbanner') ) : the_row(); $rbanner_image = get_sub_field('rbanner_image'); ?>
			<button<?php if( $bullet_counter === 0 ) : echo ' class="is-active"'; endif; ?> data-slide="<?php echo $bullet_counter; ?>">
				<span class="show-for-sr">Slide of <?php echo $rbanner_image['alt']; ?></span>
			</button>
		<?php $bullet_counter++; endwhile; ?>
		</nav>
	</div>
</div>
<!-- /Rotating banner -->

<!-- What We Do -->
<?php if ( get_field ( 'background_pattern' ) != "" ): ?>
<div class="image-bg" style="background: url('<?php echo get_field('background_pattern'); ?>');">
<?php else: ?>
<div class="grey-background">
<?php endif; ?>
	<?php if ( get_field( 'section_header' ) != "" ): ?>
	<div class="row">
		<div class="large-8 medium-10 large-centered medium-centered columns">
			<p class="section-header"><?php echo get_field('section_header'); ?></p>
			<p class="centered"><?php echo get_field('section_sub_header'); ?></p>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
		<?php if ( have_rows( 'homepage_modules' ) ): ?>
		<?php while ( have_rows( 'homepage_modules' ) ): the_row();
		// vars
		$icon = get_sub_field('icon');
		$header = get_sub_field('module_title');
		$text = get_sub_field('module_caption', false, false);
		$cta = get_sub_field('link_text');
		$link = get_sub_field('page_link');
		$jump = get_sub_field('page_jump');
		?>
		<?php if ( $icon != "" ): ?>
		<div class="large-4 medium-4 columns">
			<div class="grey-box">
				<div class="center-icon">
					<img class="three-mod-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
				</div>
				<p class="module-title"><?php echo $header; ?></p>
				<p class="centered"><?php echo $text; ?></p>
				<p class="centered"><a class="orange-button hover-center" href="<?php echo $link; ?><?php echo $jump; ?>"><?php echo $cta; ?></a></p>
			</div>
			<div class="orange-strip">
			</div>
		</div>
		<?php else: ?>
		<div class="large-4 medium-4 columns">
				<p class="section-header"><?php echo $header; ?></p>
				<h2 class="centered section-message"><?php echo $text; ?></h2>
				<p class="centered"><a class="orange-button hover-center" href="<?php echo $link; ?><?php echo $jump; ?>"><?php echo $cta; ?></a></p>
			<div class="orange-strip">
			</div>
		</div>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<!-- /What We Do -->

<!-- Kit Banner -->
<div class="image-bg" style="background: url('<?php echo get_field( 'kit_background_pattern' ); ?>');">
	<div class="kit-banner">
		<div class="row">
			<div class="medium-12 columns">
				<div class="row">
					<div class="kit-cell medium-5 columns">
						<div class="row">
							<img src="<?php echo get_field('kit_image'); ?>" class="kit-image" alt="<?php echo $icon['alt'] ?>" />
						</div>
						<div class="row">
							<p class="centered"><a class="orange-button hover-center" href="<?php echo the_field('kit_button_url'); ?>"><?php echo the_field('kit_button_text'); ?></a></p>
						</div>
					</div>
					<div class="kit-cell medium-7 columns">
						<h2 class="kit-header"><?php echo get_field('kit_banner_header'); ?></h2>
						<p><?php echo get_field('kit_banner_text'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Kit Banner -->

<!-- Testimonial Quote -->
<div class="row">
	<div class="large-10 medium-12 large-centered medium-centered columns">
		<div class="quote-container">
			<p class="quote w400 oblique centered"><?php echo get_field('quote'); ?></p>
			<p class="small-p centered"><?php echo get_field('source'); ?></p>
		</div>
	</div>
</div>
<!-- /Testimonial Quote -->

<!-- Committed to Success -->
<div class="image-bg" style="background: url('<?php echo get_field('background_image'); ?>');">
	<div class="row">
		<div class="large-8 medium-10 large-centered medium-centered columns">
			<div class="lower-center-icon">
				<?php
				$icon = get_field('icon');
				if ( ! empty( $icon ) ): ?>
				<img class="three-mod-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
				<?php endif; ?>
			</div>
			<p class="section-header-icon"><?php echo get_field('section_header_3'); ?></p>
		</div>
		<div class="medium-12 large-centered medium-centered columns">
			<?php if( have_rows('content_paragraph') ): ?>
			<?php while( have_rows('content_paragraph') ): the_row();
			// vars
			$cont_head = get_sub_field('content_paragraph_header');
			$cont_text = get_sub_field('content_paragraph_text');
			?>
			<div class="medium-6 columns">
				<div class="repeater-div">
					<p class="orange-bold"><?php echo $cont_head; ?></p>
					<p class="small-p"><?php echo $cont_text; ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- /Committed to Success -->

<!-- CTA -->
<div class="cta-fullwidth-banner">
	<div class="row">
		<div class="large-10 medium-12 large-centered medium-centered columns">
			<p class="cta-header"><?php echo get_field('cta_caption'); ?></p>
			<div class="button-div">
				<?php if ( have_rows( 'cta' ) ): ?>
				<?php while ( have_rows( 'cta' ) ): the_row();
				// vars
				$ctabl = get_sub_field('cta_button_text');
				$link = get_sub_field('link');
				$ctabl = get_sub_field('cta_button_link');
				$ctaex = get_sub_field('cta_external');
				?>
				<?php if ( get_sub_field( 'link' ) === 'Internal' ): ?>
				<a class="orange-button" href="<?php the_sub_field( 'cta_button_link' ); ?>"><?php the_sub_field( 'cta_button_text' ); ?></a>
				<?php endif; ?>
				<?php if ( get_sub_field( 'link' ) === 'External' ): ?>
				<a class="orange-button" href="<?php the_sub_field( 'cta_external' ); ?>" target="_blank"><?php the_sub_field( 'cta_button_text' ); ?></a>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- /CTA -->

<?php get_footer(); ?>
