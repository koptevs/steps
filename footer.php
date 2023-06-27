<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require get_template_directory() . '/theme.php';
?>

<div class="wrapper footer-wrapper" id="wrapper-footer">
<!-- ======== Back-to-top button ======= -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
		<path fill-rule="evenodd"
				d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
	</svg>
</a>
	<div class="<?php echo $theme_container; ?> ">

		<div class="row">
			<div class="col-12 col-md-4 ">
				<h3 class="text-center text-uppercase">Col 1</h3>
			</div>

			<div class="col-12 col-md-4 ">
				<h3 class="text-center text-uppercase">Col 2</h3>
			</div>
			<div class="col-12 col-md-4">
				<h3 class="text-center text-uppercase">Col 3</h3>
			</div>
		</div><!-- row end -->
	</div><!-- container end -->


	


</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
