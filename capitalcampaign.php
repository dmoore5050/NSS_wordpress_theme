<?php
/*
Template Name: Capital Campaign Page
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/capitalCampaignStyle.css">

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
    <h3 id="modules" class="emphasisTitle">Capital Campaign</h3>
    <!-- <h3 id="modules" class="emphasisTitle">Two hands-on courses, Six months, Full-time</h3> -->
  </div>
<div class='darkBack'>
  <div id="contentWrap2" class='clearfix'>

    <div class='twoThird elements'>
      <h3 class="center homesub">Fund Nashville Software School</h3>
       <iframe width="450" height="253" src="//www.youtube.com/embed/8AdSzQZ8AKo" frameborder="0" allowfullscreen></iframe>
      <p>Fund a scholarship and help build Nashville's home-grown tech community.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonate">Donate</button></a>

    </div>
   
    <div class='lastThird elements'>
      <h4 class="center homesub">5 Dollar Pledge</h4>
            <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer2.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Help keep the lights on and the high-speed internet flowing.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonateRight">5 dollars</button></a>
      <h4 class="center homesub">15 Dollar Pledge</h4>
            <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer2.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Help keep the lights on and the high-speed internet flowing.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonateRight">15 dollars</button></a>
      <h4 class="center homesub">25 Dollar Pledge</h4>
            <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer2.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Help keep the lights on and the high-speed internet flowing.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonateRight">25 dollars</button></a>
      <h4 class="center homesub">100 Dollar Pledge</h4>
            <img id="img" class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/computer2.jpg" alt="first_class" width="250px;" height="300px;"/>
      <p>Help keep the lights on and the high-speed internet flowing.</p>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fundraising' ) ) ); ?>"><button class="button orange applyBtn btnPlaceDonateRight">100 dollars</button></a>
    </div>
    </div>
  </div>
</div>

  <div>
    <div class='light clearfix'>
    <h4 id="modules" class="emphasisTitle">Student Stories</h4>

  </div>
  <section class='firstHalf'>
    <div class="moduleBorder">
      <h3 class="smallHeadline">Marilyn's Story</h3>
    </div>
</br>
    <video src="images/MarylinBites.mov"   width= "450"  preload controls alt="Marylin's Story"/>
</video>
  </section>
  <section class='lastHalf'>
    <div class="moduleBorder">
      <h3 class="smallHeadline">Ryan's Story</h3>
    </div></br>

    <iframe width="450" height="253" src="//www.youtube.com/embed/8AdSzQZ8AKo" frameborder="0" allowfullscreen></iframe>
     </section>
</div>
</div>

<?php get_footer(); ?>

