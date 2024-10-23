<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head() ?>
</head>

<body>

	<div class="mobile-menu-button-wrapper">

		<div class="burger-menu">
			<div class="icon"></div>
		</div>

	</div>


	<header id="header">


		<nav id="" class="">

			<div class="menu-menu-main-container" role="navigation" aria-label="<?php _e('Menu principal', 'text-domain'); ?>">
				<?php
				wp_nav_menu([
					'menu' => 'left',
					'container'      => false,
				]);
				?>
				<div class="custom-logo">
					<?php the_custom_logo(); ?>
				</div>


				<?php
				wp_nav_menu([
					'menu' => 'right',
					'container'      => false,
				]);
				?>
			</div>

		</nav>

		<div class="menu-menu-main-container-mobile" role="navigation" aria-label="<?php _e('Menu principal', 'text-domain'); ?>">

			<div class="top-bar">
				<?php the_custom_logo(); ?>
			</div>


			<?php
			wp_nav_menu([
				'menu' => 'principal',
				'container'      => false,
			]);
			?>


	</header>