<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require(__DIR__ .'/theme.php');

get_header();

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

	<div class="wrapper" id="index-wrapper">


		<main class="site-main" id="main ">

			<section class="d-flex align-items-center justify-content-center" 
				style="height: 200px; background-color: #ffca77; color: #000000;">
				<p class="fw-bold fs-1 ">SECTION1</p>
			</section>

			<section class="d-flex align-items-center justify-content-center"
				style="height: 200px; background-color: #006778; color: #fff5f5;">
				<p class="fw-bold fs-1">SECTION</p>
			</section>
			
			<section class="d-flex align-items-center justify-content-center"
				style="height: 200px; background-color: #bc4c4c; color: #ffffff;">
				<p class="fw-bold fs-1">SECTION</p>
			</section>

		</main><!-- #main -->

	</div><!-- #index-wrapper -->
?>
<?php
get_footer();
