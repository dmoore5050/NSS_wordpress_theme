<?php
/*
Template Name: Archives
*/
get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/archiveStyle.css">
<div class='contentWrap'>
	<?php the_post(); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php get_search_form(); ?>
	<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
	<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
</div><!--contentWrap-->
<?php get_footer(); ?>