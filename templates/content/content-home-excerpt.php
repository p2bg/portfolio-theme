<?php
/**
 * Template part for displaying pages excerpt
 */
?>

<article id="post-<?php the_ID(); ?>">

    <div class="card-content">
    <?php get_template_part( 'templates/content/content-children' ); ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

