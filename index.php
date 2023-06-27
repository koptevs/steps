<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
require(get_template_directory() .'/theme.php');
get_header();
?>

<div class="wrapper" id="page-wrapper">

	<main class="site-main my-3" id="main">
		<div class="<?php echo $theme_container ?>">
			<h1 class="text-center text-uppercase">Welcome to our blog!</h1>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<a href="<?php the_permalink(); ?>">
					<h2 class="text-uppercase"><?php the_title(); ?></h2>
				</a>
				<div class="py-1 px-3 mb-2 d-inline-block text-white">
					Posted by: <?php the_author_posts_link(); ?> on <?php the_time( 'd.m.Y' ); ?>
					in <?php echo get_the_category_list( ', ' ); ?>
				</div>
				<?php the_content(); ?>
				excerpt:
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn mb-4">Continue reading &raquo;</a>

			<?php endwhile; ?>
		
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
									"><?php echo str_replace( 'page-numbers', 'page-link', $page_link ); ?></li>
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
