<?php
	/**
	 * Page Header
	 *
	 * @category   Components
	 * @package    WordPress
	 * @subpackage PhaseGenomics
	 * @author     Delin Design <contact@delindesign.com>
	 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
	 * @link       https://delindesign.com
	 */

if ( is_front_page() ) : ?>

<!-- Banner -->
<section class="home bg-cover bg-center-top banner" style="background-image:url('<?php the_field( 'home_banner_image' ); ?>');">
	<div class="main-container pos-rel h100p">
		<h1 class="white-color lighter text-shadow uppercase text-center banner__title--home"><?php the_field( 'home_banner_header' ); ?></h1>
		<div class="grid-x banner__cta-group">
			<div class="cell small-12 medium-4">
				<a href="/products/proximeta/">
					<div class="inner">
						<h6 class="mb0">Discover</h6>
						<p class="white-color light uppercase mb0" href="/products/proximeta/">Microbiome »</p>
					</div>
				</a>
			</div>
			<div class="cell small-12 medium-4">
				<a href="/hi-c-kits/">
					<div class="inner">
						<h6 class="mb0">Analyze</h6>
						<p class="white-color light uppercase mb0" href="/hi-c-kits/">Hi-C Kits »</p>
					</div>
				</a>
			</div>
			<div class="cell small-12 medium-4">
				<a href="/products/proximo/">
					<div class="inner">
						<h6 class="mb0">Explore</h6>
						<p class="white-color light uppercase mb0" href="/products/proximo/">Plant/Animal/Human »</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->

<?php else : ?>

<!-- Banner -->
<section class="page bg-cover bg-center-bottom banner <?php echo get_field( 'page_header_embed' ) ? 'banner--video' : ''; ?>" style="background-image:url('<?php the_field( 'billboard_background_image' ); ?>');">
	<div class="main-container pos-rel h100p">
		<div class="grid-x h100p flex-bottom">
			<div class="cell small-12 large-7 banner__content">
				<h3 class="white-color bold text-shadow uppercase banner__title"><?php get_field( 'page_title' ) ? the_field( 'page_title' ) : the_title(); ?></h3>
				<?php if ( get_field( 'page_subtitle' ) ) : ?>
				<h5 class="white-color banner__subtitle"><?php the_field( 'page_subtitle' ); ?></h5><br>
				<?php endif; ?>
				<?php if ( get_field( 'page_header_cta_title' ) && ( get_field( 'page_header_cta_link' ) ) ) : ?>
				<a href="<?php the_field( 'page_header_cta_link' ); ?>" class="button secondary"><?php the_field( 'page_header_cta_title' ); ?></a>
				<?php endif; ?>
			</div>
			<?php if ( get_field( 'page_header_embed' ) ) : ?>
			<div class="cell small-12 large-5 banner__embed">
				<?php the_field( 'page_header_embed' ); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- /Banner -->

<?php endif; ?>

<?php if ( get_field( 'show_announcement' ) ) : ?>

	<?php if ( 'thin' === get_field( 'announcement_layout' ) ) : ?>

	<!-- Thin Announcement -->
	<section class="page page-block page-block--announcement" style="background-color:#99b7cc;">
		<div class="container">
			<div class="grid-x grid-margin-x flex-center-items">
				<div class="cell medium-9 page-block--announcement__content">
					<h6 class="title mb0"><?php the_field( 'announcement_title' ); ?></h6>
				</div>
				<div class="cell medium-3 page-block--announcement__cta">
					<a href="<?php the_field( 'announcement_cta_link' ); ?>" class="button secondary uppercase uppercase"><?php the_field( 'announcement_cta_title' ); ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- /Thin Announcement -->

	<?php elseif ( 'normal' === get_field( 'announcement_layout' ) ) : ?>

	<!-- Normal Announcement -->
	<section class="page page-block--announcement page-block--announcement--normal " style="background-color:#eef7fd;">
		<div class="container">
			<div class="grid-x grid-margin-x">
				<div class="cell medium-4 page-block--announcement__content">
					<?php if ( get_field( 'announcement_image' ) ) : ?>
					<img src="<?php the_field( 'announcement_image' ); ?>" alt="<?php the_field( 'announcement_title' ); ?>">
					<?php endif; ?>
				</div>
				<div class="cell medium-8 page-block--announcement__cta">
					<h4 class="bold uppercase secondary-color"><?php the_field( 'announcement_title' ); ?></h4>
					<p><?php the_field( 'announcement_content' ); ?></p>
					<a href="<?php the_field( 'announcement_cta_link' ); ?>" class=""><?php the_field( 'announcement_cta_title' ); ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- /Normal Announcement -->

	<?php endif; ?>

<?php endif; ?>

<?php if ( get_field( 'page_intro_title' ) || get_field( 'page_intro_content' ) ) : ?>
<!-- Page Intro -->
<section class="page page-block page-block--text">
	<div class="container pos-rel">
		<div class="grid-x">
			<div class="cell">
				<h2 class="lighter text-center secondary-color"><?php the_field( 'page_intro_title' ); ?></h2>
				<p class="text-center"><?php the_field( 'page_intro_content' ); ?></p>
			</div>
		</div>
	</div>
</section>
<!-- /Page Intro -->
<?php endif; ?>
