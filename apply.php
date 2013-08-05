<?php
/*
Template Name: Apply Now Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/applyStyle.css">
<div class="border">
  <div class='contentWrap'>
    <div id="firstHalf">
      <h3 class="smallHeadline spaceThis">GET STARTED </h3>
      <h2 class="emphasisTitle">Apply Now</h2>
    </div>
  <div style="clear: both;"></div>
    <div id='interested'>
      <h2 class="firstColor">Interested in attending Nashville Software School? Apply here for admission to one of our upcoming bootcamps or classes.</h2>
      <h3>What do you need to do to apply? Easy:</h3>
      <p>
        <ul class="listStyle">
          <li>Review the qualifications for our course below.</li>
          <li>Decide if you are applying for the full Web Development Bootcamp or, if you have sufficient technical background and knowledge, for only Software Development Foundations.</li>
          <li>Click the apply button, fill out the form, and click submit.</li>
          <li>Wait for us to review your application.  We'll get in touch to review next steps.</li>
        </ul>
      </p>
    </div>
  </div>
</div>
  <div class="attnHeader">
    <div class="contentWrap">
      <?php $wp_query = new WP_Query("post_type=announcement&tag=active&post_status=publish&posts_per_page=1");?>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h3 class="attnPara"><?php the_subtitle(); ?> </h3>
        <h3 class="subAttnPara"> <?php echo get_the_content(); ?> </h3>
      <?php endwhile; ?>
      <?php else : ?>
          <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
      <?php endif; ?>
      <?php wp_reset_query();?>

    <!-- <h3 class="subAttnPara">Don't miss this opportunity to start your career as a software developer!</h3>
    <a href="" height="800" width="600" frameborder="0"><button class="button orange applyBtn">Apply Soon</button></a> -->
  </div>
</div>
<div class="contentWrap">
  <div>
    <h3 class='emphasisTitleSm'>Web Development Bootcamp</h3>
    <hr>
  </div>
  <div class='third'>
    <h5 class="smallHeadline">Schedule</h5>
    <p>Class Starts: September 9th, 2013</p>
    <p>Class Ends: November 27th, 2013</p>
    <p>Meets: Monday-Friday 8:30am-4:00pm</p>
    <h5 class="smallHeadline">Location:</h5>
    <p>To Be Determined</p>
    <h5 class="smallHeadline">Program Cost</h5>
    <p>Tuition for Bootcamp 1 is $1,000</p>
  </div>
  <div class='twoThird' style="padding-bottom: 40px;">
    <h5 class="smallHeadline">Qualifications</h5>
    <p>No prior technical training or web development experience is required.</p>
    <p>You have an aptitude for technical work in general and programming specifically.</p>
    <p>You have a logical mind & enjoy solving complex problems: Good math skills may be an indicator of aptitude but so could mastery of a musical instrument and knowledge of music theory and experience playing in a band.</p>
    <p>You have solid written and verbal communication skills.</p>
    <p>You are persistent and tenacious: You can concentrate relentlessly on hard problems for extended periods of time.</p>
    <p>You are able to work well with others: Real software development is a team sport and there are lots of pair programming and team projects at NSS. You know how and when to ask for help. You also like to help others.</p>
    <p>You have basic computer skills and proficiency and know how to use common applications such as word processing, spreadsheets, etc. and you have familiarity with using the internet.</p>
    <p>You are motivated to learn a new craft and to immerse yourself in full-time, intensive training program.</p>
    <p>You are eager to get hands-on and build things: We start building things like websites out of software the first week of the program. This isn't an intellectual or textbook exercise. We are all about learning our craft by practicing our craft.</p>
    <p>You have a high school diploma or the equivalent.</p>
  </div><!--twoThird-->
  <h3 class='emphasisTitleSm'>Software Development Foundations</h3>
  <hr/>
  <div class='third'>
    <h5 class="smallHeadline">Schedule</h5>
    <p>Class Starts: TBD</p>
    <p>Class Ends: TBD</p>
    <p>Meets: Monday-Friday 8:30am-4:00pm</p>
    <h5 class="smallHeadline">Location:</h5>
    <p>To Be Determined</p>
    <h5 class="smallHeadline">Program Cost</h5>
    <p>No cost to you.  Actually, we pay you a modest stipend.  Limited number of students admitted directly into this module.</p>
  </div><!--third-->
  <div class='twoThird'>
    <h5 class="smallHeadline">Qualifications</h5>
    <p>Successful completion of our Web Development Bootcamp or the equivalent skills and knowledge.</p>
    <p>You must know HTML and CSS to be able to show us one or more websites that you have built.  We'll expect you to be able to explain what you've done and why you've done it the way you have.  You may also know a content management system like WordPress or Drupal.</p>
    <p>You must know one or more modern programming languages, for exmaple: Javascript, PHP, Ruby, Python, Java, C#, etc.  Show us some code you've written. Explain it.  Show us how you'd make changes to add features we suggest.  For bonus points, show us on Github the contributions you've made to open source projects.  We're not looking for mastery, but we are looking for knowledge of the basics of programming.</p>
  </div><!--twoThird-->
<div style="clear: both;"></div>
</div><!--contentWrap-->
  <div class="contentWrap centerText">
    <!-- <a href="" height="800" width="600" frameborder="0"><button class="button orange applyBtn">Apply Soon</button></a> -->
    </div>
<div style="clear: both; padding-bottom: 120px;"></div>
</div><!--contentWrap-->
<?php get_footer(); ?>
