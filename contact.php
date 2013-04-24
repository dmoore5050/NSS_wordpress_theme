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
				<h3 class="smallHeadline">OUR LOCATION</h3>
				<address>
					<p>Nashville Business Incubation Center (NBIC)<br/>
					315 Tenth Avenue North<br/>
					Nashville, TN</p>
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
