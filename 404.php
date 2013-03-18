<?php
/*
Template Name: 404 Page
*/
?>
<?php get_header(); ?>

<div class='contentWrap'>

<div class="entry-content">
	<p>Oops! This page does not exist. </p>
	<p><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'home' ) ) ); ?>" class="button orange myButton" style="color: white; padding-bottom: 10px;">Home</a></p>
</div><!-- #primary -->

