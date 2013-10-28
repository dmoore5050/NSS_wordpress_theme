<?php
/*
Template Name: Bootcamp
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/programsStyle.css">


<style>
  .darkBack, .dark {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
    border-top: 2px solid rgb(208, 208, 208);
    border-bottom: 1px solid #D0D0D0;
  }

  .dark {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
    border-bottom: 1px solid #d0d0d0;
    border-top: 1px solid #D0D0D0;
  }

  @-moz-document url-prefix() {
    .titleSize {
      margin-top:0px;
    }

    #last_p_margin_correction {
      margin-bottom: 0!important;
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

<div class='contentWrap'>
  <section class='half'>
    <h3 class="smallHeadline">WEB DEVELOPER BOOTCAMP:</h3>
    <h2 class="emphasisTitle programSpace">Intensive training & focused career preparation</h2>
    <p>Intensive as in full-time, hands-on, writing lots of code, working with other students on projects, being immersed in new and challenging material, fast-moving and rigorous.  That kind of intensive.  Also intellectually stimulating, horizon broadening, energizing and fun.  And by the end, you will be prepared for an entry-level software developer position.</p>
  </section>
  <section class='half'>
    <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/cohort2.jpg" alt="first_class" width="430px;" height="280px;"/>
  </section>
<div style='clear: both;'></div>
</div>
<div class='darkBack'>
  <div id="contentWrap2" class='clearfix'>
    <div class='firstThird elements'>
      <h3 class="center homesub">Intensive Training</h3>
      <p>Our curriculum is a carefully curated collection of online and video tutorials, classroom lecture and seminar-style discussion.  There are lots of exercises for solo and pair programming as well as larger team projects.  It's all designed around hands-on learning by doing.  You'll get both the hard technical knowledge as well as the soft skills you need to work as a developer. You'll have every opportunity to push yourself hard, to learn fast and to learn deeply.</p>
    </div>
    <div class='midThird elements'>
      <h3 class="center homesub">Mentoring</h3>
      <p>We're going to set a fast pace and push you hard. But, we're not going to make you do it by yourself.  You'll have the chance to be instructed and mentored by some of the smartest, most experienced software developers in Nashville.  They'll help you figure out how to solve problems. They'll help get you unstuck when you get to the hard parts.  They'll give you insight into the paths that they have taken to develop their career and the choices they've made along the way.</p>
    </div>
    <div class='lastThird elements'>
      <h3 class="center homesub">Apprenticeship</h3>
      <p>We work with our partner companies to line up internships and projects that will allow you to gain further hands-on experience.  You'll work with experienced software pros.  You'll gain a introduction to the professional workplace.  You'll expand your network of professional contacts.  You'll get to meet and impress potential employers with your knowledge and passion and ability to deliver.</p>
    </div>
  </div>
</div>
<div class='contentWrap clearfix'>
  <div class='light clearfix'>
    <h3 class="emphasisTitle modules">Web Developer Bootcamp</h3>
    <h3 class="emphasisTitle modules">Two hands-on courses, Six months, Full-time</h3>
  </div>
  <section class='firstHalf'>
    <div class="moduleBorder">
      <h3 class="smallHeadline">Course 1:</h3>
    </div>
    <h4 class="homesub">Web Development Foundations</h4>
    <div class="course_text_wrapper">
      <p>This course focuses on the core front-end or client-side technologies used to develop modern websites and web applications.  On completion of this module students will be able to implement a full dynamic website, to leverage a content management system to deliver and manage that website and to demonstrate their aptitude for programming.  This course also sets the stage for going more deeply into programming of more complex applications, mobile apps, etc. in future training courses.</p>
      <p>You'll learn the fundamentals of how to build websites correctly and be well on the path to becoming a qualified front-end developer.</p>
    </div>
    <div class="bottom_bump">
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/html5.png" alt="html5"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/css3-logo.png" alt="css"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/js.png" alt="js"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/node.png" alt="node"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/ajax.png" alt="ajax"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/coffee.png" alt="coffee"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/jquery.png" alt="jquery"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/git.png" alt="github"
      />
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/wp.png" alt="github"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/firebase.png" alt="github"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/bootstrap_logo.png" alt="github"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/sass.png" alt="github"/>
    </div>

    <h4 class="homesub">What You'll Learn</h4>
    <p><ul class="listStyle">
      <li>HTML5 and CSS</li>
      <li>Javascript fundamentals including website scripting</li>
      <li>Source code control using Git</li>
      <li>Collaborative coding using Github</li>
      <li>Web technologies such as jQuery, AJAX, coffeescript</li>
      <li>Building one page apps using Javascript and node.js</li>
      <li>Testing your web app using Firebase and Jasmine </li>
      <li>Wordpress - you will learn to convert your HTML and CSS markup into a theme for the most widely used content management platform</li>
    </ul></p>

  </section>
  <section class='lastHalf'>
    <div class="moduleBorder">
      <h3 class="smallHeadline">Course 2:</h3>
    </div>
    <h4 class="homesub">Software Development Foundations</h4>
    <div class="course_text_wrapper">
    <p>This course focuses on core technologies used to develop the back-end, or server-side, of modern applications.  You'll learn concepts such as object-oriented programming, test-driven development, agile methods, and pair programming.  You will apply one of the most popular modern development frameworks while designing, building, and delivering working apps.</p>
    <p>This course combined with Web Development Foundations exposes the student to "full stack" development of web applications - from controlling the styling the user sees to building the functional logic and database structures that run behind the scenes.</p>
    </div>
    <div class="bottom_bump">
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/ruby.png" alt="ruby"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/rails.png" alt="rails"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/cucs.png" alt="cucumber"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/git.png" alt="github"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/rspec.png" alt="rspec"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/sinatra.png" alt="sinatra"/>
      <img class="imgBorder img" src="<?php bloginfo('template_url'); ?>/images/selenium-logo.png" alt="sinatra"/>

    </div>
    <h4 class="homesub">What You'll Learn</h4>
    <p><ul class="listStyle">
      <li>The Ruby language and Rails framework - a great combination for building modern, database-oriented web applications</li>
      <li>Test-driven development using tools such as rSpec and Cucumber with Selenium</li>
      <li>Agile software development methods for fast, iterative projects that deliver real user value</li>
      <li>Other soft skills such as pair-programming, code reviews, giving and receiving feedback, giving presentations, interviewing, etc.</li>
    </ul></p>
  </section>
  <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'apply' ) ) ); ?>"><button class="button orange applyBtn btnPlace2">Course Details & Schedules</button></a>
</div>
<div class='contentWrap'>
  <div class="moduleBorder"><br>
    <h3 class='third homesub'>What will this cost?</h3>
  </div>
  <div class='twoThird'>
    <div class="marginPtag">
      <p>There are two ways to pay for your training at NSS: our standard tuition or by qualifying as Nashville Tech Apprentice.  Out of a total of 24 seats in each cohort at NSS, our goal is to have 12 be Nashville Tech Apprentices and the remainder paying standard tuition.  
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
  <p><span>Tuition:</span> Full tuition for our January and April 2014 Bootcamps is $10,500.  However, if you accept a position through our job placement program, we will refund $3,000 of your tuition. Grants and scholarships are also available for students from underrepresented groups like women and minorities.</p>
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

  <div style='clear: both; padding-bottom: 80px; margin-bottom: -20px;'></div>
 <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'apply' ) ) ); ?>"><button class="button orange applyBtn btnPlace">Apply Now</button></a>
</div>

<?php get_footer(); ?>
