<?php
/**
 * Template Name: Home page teste
 */
?>
<?php
get_header();

$page_id = get_the_id();
$args = array(
    'post_type'=> 'page',
    'post_parent'=> $page_id,
    'orderby' => 'menu_order',
    'order'   => 'ASC',);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

	// Load posts loop.
	while ( $the_query-> have_posts() ) {
		$the_query->the_post();
        $menu_order = $post->menu_order;
        if($menu_order == 1){
            $order = "card-main";
        } else {
            $order = "card-secondary";
        };
        ?>
    <article <?php post_class($order);?>>
        <?php p2bg_theme_post_thumbnail();?>
        <div class="card-content">
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title default-max-width">','</h2>' ); ?>
            </header>
            <div class="entry-content">
                <?php echo apply_filters( 'the_excerpt', get_the_excerpt() );?>
                <a href="<?php echo esc_url( get_permalink() ) ?>"><?php esc_html_e( 'Read more', 'p2bg-theme' ); ?></a>
            </div>
        </div>
    </article>
    <?php }
} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'templates/content/content-none' );

}
wp_reset_postdata();

get_footer();