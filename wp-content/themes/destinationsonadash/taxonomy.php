<?php
/**
 * The template used to display destinations
 **/
?>

<?php

// set up category display params
// $args = array(
// 	'posts_per_page' => '-1'
// );

// $the_query_continents = new WP_Query( $args );
// taxonomy/slug/post-name
?>

<?php get_header(); ?>

<div class="content">

	<div class="row">

		<div class="medium-12 columns text-center">

			<h1 class="continent-title"><?php single_cat_title(); ?></h1>

		</div>

	</div>

	<?php if ( have_posts() ) : ?>

	<div class="row">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="medium-12 columns destination">

				<div class="row">

					<div class="medium-5 columns">
						<?php the_post_thumbnail('medium'); ?>
					</div>

					<div class="medium-7 columns">
						<h2><?php the_title(); ?></h2>
						<p>Places Visited</p>
						<ul>
							<li><span>-></span>place one</li>
							<li><span>-></span>place two</li>
							<li><span>-></span>place three</li>
							<li><span>-></span>place four</li>
						</ul>
						<a href="<?php the_permalink(); ?>">See this stay</a>
					</div>

				</div>

			</div>

		<?php endwhile; ?>

	</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>