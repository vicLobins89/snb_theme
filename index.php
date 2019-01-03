<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
							<!--<header class="entry-header article-header">
								<h3 class="archive-title"><?php // echo ucfirst($pagename); ?></h3>
							</header>-->

							<?php if (have_posts()) : $postCount = 1; while (have_posts()) : $postCount++; the_post(); ?>
							
							<?php if($postCount == 2) { ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf vc_col-sm-12 top-story' ); ?> role="article">

									<section class="entry-content cf">

										<div class="featured-image">
											<?php the_post_thumbnail( 'full' ); ?>
										</div>

										<div class="story-details">
											<h3 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
											<div class="excerpt"><?php echo get_the_excerpt(); ?></div>
										</div>

									</section>

								</article>
							<div class="cf"></div>
							<div class="wrap other-stories cf">
							<?php } elseif($postCount < 5) { ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf vc_col-sm-6 mid-stories' ); ?> role="article">

									<section class="entry-content cf">

										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="story-details">
											<?php the_post_thumbnail( array(490, 391) ); ?>
											<h3 class="h3"><?php the_title(); ?></h3>
										</a>

									</section>

								</article>
							<?php } else { ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf vc_col-sm-4 bottom-stories' ); ?> role="article">

									<section class="entry-content cf">
										
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="story-details">
											<?php the_post_thumbnail( array(317, 253) ); ?>
											<h3 class="h3"><?php the_title(); ?></h3>
										</a>

									</section>

								</article>
							<?php } ?>

							<?php endwhile; ?>
							</div>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( '', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</div>

				</div>

			</div>


<?php get_footer(); ?>
