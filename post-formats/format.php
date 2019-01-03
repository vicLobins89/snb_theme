<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

	<div class="featured-image">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>

	<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	
	<?php the_content(); ?>

</article> <?php // end article ?>