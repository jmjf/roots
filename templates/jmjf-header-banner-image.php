<header class="banner container" role="banner">
	<div class="row">
		<div class="col-lg-12">
			<img class ="hidden-xs" src="assets/img/banner.png">
			<div class="container navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
				</div>

				<nav class="collapse navbar-collapse" role="navigation">
					<?php
						if (has_nav_menu('primary_navigation')) :
							wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
						endif;
					?>
				</nav>
			</div>
		</div>
	</div>
</header> 