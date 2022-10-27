<?php get_header(); ?>
<main id="main" class="site-main">

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'templates/content/content-excerpt');
	}

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'templates/content/content-none' );

} ?>
</main><!-- #main -->
<?php get_footer(); ?>