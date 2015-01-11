<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">
			<div class="banner" >
				<img style="width: 100%;height: auto;" src="<?php bloginfo('template_url') ?>/images/jason2.jpg"/>
				<div class="caption" ><h1>the future is bright</h1></div>
			</div>
			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>
			
			<div>
				<h2>Resume</h2>
				<div id="resume">
					
					<div class="resume-box item">
						<h3>Career Overview:</h3>
						<p>Frontend Developer Geek with a passion for new technologies and trends.  Specializing in building scalable customized solutions with extensive experience in facebook application development.</p>
					</div>
					<div class="resume-box item">
						<h3>Skills</h3>
						<ul>
							<li>HTML</li>
							<li>CSS</li>
							<li>CSS ANIMATIONS</li>
							<li>PHP</li>
							<li>MySQL</li>
							<li>Javascript</li>
							<li>LAMP Stack Server Management</li>
							<li>Wordpress Theme Development</li>
							<li>Facebook application development</li>
							<li>Landing page development</li>
							<li>Client portals</li>
							<li>E-commerce</li>
						</ul>
					</div>
					<div class="resume-box item">
						<h3>Accomplishments:</h3>
						<ul>
							<li>Developed over 400 apps from scratch</li>
							<li>Managed over 3,500 facebook apps</li>
							<li>Created a new customized and streamlined facebook app creation process that allowed for our company to save time and money on the creation of new apps. This system supported over 2,000 facebook apps and  facilitated the generation of over 200,000 leads through the use of coupon apps, sweepstakes and contests apps that I developed.</li>
							<li>Created an e-commerce solution that facilitated over $30,000 in sales over a 2 day period.</li> 
						</ul>
					</div>
					<div class="resume-box item">
						<h3>Work Experience:</h3>
						<p>
							<strong>Company:</strong> Process Peak, Carlsbad CA<br>
							<strong>Position:</strong> Technology Manager/Lead Frontend Developer<br>
							<strong>Date from:</strong> April 2011 – January 2015<br>
							As the technology manager at Process Peak, I was responsible for all web development and technology related initiatives that were both internal and client facing. In this capacity I was able to work with some top brands in the franchise industry including Brightstar, Togos, Sport Clips, Nothing Bundt Cakes and Charles Schwab developing websites, e-commerce solutions and facebook applications. My biggest accomplishments at Process Peak were the amount of products/solutions that I built that were an integral part of the companies success.
						</p>
					</div>
					<div class="resume-box item">
						<h3>Education and Training:</h3>
						<p><strong>School:</strong>University Of Phoenix<br>
						<strong>Grad Year:</strong> 2008<br>
						<strong>Field of Study:</strong> Business<br>
						<strong>Degree:</strong> Bachelor of Science<br>
						
						I received a Bachelors of Science in Business Management from the University of Phoenix in 2008. During the last eight months of my schooling I traveled 5 different countries in Europe while maintaining a 3.5 GPA.</p> 
					</div>
				</div>
				<h2>Some Brands I've worked on:</h2>
				<div class="clients-wrap">
					<img src="<?php bloginfo('template_url') ?>/images/logos/brightstar.jpg" alt="brightstar" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/marbleslab.jpg" alt="marbleslab" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/sportclips.jpg" alt="sportclips" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/EXPEDIA.jpg" alt="EXPEDIA" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/charleschwab.jpg" alt="charleschwab" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/wirelesszone.jpg" alt="wirelesszone" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/housemaster.jpg" alt="housemaster" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/woldbirds.jpg" alt="woldbirds" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/massageenvy.jpg" alt="massageenvy" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/robeks.jpg" alt="robeks" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/merrymaids.jpg" alt="merrymaids" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/bennigans.jpg" alt="bennigans" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/voodoobbqgrill.jpg" alt="voodoobbqgrill" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/hungryhowies.jpg" alt="hungryhowies" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/nothingbundtcakes.jpg" alt="nothingbundtcakes" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/greatamericancookies.jpg" alt="greatamericancookies" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/pretzelmaker.jpg" alt="pretzelmaker" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/planetfitness.jpg" alt="planetfitness" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/cicis.jpg" alt="cicis" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/tmhortonscbs.jpg" alt="tmhortonscbs" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/bottle%26bottega.jpg" alt="bottle%26bottega" width="170" height="170" />
					<img src="<?php bloginfo('template_url') ?>/images/logos/budgetblinds.jpg" alt="budgetblinds" width="170" height="170" />
				</div><!-- .clients-wrap -->
<!-- 				<div style="text-align: center;font-size: 9px">Please note: Not all of these brands are not my direct clients. I just had the privilege of building websites and stuff for them. </div> -->
			</div>

			</div><!-- #content -->
		</div><!-- #container -->
<script>

			jQuery( document ).ready(function( $ ) {
				
			var $container = $('#resume');
				// init
				$container.isotope({
				  // options
				  itemSelector: '.resume-box',
				  layoutMode: 'masonry',
				  masonry: {
						// columnWidth: 347,
						isFitWidth: true
					}
				});


				});

		</script>
<?php get_footer(); ?>
