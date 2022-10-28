<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
<footer class="site-footer">
	<div class="site-info">
		<div class="site-footer-wrapper">
			<div class="footer-links">
				<a class="linkedin" href="https://www.linkedin.com/in/pedrogrein/">Linkedin</a></br>
				<a class="email" href="mailto:p2bg@p2bg.com.br">p2bg@p2bg.com.br</a>
			</div>

				<?php if (has_nav_menu('menu-footer')) : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-footer',
							'menu_class'      => 'menu-footer',
							'container' 	=> false,
							'items_wrap'      => '<ul class="menu-footer">%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
				endif; ?>
			<div class="powered-by">
				<p>
					<?php
					printf(
						/* translators: %s: WordPress. */
						esc_html__('Powered by %s.', 'p2bg-theme'),
						'<a href="' . esc_url(__('https://wordpress.org/', 'p2bg-theme')) . '">WordPress </a> &nbsp &copy; Pedro P. B. Grein - 2022'
					);
					?></p>
			</div><!-- .powered-by -->
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>

</html>