<?php

/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if (has_nav_menu('primary')) : ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e('Primary menu', 'p2bg_theme'); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container' 	=> false,
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
	<template id="burger-template">
		<button type="button" aria-expanded="false" aria-label="Menu" aria-controls="site-navigation">
			<svg width="32" height="32" aria-hidden="true">
				<rect class="cls-1" y="14" width="32" height="4"  />
				<rect class="cls-2" y="24" width="32" height="4"  />
				<rect class="cls-3" y="4" width="32" height="4"  />
			</svg>
		</button>
	</template>
<?php endif; ?>