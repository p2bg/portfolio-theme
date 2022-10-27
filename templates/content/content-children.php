<?php
/**
 * Template part for displaying page children
 */
?>

<?php $mypages = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $posts[0]->ID ));
    if( $mypages ) :
        foreach( $mypages as $page ){
            if($page->class){
                $class = $page->class;
            }
            if($page->menu_order){
                $order = "order-".$page->menu_order;
            }?>
            <article class="<?php echo $class;?> <?php echo $order;?> <?php echo $post->order;?>">
            <div class="chapter-content">
                <h2><?php echo $page->post_title; ?></h2>
                    <?php echo $page->post_content; ?>
            </div>    
            </article>
            <?php };?>
    <?php else :
    get_template_part( 'partials/content', 'none' );
    endif;
?>