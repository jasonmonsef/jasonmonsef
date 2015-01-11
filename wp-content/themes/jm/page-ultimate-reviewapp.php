<?php
/**
 * Template Name: Ultimate Review App
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

<style>
	ul.gfield_radio {
  margin: 0 !important;
  padding: 0;
}
	form .stars li {display: inline-block;float: left;}	
	form .stars {
  background: url("<?php bloginfo('template_url') ?>/images/stars.png") repeat-x 0 0;
  width: 150px;
  margin: 0 auto;
}
 
form .stars input[type="radio"] {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
form .stars input[type="radio"].star-5:checked ~ span {
  width: 100%;
}
form .stars input[type="radio"].star-4:checked ~ span {
  width: 80%;
}
form .stars input[type="radio"].star-3:checked ~ span {
  width: 60%;
}
form .stars input[type="radio"].star-2:checked ~ span {
  width: 40%;
}
form .stars input[type="radio"].star-1:checked ~ span {
  width: 20%;
}
form .stars label {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0!important;
  padding: 0!important;
  text-indent: -999em;
  float: left;
  position: relative;
  z-index: 10;
  background: transparent!important;
  cursor: pointer;
}
form .stars label:hover ~ span {
  background-position: 0 -30px;
}
form .stars label.star-5:hover ~ span {
  width: 100% !important;
}
form .stars label.star-4:hover ~ span {
  width: 80% !important;
}
form .stars label.star-3:hover ~ span {
  width: 60% !important;
}
form .stars label.star-2:hover ~ span {
  width: 40% !important;
}
form .stars label.star-1:hover ~ span {
  width: 20% !important;
}
form .stars span {
  display: block;
  width: 0;
  position: relative;
  top: 0;
  left: 0;
  height: 30px;
  background: url("<?php bloginfo('template_url') ?>/images/stars.png") repeat-x 0 -60px;
  -webkit-transition: -webkit-width 0.5s;
  -moz-transition: -moz-width 0.5s;
  -ms-transition: -ms-width 0.5s;
  -o-transition: -o-width 0.5s;
  transition: width 0.5s;
}
</style>


		<div id="container" class="one-column">
			<div id="content" role="main">
<!--
<form id="ratingsForm">
    <div class="stars">
        <input type="radio" name="star" class="star-1" id="star-1" onclick="gf_apply_rules(1,[0,2,5]);" name="input_4"/>
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="star" class="star-2" id="star-2" />
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="star" class="star-3" id="star-3" />
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="star" class="star-4" id="star-4" />
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="star" class="star-5" id="star-5" />
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
</form>
-->
<form id="ratingsForm">
<div class="stars">
	<ul id="input_1_4" class="gfield_radio">
			<input type="radio" onclick="gf_apply_rules(1,[0,2,5]);" tabindex="1" id="choice_4_0" value="gsurvey4b0b3eb21" name="input_4" class="star-1">
			<label id="label_4_0" for="choice_4_0" class="star-1"></label>
			<input type="radio" onclick="gf_apply_rules(1,[0,2,5]);" tabindex="2" id="choice_4_1" value="gsurvey44ab71275" name="input_4" class="star-2">
			<label id="label_4_1" for="choice_4_1" class="star-2"></label>
			<input type="radio" onclick="gf_apply_rules(1,[0,2,5]);" tabindex="3" id="choice_4_2" value="gsurvey481ab3fc6" name="input_4" class="star-3">
			<label id="label_4_2" for="choice_4_2" class="star-3"></label>
			<input type="radio" onclick="gf_apply_rules(1,[0,2,5]);" tabindex="4" id="choice_4_3" value="gsurvey429e78a84" name="input_4" class="star-4">
			<label id="label_4_3" for="choice_4_3" class="star-4"></label>
			<input type="radio" onclick="gf_apply_rules(1,[0,2,5]);" tabindex="5" id="choice_4_4" value="gsurvey4b43b65f0" name="input_4" class="star-5">
			<label id="label_4_4" for="choice_4_4" class="star-5"></label>
		<span></span>
	</ul>
	
</div>
</form>
			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->




<?php get_footer(); ?>
