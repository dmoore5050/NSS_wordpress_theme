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
      <h2 class="firstColor">Interested in attending Nashville Software School? Apply here for admission to one of our upcoming bootcamps.</h2>
      <h3>What do you need to do to apply? Easy:</h3>
      <p>
        <ul class="listStyle">
          <li>Review the qualifications for our course below.</li>
          <!-- <li>Decide which start date(s) you are applying for - you're welcome to apply for more than one.</li> -->
          <li>Decide which tuition plan you are applying for - see either the <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'program' ) ) ); ?>">Program</a> page or the bottom of this page for more details.</li>
          <li>Click the apply button, fill out the form, and click submit.</li>
          <li>Wait for us to review your application.  If we like what we see, we'll follow-up to schedule either a video interview or an in-person interview.
            Our goal is to review applications within one week after receipt and to hold interviews within 2 to 3 weeks after receipt.</li>
        </ul>
      </p>
    </div>
  </div>
</div>
  <div class="attnHeader">
    <div class="contentWrap">
      <h3 class="subAttnPara ticker"><?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(652);} ?></h3>
      <h3 class="subAttnPara">Don't miss this opportunity to start your career as a software developer!</h3>
      <a href="http://tfaforms.com/244179" height="800" width="600" frameborder="0"><button class="button orange applyBtn">Apply Now</button></a>
    </div>
  </div>
<div class="contentWrap">
  <div>
    <h3 class='emphasisTitleSm'>Web Developer Bootcamp</h3>
    <hr>
  </div>
  <div class='third'>
    <h5 class="smallHeadline">Schedule</h5>
    <p>Meets: Monday-Friday 8:30am-4:00pm</p>
    <h5 class="smallHeadline cohortTitle">Cohort 6</h5>
    <p><span class="smallerHeadline">Web Dev class:</span><br>
      July 7, 2014 - September 26, 2014</p>
    <p><span class="smallerHeadline">Software Dev class:</span><br>
      October 6, 2014 - TBD</p>
    <h5 class="smallHeadline">Location:</h5>
    <p>NSS Classroom space, Nashville</p>
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
</div><!--contentWrap-->
<div class='contentWrap'>
  <hr>
  <h3 class='third homesub'>What will this cost?</h3>
  <div class='twoThird'>
    <div class="marginPtag">
      <p>There are two ways to pay for your training at NSS: our standard tuition or by qualifying as a Nashville Tech Apprentice.  Out of a total of 24 seats in each cohort at NSS, our goal is to have 12 be Nashville Tech Apprentices and the remainder paying standard tuition.  
      </p>
    </div>
  </div>
  <h5 class="smallHeadline">Standard Tuition</h5>
  <p>The standard tuition program is new for 2014 - previously seats in our classes were only available to Nashville residents or those with strong local connections.  With this program we are now able to open up admission to Nashville Software School to:
    <ul>
      <li>Students who are shopping across the U.S. for a programming bootcamp and are interested in a six-month program like ours.</li>
      <li>Local residents who want to graduate unencumbered by the requirement to pay the school back for their training or go to work for one of our partners.  You may desire to work on your own tech startup or you may desire to live somewhere other than Nashville.</li>
      <li>Students whose tuition is being reimbursed by an employer. </li>
    </ul> 
  </p>
  <p><span>Tuition:</span> Full tuition for our July 2014 Bootcamp is $10,500.  However, if you accept a position through our job placement program, we will refund $3,000 of your tuition. Grants and scholarships are also available for students from underrepresented groups like women and minorities.</p>
  <h5 class="smallHeadline">Nashville Tech Apprentice Program</h5>
  <p>A Nashville Software School Tech Apprenticeship allows you to defer most of the cost of your training until you graduate and go to work as a software developer.  You will pay us $1,000 in tuition on acceptance to the program and then nothing else until after graduation.  After graduation, if you accept a position through our placement program from one of our partner companies, the rest your tuition will be reimbursed by your employer.  If you choose to go to work for someone other than one of our partners, we'll work with you to either negotiate payment from your new employer and/or work out a payment plan by which you can reimburse the school.</p>
  <p>A limited number of grants and scholarships are also available for students from underrepresented groups like women and minorities.  We also will make a limited number of cost-of-living stipends available on a needs-driven basis to Apprentices during the second 3 months of the Bootcamp.</p>
  <p><span>Tuition:</span> If you are accepted as a Nashville Tech Apprentice, you will he required to pay $1,000 in tuition on acceptance to the program.</p>

  <h5>Who should apply for a Nashville Tech Apprenticeship?</h5>
  <p>Apprenticeships are available to residents of Middle Tennessee or to those outside the area who are former residents, who have family in the area, or have some other strong local connection.  A connection strong enough that we can feel confident that you plan to stay in Nashville after you graduate from NSS.  Our Apprentice program is designed to provide access to a career as a professional software developer irrespective of economic circumstances for those who are committed to work and live in Middle Tennessee.</p>
  <p>If you want to be free of obligation after you graduate to NSS and to the Nashville tech community - if you want to be free to move elsewhere to work, if you want to be free to work on your own startups or projects, if you want to keep all of your options open for where you go or what you do after graduation, then our Apprentice program is NOT for you.  You should apply for acceptance in NSS as a regular student.</p>
  <p>To qualify as an apprentice, you must be fully committed to be in our classroom every day for six months from 8:30am until 4:00pm.  We are making a significant investment in the future when we admit a student as an apprentice.  You'll need to show us that you are as committed to your future as we are.  You also must expect a highly competitive admissions process.</p>
  <h5>How many Nashville Tech Apprenticeships are available in each Bootcamp?</h5>
  <p>We plan to start a new Bootcamp every 3 months during 2014: in January, April, July and October.  Our target is 24 total students in each Bootcamp.  We plan to accept 12 regular students and 12 Apprentices for each Bootcamp.<p>
</div><br>
<div class="contentWrap centerText">
  <a href="http://tfaforms.com/244179" height="800" width="600" frameborder="0"><button class="button orange applyBtn">Apply Now</button></a>
</div><br>

<?php get_footer(); ?>
