<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
<div id="contact-wrap">
					<div class="triangle"></div>
					<div id="contact-inner" class="wow bounceIn" data-wow-delay=".5s">
						<h2>Get in touch!</h2>
						<p>I'm currently accepting freelance projects, so feel free to drop me a line if you're interested!</p>
						<?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
					</div>
				</div>
	<div id="footer" role="contentinfo">
	</div><!-- #footer -->
	
	<div class="switch">
				<div class="overlay-inner ">
					<div id="access" role="navigation" style="display: block ! important; float: none; width: 100%; text-align: center; margin-top: 40%;">
						<ul>
							<li><a href="<?php bloginfo('url') ?>/portfolio">portfolio</a></li>
							<li><a href="<?php bloginfo('url') ?>/about">about</a></li>
							<li><a href="#contact-wrap">contact</a></li>
						</ul>
					</div><!-- #access -->
				</div>
	</div>
</div><!-- #wrapper -->
<script>
	jQuery(document).on('touchstart click', '.smooth-anchor', function () {
				jQuery('html, body').delay(300).animate({
					scrollTop: jQuery('#getstarted').offset().top
	   		}, 1000);
			});
</script>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
