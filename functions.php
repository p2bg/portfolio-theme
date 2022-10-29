<?php
if ( ! function_exists( 'p2bg_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since  1.0
	 *
	 * @return void
	 */

     /*
	 * Let WordPress manage the document title.
	 * This theme does not use a hard-coded <title> tag in the document head,
	 * WordPress will provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );

    /*
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	$logo_width  = 300;
	$logo_height = 300;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

    /*
	 * Enqueue Styles.
	 */

    wp_enqueue_style( 'p2bg-theme-style', get_template_directory_uri() . '/style.css', array(), 1.21 );
    wp_enqueue_script( 'p2bg-theme-style', get_template_directory_uri() . '/assets/js/scripts.js', array(), wp_get_theme()->get( 'Version' ), true );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary menu', 'p2bg-theme' ),
			'menu-footer'  => esc_html__( 'Menu footer', 'p2bg-theme' ),
		)
	);

	/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
				'case',
			)
		);

		load_theme_textdomain('p2bg-theme', get_template_directory());


}

/**
 * Calculate classes for the main <html> element.
 *
 * @return void
 */
function p2bg_theme_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'p2bg_theme_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

if ( ! function_exists( 'p2bg_theme_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function p2bg_theme_post_thumbnail() {
		if ( ! p2bg_theme_can_show_post_thumbnail() ) {
			return;
		}
		?>

		<?php if ( is_singular() ) : ?>

			<figure class="post-thumbnail">
				<?php
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
				?>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<figure class="post-thumbnail">
				<a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail( 'post-thumbnail' ); ?>
				</a>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure>

		<?php endif; ?>
		<?php
	}
}
?>