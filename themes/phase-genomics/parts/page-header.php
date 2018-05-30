<?php if ( is_front_page() ) : ?>

<!-- Banner -->
<section class="home bg-cover bg-center-top banner" style="background-image:url('<?php the_field( 'home_banner_image' ); ?>');">
	<div class="main-container pos-rel h100p">
		<h1 class="white-color lighter text-shadow uppercase text-center abs-center"><?php the_field( 'home_banner_header' ); ?></h1>
		<div class="grid-x banner__cta-group">
			<div class="cell small-12 medium-4">
				<a href="#!">
					<div class="inner">
						<h6 class="mb0">Discover</h6>
						<p class="white-color light uppercase mb0" href="#!">Microbiome »</p>
					</div>
				</a>
			</div>
			<div class="cell small-12 medium-4">
				<a href="#!">
					<div class="inner">
						<h6 class="mb0">Explore</h6>
						<p class="white-color light uppercase mb0" href="#!">Plant/Animal/Human »</p>
					</div>
				</a>
			</div>
			<div class="cell small-12 medium-4">
				<a href="#!">
					<div class="inner">
						<h6 class="mb0">Analyze</h6>
						<p class="white-color light uppercase mb0" href="#!">Hi-C Kits »</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->

<!-- Default Announcement -->
<section class="home home--announcement" style="background-color:#99b7cc;">
	<div class="container">
		<div class="grid-x grid-margin-x">
			<div class="cell medium-9 home--announcement__content">
				<h6 class="title">Phase Genomics Unveils a Hi-C Kit for Human Samples, Expanding Their Hi-C Product Portfolio.</h6>
			</div>
			<div class="cell medium-3 home--announcement__cta">
				<a href="<?php the_clean_url(); ?>/shop" class="button secondary uppercase uppercase">Learn More</a>
			</div>
		</div>
	</div>
</section>
<!-- /Default Announcement -->

<?php else : ?>

<!-- Banner -->
<section class="page bg-cover bg-center-top banner" style="background-image:url('<?php the_field( 'billboard_background_image' ); ?>');">
	<div class="main-container pos-rel h100p">
		<div class="grid-x h100p flex-bottom">
			<div class="cell small-12 large-7">
				<h3 class="white-color bold text-shadow uppercase banner__title"><?php get_field( 'page_title' ) ? the_field( 'page_title' ) : the_title() ; ?></h3>
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->

<?php endif; ?>