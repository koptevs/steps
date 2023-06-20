<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'steps_scripts' ) ) {

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function steps_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		// wp_die( $theme_version );
		// wp_die( $the_theme );
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		// wp_die( $suffix );
		// Grab asset urls.
		// $theme_styles = '/css/theme.css';
		$theme_styles  = "/css/theme{$suffix}.css";
		$theme_scripts = "/js/theme{$suffix}.js";

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		// wp_die( $css_version );
		wp_enqueue_style( 'steps-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );

		wp_enqueue_style( 'steps-font-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;300i;400;400i;500;600;600i;700;800&display=swap' );
		wp_enqueue_style( 'steps-font-muli', 'https://fonts.googleapis.com/css2?family=Muli:wght@300;300i;400;400i;500;500i;600;600i;700;700i&display=swap' );
		// wp_enqueue_style( 'steps-font-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;300i;400;400i;500;500i;600;600i;700;700i&display=swap' );

		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-bs', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css' );

		// wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		// wp_die($js_version);

		// wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/js/glightbox.min.js', array(), $js_version, true );

		// wp_enqueue_script( 'ikunderstrap-scripts', get_template_directory_uri() . $theme_scripts, array('glightbox'), $js_version, true );
		wp_enqueue_script(
			'steps-scripts',
			get_template_directory_uri() . $theme_scripts,
			array(),
			$js_version,
			true
		);

	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'steps_scripts' );

// for flattern theme

// add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );
// function add_admin_link( $items, $args ) {
// 	if ( $args->theme_location == 'primary' ) {
// 		$items .= '
// <div id="mobile-menu" class="d-md-none d-flex justify-content-center fixed-bottom mb-5" aria-labelledby="bd-theme-text">
// <button type="button" class="btn btn-link-secondary d-flex align-items-center p-1 m-2" data-bs-theme-value="light" aria-pressed="true"  style="font-size: 124x;">
// <svg class="me-2 opacity-50" width="14px" height="16px"><use href="#sun-fill" fill="currentColor"></use></svg>
// Light
// </button>
// <button type="button" class="btn btn-link-secondary d-flex align-items-center p-1 m-2" data-bs-theme-value="dark" aria-pressed="false"  style="font-size: 14px;">
// <svg class="me-2 opacity-50" width="14px" height="16px"><use href="#moon-stars-fill" fill="currentColor"></use></svg>
// Dark
// </button>
// <button type="button" class="btn btn-link-secondary d-flex align-items-center p-1 m-2" data-bs-theme-value="auto" aria-pressed="false"  style="font-size: 14px;">
// <svg class="me-2 opacity-50" width="14px" height="16px"><use href="#circle-half" fill="currentColor"></use></svg>
// Auto
// </button>
// </div>
// ';
// 	}
// 	return $items;
// }
