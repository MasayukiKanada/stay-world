<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/pace.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/loader.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/css-reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/gsap.min.js" defer></script>

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/swiper-bundle.min.js" defer></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/hero-slider.js" defer></script>

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/scroll-polyfill.js" defer></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js" defer></script>

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js" defer></script>

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js" defer></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js" defer></script>
  <?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>
<body id="overlay">
	<!---global container---->
	<div id="global-container">
		<!---container---->
		<div id="container">
			<div class="mobile-menu__cover"></div>
			<div class="nav-trigger"></div>
			<header class="header">
				<div class="header__inner">
					<div class="logo">
						<h1 class="logo__item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<?php /* bloginfo( 'name' ); */ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="SiMPLE" class="logo__img"><span>Stay</span><span class="purple">World</span>
							</a>
						</h1>
					</div>
					<nav class="navbar">

							<?php
								$args = array(
									'theme_location' => 'global_nav',
									'menu_class' => 'navbar__inner',
									'container' => false,
									'items_wrap' => '<ul class="navbar__ul">%3$s</ul>',
								);
								wp_nav_menu($args);
							?>

							<!---メニューテンプレートから追加--->
							<?php /* include("navigation.php"); */ ?>

							<div class="navbar__btn">
								<button class="btn filled">Contact</button>
							</div>
					</nav>
					<button class="mobile-menu__btn">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>

			</header>