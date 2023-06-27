<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require(get_template_directory() .'/theme.php');

?>
<section id="clients" class="clients mt-4">
	<div class="<?php echo $theme_container ?>">
	<div class="section-title">
			<h2>Our Clients</h2>
		</div>

		<div class="row" data-aos="zoom-in">

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-1.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-2.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-3.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-4.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-5.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-6.png' ?>" class="img-fluid"
					 alt="">
			</div>

		</div>

	</div>
</section>
