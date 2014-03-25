<?php
/*
 *
 * The Template for displaying all single posts.
 *
 */
get_header(); ?>
<div class="contentWrap">
  <?php while ( have_posts() ) : the_post(); ?>
    <section class='meta'>
      <p><?php the_author();?> <?php the_time('F j, Y');?></p>
    </section>
    <h1><?php the_title();?></h1>
    <?php the_content();?>
    <?php comments_template( '', true ); ?>
  <?php endwhile;?>
</div>
<?php get_footer(); ?>