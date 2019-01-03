<?php $options = get_option('rh_settings'); ?>
		
			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="copyright cf">
					<?php
						if( $options['copyright_txt'] ) {
							echo '<span class="left">' . $options['copyright_txt'] . '</span>';
						} else {
							echo '<span class="left">@ Copyright ' . get_bloginfo() . ' ' . date('Y') . '</span>';
						}
						
						if( $options['copyright_txt'] ) {
							echo '<span class="right">Call on <a href="tel:'. $options['phone_no'] .'">' . $options['phone_no'] . '</a> or email at <a href="mailto:'. $options['email_add'] .'">'. $options['email_add'] .'</a></span>';
						}
					?>
					</p>

				</div>

			</footer>

		</div>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site -->
