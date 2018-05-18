<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">

		<?php 

			$image = get_field('header_logo', 'option');

			if( !empty($image) ): ?>

		<a href="<?php echo home_url(); ?>"><img class="header-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

		<?php endif; ?>
		
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	
</div>