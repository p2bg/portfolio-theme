<?php
/**
 * Template part for displaying post excerpt
 */

 if($post->order){
    $order = $post->order;
 }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($order); ?>>
<?php p2bg_theme_post_thumbnail();?>
<div class="card-content">
	<header class="entry-header">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( '<h2 class="entry-title default-max-width">','</h2>' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
        <?php
        /**
         * Filters the displayed post excerpt.
         *
         * @since 0.71
         *
         * @see get_the_excerpt()
         *
         * @param string $post_excerpt The post excerpt.
         */
        echo apply_filters( 'the_excerpt', get_the_excerpt() );
        ?>
        <a href="<?php echo esc_url( get_permalink() ) ?>"><?php esc_html_e( 'Read more', 'p2bg-theme' ); ?></a>
	</div><!-- .entry-content -->
                </div>
</article><!-- #post-<?php the_ID(); ?> -->

