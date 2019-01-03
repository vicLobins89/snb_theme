<?php get_header(); ?>

			<div id="content" class="gradient-bg">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="vc_col-sm-8 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

								<div class="featured-image">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>

								<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

								<?php the_content(); ?>
								
								<?php
								global $wp;
								$current_url = home_url(add_query_arg(array(),$wp->request));
								?>
								<div class="share">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
									<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php the_title(); echo ' ' . $current_url; ?>" target="_blank">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</div>

							</article> <?php // end article ?>
							  
						<?php
						$lastposts = get_posts( array(
							'numberposts' => -1,
							'exclude' => array(get_the_ID())
						) );

						if ( $lastposts ) {
							$i = 0;
							foreach ( $lastposts as $post ) {
								setup_postdata( $post );
								get_template_part( 'post-formats/format', get_post_format() );
								if (++$i == 5) break;
							}
							wp_reset_postdata();
						}
						?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

					<?php  get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>