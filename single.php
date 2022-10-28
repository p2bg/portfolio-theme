<?php
/**
 * The template for displaying all single posts
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'templates/content/content-single' );
endwhile; // End of the loop.
?>
</div><!-- #primary -->
</div><!-- #content -->
</div><!-- #page -->
<?php get_footer(); ?>
