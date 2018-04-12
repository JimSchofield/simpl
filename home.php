<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simpl
 */

get_header();

/**
 * Get the ID of the blog home page.
 *
 * @var int|null $page_for_posts
 */
$page_for_posts = get_option('page_for_posts');

if ( ! empty( $page_for_posts ) ) {
    $page_for_posts_post = get_post( $page_for_posts );
} else {

	$pages = get_posts(
		array(
			'post_type'  => 'page',
			'fields'     => 'ids',
			'nopaging'   => true,
			'meta_key'   => '_wp_page_template',
			'meta_value' => 'template-blog.php',
		)
	);

	if ( ! empty( $pages[0] ) ) {
		$page_for_posts_post = get_post( $pages[0] );
	}	
}

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main archive">

		<?php if ( ! empty( $page_for_posts_post ) ) : ?>
			<div class="constrain constrain_center">
				<?php echo apply_filters( 'the_content', $page_for_posts_post->post_content ); ?>
			</div>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>

		<?php /*<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header --> */


		?>
		<?php


		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
			get_template_part( 'template-parts/content', 'preview' );

		endwhile;

		the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
