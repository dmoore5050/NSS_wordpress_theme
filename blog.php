<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/blogStyle.css">
<div class='contentWrap'>
  <aside id='blogAside' class='shadow'>
    <div class="asideBorder">
      <h2 class="smallHeadline">Recent Posts</h2>
    </div>
    <?php wp_get_archives( array ( 'cat' => '-9', 'type' => 'postbypost', 'limit' => '10', 'format' => 'custom', 'before' => '<li class="archives_list">', 'after' => '</li>' ) ); ?>
  </aside><!--blogAside-->
  <div id='loop'>
    <?php $wp_query = new WP_Query("posts_per_page=10,  &cat=-9"); ?>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="blogBorder">
        <h3 class='homesub fontImpact'>
          <a class="blogTitle" href="<?php echo get_permalink (); ?>"><?php the_title();?></a>
        </h3>
      </div>
      <section class='meta'>
        <p><?php the_author();?> | <?php the_time('F j, Y');?></p>
      </section>
      <br />
      <?php the_excerpt(); ?>
      <a class="more_link" href="<?php the_permalink();?>">Read More</a>
    <?php endwhile; ?>
    <?php else : ?>
      <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
    <?php endif; ?>
    <?php wp_reset_query();?>
  </div><!--loop-->
</div><!--/contentWrap-->
<?php get_footer(); ?>