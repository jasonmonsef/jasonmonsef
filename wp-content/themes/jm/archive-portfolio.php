<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container"  class="one-column">
			<div id="content" role="main">



				<h1>Portfolio</h1>
				<div id="featured-wrap" class="clearfix">
					<div class="triangle"></div>
					<div id="featured-inner">
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

			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
