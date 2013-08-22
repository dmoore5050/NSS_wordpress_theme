<?php
/*
Template Name: Support Page
*/
?>
<?php get_header(); ?>
<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/supportStyle.css'>
<div class='container clearfix'>
  <div class='contentWrap'>
    <h2 id='introHeadline'>Contribute:</h2>
    <h3 id='mainSupportHead'>Invest in Nashville's Tech Community</h3>
    <div id='navWrap'>
      <div class='subNav'>
          <a href='/support/nextstep' class='subNavItem'>Next Step Campaign</a>
          <a href='#' class='subNavItem' data-reveal-id='comingSoonModal' data-animation='fade' data-animationspeed='300'>Capital Campaign</a>
      </div>
      <div id='comingSoonModal' class='reveal-modal hide'>
        <h1 id='modalHead'>Capital Campaign</h1>
        <h2 id='modalSubhead'>launching september 2013</h2>
      </div>
    </div>
    <div class='left'>
      <p>
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
      </p>

      <p>
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
        Text about how great NSS is and why to contribute.
      </p>
    </div>
    <div class='right'>
      <div class='video_placeholder'>
        Video Placeholder
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>