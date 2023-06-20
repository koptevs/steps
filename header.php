<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require(__DIR__ .'/theme.php');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-bs-theme="light" >

<head>
	<meta charset=" <?php bloginfo( 'charset' ); ?>	">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<!--<body -->
<body <?php body_class(); ?> >
	
<!-- <?php get_template_part( 'global-templates/top-bar' ); ?> -->


	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<a class="skip-link sr-only sr-only-focusable" href="#content">
			<?php esc_html_e( 'Skip to content', 'steps' ); ?>
		</a>
		<div class="<?php echo $theme_container ?> d-flex justify-content-between">
			<div class="logo">
			<h1 class="text-light"><a href="/">SKRIEMELIS</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'navbar',
					'container'       => 'nav',
					'container_id'    => 'navbar',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><i class="bi bi-list mobile-nav-toggle"></i>',
					// 'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 5,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>


		</div>
	</header><!-- End Header -->
