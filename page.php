<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ik-understrap
 */

get_header();

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );

$the_parent_id = wp_get_post_parent_id( get_the_ID() );
$has_parent    = $the_parent_id;
$has_children  = get_pages( array(
	'child_of' => get_the_ID()
) );
?>

    <div class="wrapper" id="page-wrapper">

        <main class="site-main my-3" id="main">
			<?php
			while ( have_posts() ) :
				the_post();

				?>
                <!-- ======= Breadcrumbs ======= -->

                <section id="breadcrumbs" class="breadcrumbs">
                    <div class="<?php echo esc_attr( $container ); ?>">
                        <div class="row">
                            <ol class="page-breadcrumbs">
                                <li><a href="<?php echo site_url() ?>">Home</a></li>

								<?php if ( $has_parent ): ?>
                                    <li>
                                        <a href="<?php echo get_permalink( $the_parent_id ) ?>">
											<?php echo get_the_title( $the_parent_id ) ?>
                                        </a>
                                    </li>
								<?php endif; ?>

                                <li><?php the_title(); ?></li>
                            </ol>
                        </div><!-- .row -->
                    </div><!-- #content -->
                </section><!-- End Breadcrumbs -->

                <div class="page--header pb-2">

                    <div class="<?php echo esc_attr( $container ); ?>">
                        <div class="row">

                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="<?php echo esc_attr( $container ); ?>">
                    <div class="row">
                        <div class="<?php echo ( $has_parent or $has_children ) ? 'col-md-8' : '' ?>">
                            <p><?php the_content(); ?></p>

                        </div>
                        <!--                        SIDEBAR with links to child pages - show only if is parent or has child -->
						<?php if ( $has_parent or $has_children ) : ?>
                            <div class="<?php echo ( $has_parent or $has_children ) ? 'col-md-4' : '' ?>">

								<?php
								if ( $the_parent_id ) { // if page has parent
									$find_children_of = $the_parent_id;
								} else {
									$find_children_of = get_the_ID();
								}
								$pages = get_pages( array(
									'title_li' => null,
									'child_of' => $find_children_of,
                                    'sort_column' => 'menu_order'
								) );
								?>

                                <div class="list-group my-4">
                                    <a href="<?php echo get_permalink( $the_parent_id ) // if has parent - gets its permalink, if - 0 gets current page permalink ?>"
                                       class="list-group-item list-group-item-action active " aria-current="true">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><?php echo get_the_title( $the_parent_id ) // if has parent - gets its title, if - 0 gets current page title?></h5>
                                        </div>
                                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                                        <small>And some small print.</small>
                                    </a>

									<?php foreach ( $pages as $page ): ?>
                                    <?php $is_current_page =  get_permalink() === get_permalink( $page->ID )?>
                                        <a href="<?php echo get_permalink( $page->ID ) ?>"
                                           class="list-group-item list-group-item-action  <?php echo $is_current_page ? 'sidebar-current' : '' ?>">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1"><?php echo $page->post_title ?></h5>
                                            </div>
                                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                                            <small class="text-muted">And some muted small print.</small>
                                        </a>

									<?php endforeach; ?>
                                </div>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
			<?php

//		            get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>

        </main><!-- #main -->


    </div><!-- #index-wrapper -->

<?php
get_footer();
