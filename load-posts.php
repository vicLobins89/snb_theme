<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf vc_col-sm-4 bottom-stories' ); ?> role="article">

	<section class="entry-content cf">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="story-details">
			<?php the_post_thumbnail( array(317, 253) ); ?>
			<h3 class="h3"><?php the_title(); ?></h3>
		</a>

	</section>

</article>