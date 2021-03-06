<?php
/**
 * The template for displaying pages - (used by thumbnail images for gallery)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage DestinationsOnADash
 * @since DestinationsOnADash 1.0
 */

get_header(); ?>

<div id="primary" class="content-area container_default_page">
	<main id="main" class="site-main" role="main">

		<div class="row">
			<div class="medium-12 columns">

				<h1 class="page-title"><?php the_title(); ?></h1>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					// get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) {
					// 	comments_template();
					// }
					the_content();
					// End of the loop.
				endwhile;

				?>

			</div>
		</div>

	</main><!-- .site-main -->

	<?php // get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
