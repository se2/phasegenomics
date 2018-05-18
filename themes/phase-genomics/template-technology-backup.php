<?php
/*
Template Name: Technology Backup
*/
?>

<?php get_header(); ?>
			

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

	<!-- SECTION 1 -->
		<div class="fullwidth-module" id="<?php echo get_field('section_id'); ?>" style="background: url('<?php echo get_field('background_1'); ?>');">
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
					<p class="intro-text"><?php echo get_field('intro_text_1', false, false); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="large-8 medium-10 large-centered medium-centered columns">

					<div class="centered-thumb" style="padding-top: .25rem;">
					<p><a data-toggle="exampleModal1">
						<?php 

						$thumb = get_field('thumbnail_image');
						if( !empty($thumb) ): ?>						
						<img class="centered-thumb-im" src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />
						<?php endif; ?>
					</a></p>
					<p class="centered"><a data-toggle="exampleModal1">
						<?php echo get_field('illustration_link'); ?>
					</a></p>
				</div>
				<!-- THIS IS THE LIGHTBOX -->
					<div class="reveal" id="exampleModal1" data-reveal>
						<p style="margin-bottom:3rem;"></p>	
						<?php 

						$illu_i = get_field('illustration_image');
						if( !empty($illu_i) ): ?>
						<img class="left-align-image" src="<?php echo $illu_i['url']; ?>" alt="<?php echo $illu_i['alt'] ?>" />
						<?php endif; ?>
						<button class="close-button" data-close aria-label="Close modal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		</div>

	<!-- SECTION 2 -->
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
			<div class="row">
				<div class="large-10 medium-10 large-centered medium-centered columns">
					<p class="intro-text"><?php echo get_field('intro_text_2', false, false); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="large-8 medium-10 large-centered medium-centered columns">
					<div class="centered-thumb" style="padding-top: .25rem;">
						<p><a data-toggle="exampleModal2">
						<?php 

						$thumb_2 = get_field('thumbnail_image_2');
						if( !empty($thumb_2) ): ?>
							<img class="centered-thumb-im" src="<?php echo $thumb_2['url']; ?>" alt="<?php echo $thumb_2['alt'] ?>" />
							<?php endif; ?>
						</a></p>
						<p class="centered"><a data-toggle="exampleModal2">
							<?php echo get_field('illustration_link_2'); ?>
						</a></p>
					</div>
				<!-- THIS IS THE LIGHTBOX -->
					<div class="reveal" id="exampleModal2" data-reveal>
						<p style="margin-bottom:3rem;"></p>	
						<?php 

						$illu_i_2 = get_field('illustration_image_2');
						if( !empty($illu_i_2) ): ?>	  
						<img class="left-align-image" src="<?php echo $illu_i_2['url']; ?>" alt="<?php echo $illu_i_2['alt'] ?>" />
						<?php endif; ?>
						<button class="close-button" data-close aria-label="Close modal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		</div>	
		
		
	<!-- SECTION 3 -->
		<div class="fullwidth-module no-top-pad" style="background: url('<?php echo get_field('background_3'); ?>');">
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
					<p><?php echo get_field('intro_text_3'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="medium-12 large-centered medium-centered columns">
					<p class="interior-header"><?php echo get_field('headline_3b'); ?></p>
				</div>
			<!-- EXECUTIVE MEMBERS -->
				<div class="medium-8 large-centered medium-centered columns">
					<div class="row">
						<?php if( have_rows('executives') ): ?>
						<?php while( have_rows('executives') ): the_row(); 
						// vars
						$portrait = get_sub_field('portrait');
						$name = get_sub_field('name');
						$title = get_sub_field('title');
						?>
							<div class="medium-6 columns">
								<div class="lg-portrait-wrap">
									<img class="lg-portrait" src="<?php echo $portrait['url']; ?>" alt="<?php echo $portrait['alt'] ?>" />
									<p class="orange-bold"><?php echo $name; ?></p>
									<p class="small-p"><?php echo $title; ?></p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
			<!-- ADVISORS -->
			<p class="interior-header"><?php echo get_field('headline_4'); ?></p>
			<div class="row small-up-2 medium-up-5 medium-centered large-up-5">
			
				<?php if( have_rows('advisors') ): ?>
				<?php while( have_rows('advisors') ): the_row(); 
				// vars
				$portrait_2 = get_sub_field('portrait_2');
				$name2 = get_sub_field('name_2');
				?>
					<div class="columns">
						<div class="sm-portrait-wrap">
							<img class="sm-portrait" src="<?php echo $portrait_2['url']; ?>" alt="<?php echo $portrait_2['alt'] ?>" />
							<p class="small-blue-bold"><?php echo $name2; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>

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
