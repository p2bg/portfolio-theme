<?php
/**
 * The template for displaying all single posts
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'templates/content/content' );
endwhile; // End of the loop.

get_footer();
