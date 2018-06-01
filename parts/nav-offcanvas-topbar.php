<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar show-for-small hide-for-large" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-small hide-for-large">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<!-- <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li> -->
		</ul>
	</div>
	<div class="top-bar-right float-right show-for-small hide-for-large">
		<div class="phone">
			<?php echo get_option( 'al_phone' ); ?>
		</div>
	</div>
</div>
