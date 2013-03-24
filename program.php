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

	<section class='firstHalf'>

		<h3 class="comingSoonTitle">Web Developer Bootcamp</h3>

		<div class='headImg'>
			<img class="headImageBorder img" src="<?php bloginfo('template_url'); ?>/images/NSS_Sam.jpg" alt="first_class" width="400px;" height="180px"/>
		</div>

		<p>Web Development Bootcamp is a two-part, 6 month, full-time program that gives you the skills needed to find work as a entry- or junior-level software developer here in Nashville. Our students leave with experience in "full stack" development of web applications - from controlling the styling of the browser front-end of the application through dynamic front-end logic connected to the business logic and database on the back-end or server side of the application.</p>

		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'bootcamp' ) ) ); ?>"><button class="button orange applyBtn btnPlace2">Learn More</button></a>

	</section>
	<section class='lastHalf'>

		<h3 class="comingSoonTitle">Evening Classes</h3>

		<div class='headImg'>

			<div class="headImageBorder img">	
				<img src="<?php bloginfo('template_url'); ?>/images/Nashville_skyline.jpg" alt="first_class" width="400px" height="180px"/>
			
			</div>
		</div>
		<h1 class="comingSoonBanner">Coming late 2013</h1>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'evening' ) ) ); ?>"><button class="button orange applyBtn btnPlace2">Learn More</button></a>
	</section>

</div>
</div>

</div>

<?php get_footer(); ?>
