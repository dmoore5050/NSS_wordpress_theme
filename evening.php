<?php
/*
Template Name: Program Description Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/programStyle.css">
<style>
.darkBack, .dark
{
background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
border-top: 2px solid rgb(208, 208, 208);
border-bottom: 1px solid #D0D0D0;
}
.dark
{
background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
border-bottom: 1px solid #d0d0d0;
border-top: 1px solid #D0D0D0;
}
.light
{
padding: 25px 0px 20px 0px;
}
@-moz-document url-prefix() {
   .titleSize {
        margin-top:0px;
    }
}
</style>
<script>
function equalHeight(group) {
   tallest = 0;
   group.each(function() {
      	thisHeight = $(this).height();
      		if(thisHeight > tallest) {
         		tallest = thisHeight;
      		}
   	});
   group.height(tallest);
}
$(document).ready(function() {
   equalHeight($(".elements"));
});
</script>
<div class='contentWrap'>
	<section class='half'>
		<h3 class="smallHeadline">NSS Evenings:</h3>
		<h2 class="emphasisTitle programSpace">Intensive training & focused career preparation</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
	</section>
	<section class='half'>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/group.png" alt="first_class" width="460px;" height="230px;"/>
	</section>
<div style='clear: both;'></div>
</div>
<div class='darkBack'>
	<div id="contentWrap2" class='clearfix'>
		<div class='firstThird elements'>
			<h3 class="center homesub">Intensive Training</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.</p>
		</div>
		<div class='midThird elements'>
			<h3 class="center homesub">Mentoring</h3>
			<p>We're going to set a fast pace and push you hard. But, we're not going to make you do it by yourself.  You'll have the chance to be instructed and mentored by some of the smartest, most experienced software developers in Nashville.  They'll help you figure out how to solve problems. They'll help get you unstuck when you get to the hard parts.  They'll give you insight into the paths that they have taken to develop their career and the choices they've made along the way.</p>
		</div>
		<div class='lastThird elements'>
			<h3 class="center homesub">Apprenticeship</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
		</div>
	</div>
</div>
<div class='contentWrap clearfix'>
	<div class='light clearfix'>
		<h3 id="modules" class="emphasisTitle">Web Developer Bootcamp</h3>
		<h3 id="modules" class="emphasisTitle">Two hands-on courses, Six months, Full-time</h3>
	</div>
	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'apply' ) ) ); ?>"><button class="button orange applyBtn btnPlace">Apply Now</button></a>
	<div>
	<section class='firstHalf'>
		<div class="moduleBorder">
			<h3 class="smallHeadline">Course 1:</h3>
		</div>
		<h4 class="homesub">Excepteur sint occaecat</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, ut enim.</p>
		<div style="margin-top: 60px;">
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/html5.png" alt="html5"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/css3.png" alt="css"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/js.png" alt="js"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/node.png" alt="node"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/ajax.png" alt="ajax"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/coffee.png" alt="coffee"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/jquery.png" alt="jquery"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/wp.png" alt="wordpress"/></div>

		<h4 class="homesub">What You'll Learn</h4>
		<p><ul class="listStyle">
			<li>HTML5 and CSS</li>
			<li>Javascript fundamentals including website scripting</li>
			<li>Web technologies such as jQuery, AJAX, coffeescript</li>
			<li>Building one page apps using Javascript and node.js</li>
			<li>Testing your web app using Firebug and Jasmine </li>
			<li>Wordpress - you will learn to convert your HTML and CSS markup into a theme for the content management platform most widely used for creating and delivering web sites</li>
		</ul></p>

	</section>
	<section class='lastHalf'>
		<div class="moduleBorder">
			<h3 class="smallHeadline">Course 2:</h3>
		</div>
		<h4 class="homesub">Consectetur adipisicing elit</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/ruby.png" alt="ruby"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/rails.png" alt="rails"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/cucs.png" alt="cucumber"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/git.png" alt="github"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/rspec.png" alt="rspec"/>
		<img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/sinatra.png" alt="sinatra"/>
		<h4 class="homesub">What You'll Learn</h4>
		<p><ul class="listStyle">
			<li>The Ruby language and Rails framework - a great combination for building modern, database-oriented web applications</li>
			<li>Test-driven development using tools rSpec and Cucumber</li>
			<li>Source code control using </li>
			<li>Git and collaboration using Github</li>
			<li>Agile software development methods for fast, iterative projects that deliver real user value</li>
			<li>Other soft skills such as pair-programming, code reviews, giving and receiving feedback, giving presentations, interviewing, etc.</li>
		</ul></p>
	</section>
	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'apply' ) ) ); ?>"><button class="button orange applyBtn btnPlace2">Course Details & Schedules</button></a>
</div>
</div>

<div class='darkBack clearfix' style="padding-bottom: 5px;">
	<div class='contentWrap'>
		<h3 class='third homesub'>Excepteur sint occaecat cupidatat</h3>
		<p class='twoThird'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing. </p>
	</div>
<div style='clear: both; background: white; padding-bottom: 1px;'></div>
</div>
	<div class='contentWrap'>
<div style='clear: both;'></div>
	<h3 class='third homesub'>Duis aute irure dolor in reprehenderit</h3>
	<div class='twoThird'>
		<div class="marginPtag">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
		</div>
	</div>
	<p style="margin-top: 40px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. qui officia deserunt mollit anim id est laborum. </p>
	<div style='clear: both; padding-bottom: 80px; margin-bottom: -20px;'></div>
</div>

<?php get_footer(); ?>
