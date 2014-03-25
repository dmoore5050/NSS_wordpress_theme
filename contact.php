<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/contactStyle.css">
<style>
@-moz-document url-prefix() {
   .buttonSpace {
        margin: -15px 30px 0px 30px;
    }
}
</style>
<div class="contentWrap">
	<div class="contactWrap clearfix">
		<div id="col1">
			<div class="contactBorder">
				<h3 class="smallHeadline">OUR MAILING ADDRESS</h3>
				<address>
					<p>Nashville Software School<br/>
					P.O. Box 178161 <br/>
					Nashville, TN 37217<br/>
					</p>
				</address>
				<h3 class="smallHeadline">CLASSROOMS LOCATION</h3>
				<address>
					<p>
					283 Plus Park Blvd <br/>
					Nashville, TN 37217<br/>
					</p>
					<em>Please contact us before visiting</em>
				</address>
			</div>
		</div>
		<div id="col2">
			<div class="contactBorder">
				<h3 class="smallHeadline">CONTACT US</h3>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
