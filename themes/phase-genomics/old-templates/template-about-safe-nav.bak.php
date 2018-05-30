<?php
/**
 * Template About.
 *
 * @package    Backup
 * @deprecated No longer used.
 */

get_header(); ?>

<?php // phpcs:disable ?>

		<div class="header-bg" style="background: url('<?php echo get_field('background_image'); ?>');">
				<div class="row">
					<div class="large-10 medium-12 large-centered medium-centered columns">
						<div class="fullwidth-module">
							<div class="center-icon">
							<?php

							$icon = get_field('icon');
							if( !empty($icon) ): ?>

								<img class="three-mod-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />

							<?php endif; ?>
							</div>
							<h2 class="bb-header"><?php echo get_field('header'); ?></h2>
							<p class="bb-sub"><?php echo get_field('sub_header'); ?></p>
						</div>
                    </div>
                </div>
   		 	</div>

	<!-- NEWS -->
		<div class="fullwidth-module" id="<?php echo get_field('section_id'); ?>">
			<div class="row">
				<div class="large-6 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php
						$icon_1 = get_field('icon_1');
						if( !empty($icon_1) ): ?>
						<img class="three-mod-icon" src="<?php echo $icon_1['url']; ?>" alt="<?php echo $icon_1['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header"><?php echo get_field('headline_1'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<?php if( have_rows('news_article') ): ?>
						<?php while( have_rows('news_article') ): the_row();
							// vars
							$article_post_date = get_sub_field('article_post_date');
							$article_description = get_sub_field('article_description');
							$link_text = get_sub_field('link_text');
							$link_url = get_sub_field('link_url');
							?>
								<div class="news-container relative-div">
									<p class="post-date"><?php echo $article_post_date; ?></p>
									<div class="row">
										<div class="medium-9 columns">
											<p class="news-article"><?php echo $article_description; ?></p>
										</div>
										<div class="medium-3 columns">
											<a href="<?php echo $link_url; ?>" target="blank"><p class="news-link"><?php echo $link_text; ?></p></a>
										</div>
									</div>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

		</div>

	<!-- Testimonials -->
		<div class="fullwidth-module" id="<?php echo get_field('section_id_2'); ?>" style="background: url('<?php echo get_field('background_2'); ?>');">
			<div class="row">
				<div class="large-6 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php
						$icon_2 = get_field('icon_2');
						if( !empty($icon_2) ): ?>
						<img class="three-mod-icon" src="<?php echo $icon_2['url']; ?>" alt="<?php echo $icon_2['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header"><?php echo get_field('headline_2'); ?></p>
				</div>
			</div>
			<!-- TESTIMONIAL QUOTE -->

				<div class="row">
				<div class="large-10 medium-12 large-centered medium-centered columns">
					<div class="interior-quote-container">
						<div class="orbit" role="region" aria-label="Testimonials" data-orbit>
						  <div class="orbit-wrapper">
							<div class="orbit-controls">
							  <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
							  <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
							</div>
							<ul class="orbit-container">
								<?php if( have_rows('testimonial') ): ?>
								<?php while( have_rows('testimonial') ): the_row();
								// vars
								$testimonial_text = get_sub_field('testimonial_text', false, false);
								$attribution = get_sub_field('attribution');
								$company_logo = get_sub_field('attribution_company_logo');
								?>
									<li class="orbit-slide">
										<p class="quote w400 oblique centered"><?php echo $testimonial_text; ?></p>
										<p class="small-p centered"><?php echo $attribution; ?></p>
										<div class="center-icon">
											<img class="three-mod-icon" src="<?php echo $company_logo['url']; ?>" alt="<?php echo $company_logo['alt'] ?>" />
										</div>
									</li>
								<?php endwhile; ?>
								<?php endif; ?>
							</ul>
							</div>
							<nav class="orbit-bullets">
								<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
								<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
								<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
								<button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
								<button data-slide="4"><span class="show-for-sr">Fifth slide details.</span></button>
							</nav>
						</div>
				</div>
			</div>
		</div>
</div>

	<!-- SECTION 3 — TEAM -->
		<div class="fullwidth-module" style="background: url('<?php echo get_field('background_3'); ?>');">
			<div class="row">
				<div class="large-6 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php
						$icon_3 = get_field('icon_3');
						if( !empty($icon_3) ): ?>
						<img class="three-mod-icon" src="<?php echo $icon_3['url']; ?>" alt="<?php echo $icon_3['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header"><?php echo get_field('headline_3'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<p class="centered"><?php echo get_field('intro_text_3'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="medium-12 large-centered medium-centered columns">
					<p class="interior-header"><?php echo get_field('headline_3b'); ?></p>
				</div>
			</div>
		<!-- EXECUTIVE MEMBERS -->
			<div class="row">
				<div class="medium-8 large-centered medium-centered columns">
					<div class="row">
						<?php if( have_rows('executives') ): ?>
							<?php while( have_rows('executives') ): the_row();
								// vars
								$portrait = get_sub_field('portrait');
								$name = get_sub_field('name');
								$title = get_sub_field('title');
								$readmore = get_sub_field('read_more_text');
								$bio = get_sub_field('bio', false, false);
								$l_link = get_sub_field('lightbox_link');
								?>
								<div class="medium-6 columns">
									<a data-toggle="<?php echo $l_link; ?>">
										<div class="lg-portrait-wrap">
											<div class="overlay-container">
												<img class="lg-portrait block-display-img" src="<?php echo $portrait['url']; ?>" alt="<?php echo $portrait['alt'] ?>" />
													<div class="overlay">
														<div class="overlay-title"><?php echo $readmore; ?></div>
												  	</div>
											</div>
											<p class="orange-bold"><?php echo $name; ?></p>
											<p class="small-p"><?php echo $title; ?></p>
										</div>
									</a>
								</div>

								<!-- THIS IS THE LIGHTBOX -->
									<div class="reveal bio-reveal" id="<?php echo $l_link; ?>" data-reveal>
										<div class="lg-portrait-wrap">
											<img class="lg-portrait" src="<?php echo $portrait['url']; ?>" alt="<?php echo $portrait['alt'] ?>" />
											<p class="orange-bold centered"><?php echo $name; ?></p>
											<p class="small-p centered"><?php echo $title; ?></p>
										</div>
										<p><?php echo $bio; ?></p>
										<div class="center-icon">
											<img class="three-mod-icon" src="http://www.phasegenomics.dev/wp-content/uploads/2017/06/logomark.png" alt="Phase Genomics" />
										</div>
										<button class="close-button" data-close aria-label="Close modal" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<!-- END THE LIGHTBOX -->

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<!-- ADVISORS -->
			<div class="row">
			<div class="medium-8 large-centered medium-centered columns">
					<p class="interior-header"><?php echo get_field('headline_4'); ?></p>
					<div class="row small-up-2 medium-up-3 medium-centered large-up-3">
						<?php if( have_rows('advisors') ): ?>
						<?php while( have_rows('advisors') ): the_row();
						// vars
						$portrait_2 = get_sub_field('portrait_2');
						$name2 = get_sub_field('name_2');
						$title = get_sub_field('title');
						$readmore = get_sub_field('read_more_text');
						$bio = get_sub_field('bio', false, false);
						$l_link = get_sub_field('lightbox_link');
						?>
							<div class="columns">
								<a data-toggle="<?php echo $l_link; ?>">
									<div class="sm-portrait-wrap">
										<div class="overlay-container">
											<img class="sm-portrait block-display-img" src="<?php echo $portrait_2['url']; ?>" alt="<?php echo $portrait_2['alt'] ?>" />
											<div class="overlay">
												<div class="overlay-title-advisors"><?php echo $readmore; ?></div>
											</div>
										</div>
										<p class="small-blue-bold"><?php echo $name2; ?></p>
										<p class="small-p"><?php echo $title; ?></p>
									</div>
								</a>
							</div>
						<!-- THIS IS THE LIGHTBOX -->
							<div class="reveal bio-reveal" id="<?php echo $l_link; ?>" data-reveal>
								<div class="lg-portrait-wrap">
									<img class="lg-portrait" src="<?php echo $portrait_2['url']; ?>" alt="<?php echo $portrait_2['alt'] ?>" />
									<p class="orange-bold centered"><?php echo $name2; ?></p>
									<p class="small-p centered"><?php echo $title; ?></p>
								</div>
								<p><?php echo $bio; ?></p>
								<div class="center-icon">
									<img class="three-mod-icon" src="http://www.phasegenomics.dev/wp-content/uploads/2017/06/logomark.png" alt="Phase Genomics" />
								</div>
								<button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<!-- END THE LIGHTBOX -->
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
			</div>
		</div>
	</div>

		<!-- SECTION 4 RESOURCES -->
		<div class="fullwidth-module" style="background: url('<?php echo get_field('background_4'); ?>');">
			<div class="row">
				<div class="large-6 medium-10 large-centered medium-centered columns">
					<div class="center-icon">
						<?php
						$icon_3 = get_field('icon_4');
						if( !empty($icon_3) ): ?>
						<img class="three-mod-icon" src="<?php echo $icon_3['url']; ?>" alt="<?php echo $icon_3['alt'] ?>" />
						<?php endif; ?>
					</div>
					<p class="interior-header margin-bottom-header"><?php echo get_field('headline_5'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="medium-10 large-centered medium-centered columns">
					<div class="row">
						<div class="medium-5 small-11 columns">
							<div class="button-div">
								<?php
									$resource_img = get_field('resource_image');
									if( !empty($resource_img) ): ?>
										<img class="resource-img" src="<?php echo $resource_img['url']; ?>" alt="<?php echo $resource_img['alt'] ?>" />
								<?php endif; ?>
								<?php
									$resource_url = get_field('resource_link_url');
									if( $resource_url ): ?>
										<a class="resource-button" href="<?php echo $resource_url['url']; ?>"><?php echo the_field('resource_link_text'); ?></a>
								<?php endif; ?>
							</div>
						</div>
						<div class="medium-7 small-11 columns">
							<p><?php echo get_field('resource_description', false, false); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>




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
