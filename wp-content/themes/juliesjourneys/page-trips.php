<?php
/*
 * This is a custom page for /trips - must have "trips" page created in admin
*/
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$argsTrips = array(
		'post_type' => 'post',
		'posts_per_page' => '5',
		'paged' => $paged
	);

	$the_query_trips = new WP_Query( $argsTrips );

?>

<?php get_header(); ?>

<div class="content-area trips">

	<?php if ( $the_query_trips->have_posts() ) : ?>

		<?php while ( $the_query_trips->have_posts() ) : $the_query_trips->the_post(); ?>
			
			<?php $postType = get_post_type_object(get_post_type()); ?>
			
			<article class="post-trips">

				<div class="row">

					<div class="medium-12 columns">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>

				</div>

				<div class="row">

					<div class="post-meta">
						<span class="post-meta-category">
							<a href="/<?= strtolower($postType->labels->name); ?>"><?= $postType->labels->name; ?></a>
						</span>
					</div>

					<a href="<?php the_permalink(); ?>" class="post-title"><h2><?php the_title(); ?></h2></a>
					
					<span class="post-meta-date"><?php the_date('M j, Y'); ?></span>
					<span class="post-meta-comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>

					<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
					
					<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>

				</div>

			</article>
			
		<?php endwhile; ?>

		<?php if ( $the_query_trips->max_num_pages > 1 ) : // check if the max number of pages is greater than 1 ?>
			<nav class="prev-next-posts">
				<div class="prev-posts-link">
					<?php echo get_next_posts_link( 'Older Entries', $the_query_trips->max_num_pages ); // display older posts link ?>
				</div>
				<div class="next-posts-link">
					<?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
				</div>
			</nav>
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>

	<?php else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	
	<?php endif; ?>

</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>

