<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">
				<div id="intro-wrap"  class="clearfix">
					<div id="intro-inner">
						<div class="intro">
							<h2>Hi! I am a Frontend Developer specializing in Wordpress, E-Commerce and Facebook Applications</h2>
						</div>
						<div class="quick-links">
							<a href="<?php bloginfo('url') ?>/portfolio">View my work</a>
							<a href="<?php bloginfo('url') ?>/about">About me</a>
						</div>
					</div>	
				</div> <!-- #intro-wrap -->
				<div id="featured-wrap" class="clearfix">
					<div class="triangle"></div>
					<div id="featured-inner">
						<h2>Showcase</h2>
						<div class="featured-list">
							<?php $featured_query = new WP_Query( array( 'post_type' => 'portfolio', 'order' => 'DSC','posts_per_page' => 6  ) ); while($featured_query->have_posts()) : $featured_query->the_post(); ?>
							<?php $image_portfolio = wp_get_attachment_image_src(get_field('portfolio_image_small'), 'large');?>
								<div <?php post_class('featured-item col-md-4 wow fadeIn'); ?> id="post-<?php the_ID(); ?>" style="background: url(<?php echo $image_portfolio[0]; ?>)" data-wow-delay="1s">
									
									<div class="featured-overlay">
										<h3><?php the_title(); ?></h3>
										<a href="<?php the_permalink(); ?>">View more</a>
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); // reset the query ?>

						</div> <!-- .featured-list -->
					</div> <!-- #featured-inner -->
				</div> <!-- #featured-wrap -->
				
			<!-- <img src="<?php bloginfo('template_url') ?>/images/about-me.jpg"/> -->	

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
