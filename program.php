<?php
/*
Template Name: Bootcamp
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/programsStyle.css">
<style>
	.darkBack, .dark {
		background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
		border-top: 2px solid rgb(208, 208, 208);
		border-bottom: 1px solid #D0D0D0;
	}
	.dark {
		background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
		border-bottom: 1px solid #d0d0d0;
		border-top: 1px solid #D0D0D0;
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
		<h3 class="smallHeadline">WEB DEVELOPER BOOTCAMP:</h3>
		<h2 class="emphasisTitle programSpace">Intensive training & focused career preparation</h2>
		<p>Intensive as in full-time, hands-on, writing lots of code, working with other students on projects, being immersed in new and challenging material, fast-moving and rigorous.  That kind of intensive.  Also intellectually stimulating, horizon broadening, energizing and fun.  And by the end, you will be prepared for an entry-level software developer position.</p>
	</section>
	<section class='half'>
		<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/group.png" alt="first_class" width="460px;" height="230px;"/>
	</section>
<div style='clear: both;'></div>
</div>
<div class='darkBack'>
	<div id="contentWrap2" class='clearfix'>
		<div class='firstThird elements'>
			<h3 class="center homesub">Intensive Training</h3>
			<p>Our curriculum is a carefully curated collection of online and video tutorials, classroom lecture and seminar-style discussion.  There are lots of exercises for solo and pair programming as well as larger team projects.  It's all designed around hands-on learning by doing.  You'll get both the hard technical knowledge as well as the soft skills you need to work as a developer. You'll have every opportunity to push yourself hard, to learn fast and to learn deeply.</p>
		</div>
		<div class='midThird elements'>
			<h3 class="center homesub">Mentoring</h3>
			<p>We're going to set a fast pace and push you hard. But, we're not going to make you do it by yourself.  You'll have the chance to be instructed and mentored by some of the smartest, most experienced software developers in Nashville.  They'll help you figure out how to solve problems. They'll help get you unstuck when you get to the hard parts.  They'll give you insight into the paths that they have taken to develop their career and the choices they've made along the way.</p>
		</div>
		<div class='lastThird elements'>
			<h3 class="center homesub">Apprenticeship</h3>
			<p>We work with our partner companies to line up internships and projects that will allow you to gain further hands-on experience.  You'll work with experienced software pros.  You'll gain a introduction to the professional workplace.  You'll expand your network of professional contacts.  You'll get to meet and impress potential employers with your knowledge and passion and ability to deliver.</p>
		</div>
	</div>
</div>
<div class='contentWrap clearfix'>
	<div class='light clearfix'>
		<h3 class="emphasisTitle modules">Web Developer Bootcamp</h3>
		<h3 class="emphasisTitle modules">Two hands-on courses, Six months, Full-time</h3>
	</div>
	<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'apply' ) ) ); ?>"><button class="button orange applyBtn btnPlace">Apply Now</button></a>
	<div>
	<section class='firstHalf'>
		<div class="moduleBorder">
			<h3 class="smallHeadline">Course 1:</h3>
		</div>
		<h4 class="homesub">Web Development Foundations</h4>
		<p>This course focuses on the core front-end or client-side technologies used to develop modern websites and web applications.  On completion of this module students will be able to implement a full dynamic website, to leverage a content management system to deliver and manage that website and to demonstrate their aptitude for programming.  This course also sets the stage for going more deeply into programming of more complex applications, mobile apps, etc. in future training courses.</p>
		<p>You'll learn the fundamentals of how to build websites correctly and be well on the path to becoming a qualified front-end developer.</p>
		<div id="adjustposition">
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/html5.png" alt="html5"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/css3.png" alt="css"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/js.png" alt="js"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/node.png" alt="node"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/ajax.png" alt="ajax"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/coffee.png" alt="coffee"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/jquery.png" alt="jquery"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/wp.png" alt="wordpress"/>
		</div>

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
		<h4 class="homesub">Software Development Foundations</h4>
		<p>This course focuses on core technologies used to develop the back-end, or server-side, of modern web and mobile applications.  You'll learn to concepts such as object-oriented programming, test-driven development, agile methods, pair programming and source code version control.  You will apply one of the most popular, modern web application development frameworks while designing, building and delivering web application. The combination of this course and Web Development Foundations gives the student exposure to "full stack" development of web applications - from controlling the styling of the browser front-end of the application through dynamic front-end logic connected to the business logic and database on the back-end or server side of the application.</p>
		<div id="bottom_bump">
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/ruby.png" alt="ruby"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/rails.png" alt="rails"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/cucs.png" alt="cucumber"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/git.png" alt="github"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/rspec.png" alt="rspec"/>
			<img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/sinatra.png" alt="sinatra"/>
		</div>
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
		<h3 class='third homesub'>Get Paid While You Learn!</h3>
		<p class='twoThird'>Once you are accepted as an apprentice at Nashville Software School you will be paid a modest weekly stipend while you attend the Software Development Fundamentals course and work on apprenticeship projects with our partner companies.  How do you get accepted as an apprentice?  Two ways: one is to successfully complete the Web Development Fundamentals course and the other is to pass our technical interviews and be accepted directly into the Software Development Fundamentals class.</p>
	</div>
<div style='clear: both; background: white; padding-bottom: 1px;'></div>
</div>
	<div class='contentWrap'>
<div style='clear: both;'></div>
	<h3 class='third homesub'>How much is this going to cost?</h3>
	<div class='twoThird'>
		<div class="marginPtag">
	<p>For those students who do not have the training and/or experience to be admitted directly as an apprentice, there is a tuition fee for the Web Developer Bootcamp program.  The tuition is $1000.  That's a bargain for hundreds of hours of instruction, mentoring, and guided project work.</p>
	<p>It's also a bargain given that graduates of the Web Development Foundations course qualify as an NSS apprentice, start earning a stipend and gain admission to Software Development Foundations.</p>
		</div>
	</div>
	<p style="margin-top: 40px;">Seriously – it really is a lot of value for $1000 to say nothing of the fact that’s it is an investment that can pay for itself many times over.</p>
	<p>If you have sufficient technical experience to be admitted directly as an apprentice, there is no tuition.  In fact, we’ll pay you a stipend during the 12 weeks of the Software Development Foundations class.  The stipend will continue after the Software Development Foundations class if you are engaged by one of our partner companies as an apprentice developer.</p>
	<p>The exact amount of the stipend for the 2013 program has not been finalized.  But in terms of order of magnitude, we’re talking stipends at approximately the level of barista wages.  But then, we’re trying to let you stop being a barista and move into a profession with a future.</p>
	<p>The bottom line is – we’ll pay you to learn to become an outstanding software developer.  We only get paid back when you learn enough to start doing your internship projects for customers and when you get hired into a full-time position.</p>
	<p>We have arranged for a limited number of scholarships for students from Nashville’s minority and disadvantaged community.  Those sponsorships will cover tuition.  We may also to arrange for appropriate computing equipment for students.  If you are interested in being considered for sponsorship, please indicate that fact on your application</p>
<div style='clear: both; padding-bottom: 80px; margin-bottom: -20px;'></div>
</div>

<?php get_footer(); ?>
