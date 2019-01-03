<div id="sidebar1" class="sidebar vc_col-sm-4 cf" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

	<?php
		$args = array(
			'numberposts' => '3',
			'exclude' => array(get_the_ID())
		);
		$recent_posts = wp_get_recent_posts($args);
		echo '<ul class="recent-posts">';
		foreach( $recent_posts as $recent ){
			echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail($post_id, array(360)) . '<h3>' . $recent["post_title"].'</h3></a> </li> ';
		}
		echo '</ul>';
		wp_reset_query();
	?>

	<?php endif; ?>

</div>