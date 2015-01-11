<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="height=device-height; initial-scale=1.0">

<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:400,700,500,700italic,300italic,300">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style-animate.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<link href="<?php bloginfo('template_url') ?>/js/icheck/skins/square/grey.css" rel="stylesheet">
<script src="<?php bloginfo('template_url') ?>/js/icheck/icheck.min.js"></script>

<link href="<?php bloginfo('template_url') ?>/js/star-rating/star-rating.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url') ?>/js/star-rating/star-rating.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/isotope.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/wow.js"></script>
<script>

 jQuery( document ).ready(function() {
   new WOW().init();
});
</script>
</head>

<body <?php body_class(); ?>>
<div id="header" class="clearfix loaded wow bounceInDown" data-wow-delay="1s">
	<div id="header-interior">
		<div id="logo">
			<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/logo-rev4.png"/></a>
		</div>
		<div id="access" role="navigation">
			<ul>
				<li><a href="<?php bloginfo('url') ?>/portfolio">portfolio</a></li>
				<li><a href="<?php bloginfo('url') ?>/about">about</a></li>
				<li><a href="#contact-wrap">contact</a></li>
			</ul>
		</div><!-- #access -->
		<div id="mobile-menu">
			<a id="nav-toggle" href="#"><span></span></a>
		</div>
	</div>	
</div><!-- #header -->

<?php 
	if ( is_front_page() && is_home() ) {
  // Default homepage
	} elseif ( is_front_page() ) { ?>
	<div id="hero-banner" >
	<div class="message wow fadeIn" >
		<h1>Jason Monsef</h1>
		<h2>I breath life into beautiful designs</h2>
  </div> <!-- .message -->
  <div class="button-next wow fadeIn">
	  <a href="#" class="smooth-anchor">Get to know me</a>
  </div>
</div> <!-- #hero-banner -->
<span id="getstarted" class="anchor"></span>

	<?php  // static homepage
	} else {
	  //everything else
	}
?>
<div id="wrapper" class="hfeed">

	<div id="main">
<script>
	jQuery('#hero-banner').css('height', window.innerHeight+'px');

jQuery(window).resize(function() {

jQuery('#hero-banner').css('height', window.innerHeight+'px');

});
jQuery('#nav-toggle').click(function(){
	jQuery('#nav-toggle').toggleClass('active')
});
jQuery(document).on('click', '#nav-toggle', function () {
				jQuery('.switch').addClass('overlay').removeClass('switch').show();
				jQuery('.overlay').toggleClass('open');
				jQuery('.trigger-overlay.close').show()
				jQuery('.gform-wrap').removeClass('expand')
			});

// bind a function to the window's scroll event, this will update
// the 'active' class every time the user scrolls the window
jQuery(window).scroll(function() {    
    // find the li with class 'active' and remove it
    jQuery("#header").removeClass("loaded");
    // get the amount the window has scrolled
    var scroll = jQuery(window).scrollTop();
    // add the 'active' class to the correct li based on the scroll amount
    if (scroll >= 50) {
        jQuery("#header").addClass("scrolling");
    }
    else {
        jQuery("#header").removeClass("scrolling");
        jQuery("#header").addClass("loaded");
    }

});
</script>