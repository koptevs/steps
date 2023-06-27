<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$container = 'container';
// $container = get_theme_mod( 'ikunderstrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<main class="site-main my-3" id="main">
		<div class="container">
			<h1 class="text-center text-uppercase">Welcome to Lifts directory!</h1><br>
			<div class="row">

				<?php
				while ( have_posts() ) :
					the_post();
					?>
				<div class="col-4">

					<a href="<?php the_permalink(); ?>">
						<h5 class="text-uppercase">
							<?php the_title(); ?>
						</h5>
					</a>
				
						<span style="font-size: 14px;">

							<?php echo carbon_get_the_post_meta( 'crb_lifts_adrese_iela' ) . ' '; ?>
							<?php echo carbon_get_the_post_meta( 'crb_lifts_adrese_maja' ); ?><?php echo carbon_get_the_post_meta( 'crb_lifts_adrese_kapnu_telpa' ) ? '-' . carbon_get_the_post_meta( 'crb_lifts_adrese_kapnu_telpa' ) : ''; ?>
					</span><br><br>
					<?php // the_content(); ?>
					<?php // the_excerpt(); ?>
				</div>

				<?php endwhile; ?>
			</div>

			<?php get_search_form(); ?>

			<?php

			function sa_get_bootstrap_paginate_links() {
				ob_start();
				?>
			<div class="pages clearfix">
				<?php
						global $wp_query;
						$current    = max( 1, absint( get_query_var( 'paged' ) ) );
						$pagination = paginate_links(
							array(
								'base'      => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
								'format'    => '?paged=%#%',
								'current'   => $current,
								'show_all'  => true,
								'total'     => $wp_query->max_num_pages,
								'type'      => 'array',
								// 'prev_text' => '&laquo;',
								'prev_text' => __( '« Previous' ),
								// 'next_text' => '&raquo;',
								'next_text' => __( 'Next »' ),
							)
						);
				?>
					<?php if ( ! empty( $pagination ) ) : ?>
				<ul class="pagination pagination-sm justify-content-center">
						<?php foreach ( $pagination as $key => $page_link ) : ?>
					<li class="page-item
									<?php
									if ( strpos( $page_link, 'current' ) !== false ) {
										echo ' active'; }
									?>
									">
							<?php echo str_replace( 'page-numbers', 'page-link', $page_link ); ?>
					</li>
					<?php endforeach ?>
				</ul>
				<?php endif ?>
			</div>
				<?php
				$links = ob_get_clean();
				return apply_filters( 'sa_bootstap_paginate_links', $links );
			}
			function sa_bootstrap_paginate_links() {
				echo sa_get_bootstrap_paginate_links();
			}
			sa_bootstrap_paginate_links();
			?>
		</div>
	</main>
</div>

<?php
get_footer();
?>
