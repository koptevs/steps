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

function crb_enqueue_custom_carbon_fields_styles() {
	wp_enqueue_style( 'carbon-fields-custom-theme', get_stylesheet_directory_uri() . '/css/carbon-fields-theme.css' );
}
add_action( 'admin_enqueue_scripts', 'crb_enqueue_custom_carbon_fields_styles' );

// from flattern theme - to add dark mode swithcer

add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );
function add_admin_link( $items, $args ) {
	if ( $args->theme_location == 'primary' ) {
		$items .= '
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="moon-stars-fill" viewBox="0 0 16 16">
		<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
		<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
	</symbol>
	<symbol id="sun-fill" viewBox="0 0 16 16">
		<path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
	</symbol>
	<symbol id="circle-half" viewBox="0 0 16 16">
		<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
	</symbol>
</svg>
<div id="mobile-menu" class="d-flex justify-content-center" aria-labelledby="bd-theme-text">
	<button type="button" class="color-mode-icons-color btn  d-flex align-items-center p-1" data-bs-theme-value="light" aria-pressed="true"  style="font-size: 14x;">
		<svg class="me-2 opacity-50" width="14px" height="16px"><use href="#sun-fill" fill="currentColor"></use></svg>
		<!-- Light -->
	</button>
	<button type="button" class="color-mode-icons-color btn  d-flex align-items-center p-1" data-bs-theme-value="dark" aria-pressed="false"  style="font-size: 14px;">
		<svg class="me-2 opacity-50" width="14px" height="16px"><use href="#moon-stars-fill" fill="currentColor"></use></svg>
		<!-- Dark -->
	</button>
		<!-- <button type="button" class="color-mode-icons-color btn  d-flex align-items-center p-1" data-bs-theme-value="auto" aria-pressed="false"  style="font-size: 14px;">
		<svg class="me-2 opacity-50" width="14px" height="16px"><use href="#circle-half" fill="currentColor"></use></svg>
		Auto
	</button> -->
</div>
';
	}
	return $items;
}
