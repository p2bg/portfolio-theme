<?php
/**
 * Template part for displaying pages
 */

?>
<?php
if($post->class){
	$class = $post->class;
}
if($post->order){
	$titulo = $post->order;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
	<header class="entry-header">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
		);

		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_template_part( 'templates/content/content-children' ); ?>