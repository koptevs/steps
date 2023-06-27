<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require(get_template_directory() .'/theme.php');

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );

?>
<section id="about-us" class="about-us" data-aos="fade-up">
	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="section-title">
			<h2>About Us</h2>
		</div>

		<div class="row content">
			<div class="col-lg-6">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore
					magna aliqua.
				</p>
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.602 13.76l1.412 1.412l8.466-8.466l1.414 1.414l-9.88 9.88l-6.364-6.364l1.414-1.414l2.125 2.125l1.413 1.412zm.002-2.828l4.952-4.953l1.41 1.41l-4.952 4.953l-1.41-1.41zm-2.827 5.655L7.364 18L1 11.636l1.414-1.414l1.413 1.413l-.001.001l4.951 4.951z"/></svg> Ullamco laboris nisi ut aliquip ex ea commodo consequat
					</li>
					<li><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.602 13.76l1.412 1.412l8.466-8.466l1.414 1.414l-9.88 9.88l-6.364-6.364l1.414-1.414l2.125 2.125l1.413 1.412zm.002-2.828l4.952-4.953l1.41 1.41l-4.952 4.953l-1.41-1.41zm-2.827 5.655L7.364 18L1 11.636l1.414-1.414l1.413 1.413l-.001.001l4.951 4.951z"/></svg></i> Duis aute irure dolor in reprehenderit in voluptate velit
					</li>
					<li><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.602 13.76l1.412 1.412l8.466-8.466l1.414 1.414l-9.88 9.88l-6.364-6.364l1.414-1.414l2.125 2.125l1.413 1.412zm.002-2.828l4.952-4.953l1.41 1.41l-4.952 4.953l-1.41-1.41zm-2.827 5.655L7.364 18L1 11.636l1.414-1.414l1.413 1.413l-.001.001l4.951 4.951z"/></svg></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
					</li>
				</ul>
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0">
				<p>
					Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
					voluptate
					velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
					sunt in
					culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<a href="#" class="btn-learn-more">Learn More</a>
			</div>
		</div>

	</div>
</section>
