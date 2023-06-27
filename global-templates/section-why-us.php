<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require(get_template_directory() .'/theme.php');

?>
<!--	<div class="--><?php //echo $theme_container ?><!--">	</div>-->
<section id="why-us" class="why-us">
	<div class="<?php echo $theme_container ?>" data-aos="fade-up">
	<div class="section-title">
			<h2>Why Us</h2>
		</div>

		<div class="row">

			<div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

				<div class="why-us__content">
					<h3 class="why-us__content-header">We are the best of the best <strong>bikoz zis iz tru ur architecto aut nihil</strong></h3>
					<p class="why-us__content-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
					</p>
				</div>


				<div class="accordion why-us__accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<span>01</span>Accordion Item #1
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
							 data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the first item's accordion body.</strong> It is shown by default, until
								the collapse plugin adds the appropriate classes that we use to style each element.
								These classes control the overall appearance, as well as the showing and hiding via CSS
								transitions. You can modify any of this with custom CSS or overriding our default
								variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
								though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<span>02</span>Accordion Item #2
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
							 data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the second item's accordion body.</strong> It is hidden by default,
								until the collapse plugin adds the appropriate classes that we use to style each
								element. These classes control the overall appearance, as well as the showing and hiding
								via CSS transitions. You can modify any of this with custom CSS or overriding our
								default variables. It's also worth noting that just about any HTML can go within the
								<code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<span>03</span>Accordion Item #3
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
							 data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the third item's accordion body.</strong> It is hidden by default, until
								the collapse plugin adds the appropriate classes that we use to style each element.
								These classes control the overall appearance, as well as the showing and hiding via CSS
								transitions. You can modify any of this with custom CSS or overriding our default
								variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
								though the transition does limit overflow.
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col-lg-5 align-items-stretch order-1 order-lg-2 why-us__img"
				 style='background-image: url("<?php echo get_template_directory_uri() . '/img/why-us.png' ?>");'
				 data-aos="zoom-in" data-aos-delay="150">&nbsp;
			</div>
		</div>

	</div>
</section>
