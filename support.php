<?php
/*
Template Name: Support Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/supportStyle.css">




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

<div class='contentWrap clearfix'>
  <div class='light clearfix'>
    <h3 id="modules" class="emphasisTitle">Support Nashville Software School</h3>
    <!-- <h3 id="modules" class="emphasisTitle">Two hands-on courses, Six months, Full-time</h3> -->
  </div>
<div class='darkBack'>
  <div id="contentWrap2" class='clearfix'>
    <div class='firstThird elements'>
      <h3 class="center homesub">One Time Donation</h3>
      <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer1.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Fund a scholarship and help build Nashville's home-grown tech community.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonate">Donate</button></a>

    </div>
    <div class='midThird elements'>
      <h3 class="center homesub">Become a Mentor</h3>
      <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer3.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Become a mentor and help a student find their success.</p>
       <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonate">Donate</button></a>
    </div>
    <div class='lastThird elements'>
      <h3 class="center homesub">Monthly Pledge</h3>
            <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer2.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Help keep the lights on and the high-speed internet flowing.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonateRight">Donate</button></a>
    </div>
  </div>
</div>


<!--   <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlace">Donate</button></a> -->
  <div>
    <div class='light clearfix'>
    <h4 id="modules" class="emphasisTitle">Student Stories</h4>
    <!-- <h3 class="smallHeadline">Student Stories</h3> -->
  </div>
  <section class='firstHalf'>
    <div class="moduleBorder">
      <h3 class="smallHeadline">Marilyn's Story</h3>
    </div></br>
    <video src="images/MarylinBites.mov"   width= "450"  preload controls alt="Marylin's Story"/></video>
    <!-- <h4 class="homesub">Marilyn's Story</h4> -->
    

  </section>
  <section class='lastHalf'>
    <div class="moduleBorder">
      <h3 class="smallHeadline">Ryan's Story</h3>
    </div></br>
    <!-- <h4 class="homesub">Student Stories</h4> -->
    <!-- <video src="images/RyanBites.mov"   width= "450"  preload controls alt="Ryan's Story"/></video> -->
    <iframe width="450" height="253" src="//www.youtube.com/embed/8AdSzQZ8AKo" frameborder="0" allowfullscreen></iframe>
    
    







  
 
<div style='clear: both; padding-bottom: 80px; margin-bottom: -20px;'></div>
</div>

<?php get_footer(); ?>
