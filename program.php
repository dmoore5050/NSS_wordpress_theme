<?php
/*
Template Name: Courses
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/accordian.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/coursesStyle.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>

  @-moz-document url-prefix() {
    .titleSize {
      margin-top:0px;
    }
}

  .backgroundImgChalk {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/chalk_black_low.jpg');
    background-repeat: no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size:    cover;
    -o-background-size:      cover;
    background-size:         cover;
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

  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
      active: false,
      heightStyle: "content"
    });
  });

  $( '#bootcampOverviewButton' ).click(function(){
    $( '#bootcampOverview' ).removeClass( 'hidden' );
    $( '#bootcampSections' ).addClass( 'hidden' );
    $( '#bootcampCosts' ).addClass( 'hidden' );
    $( '#bootcampOverviewButton' ).addClass( 'activeAccordionNavItem' );
    $( '#bootcampCostsButton' ).removeClass( 'activeAccordionNavItem' );
    $( '#bootcampSectionsButton' ).removeClass( 'activeAccordionNavItem' );
    return false;
  } );

  $( '#bootcampSectionsButton' ).click(function(){
    $( '#bootcampSections' ).removeClass( 'hidden' );
    $( '#bootcampOverview' ).addClass( 'hidden' );
    $( '#bootcampCosts' ).addClass( 'hidden' );
    $( '#bootcampSectionsButton' ).addClass( 'activeAccordionNavItem' );
    $( '#bootcampCostsButton' ).removeClass( 'activeAccordionNavItem' );
    $( '#bootcampOverviewButton' ).removeClass( 'activeAccordionNavItem' );
    return false;
  } );

  $( '#bootcampCostsButton' ).click(function(){
    $( '#bootcampCosts' ).removeClass( 'hidden' );
    $( '#bootcampOverview' ).addClass( 'hidden' );
    $( '#bootcampSections' ).addClass( 'hidden' );
    $( '#bootcampCostsButton' ).addClass( 'activeAccordionNavItem' );
    $( '#bootcampSectionsButton' ).removeClass( 'activeAccordionNavItem' );
    $( '#bootcampOverviewButton' ).removeClass( 'activeAccordionNavItem' );
    return false;
  });

});
</script>

<div class='splashWrap'>
  <div class='clearfix'>
    <h1 class='emphasisTitle coursesHeader'>Our <span class='white'>Courses</span></h1>
    <div class='chalkboard backgroundImgChalk'>
      <h3 class='white quote'>Everybody in this country should learn to program a computer, because it teaches you how to think.</h3>
      <h3 class='white quoteAttribute'> <span class='orangeText'>-</span> Steve Jobs</h3>
      <h2 class='smallTwo orangeText'>2</h2>
      <h2 class='nssLogo white'>NS</h2>
    </div>
  </div>
  <p class='triangle_border'>Check out our course listings! Some other great stuff about our programs! And change this font!</p>
</div>
  <div class='accordionWrapper'>
    <div id="accordion">
      <h3>Software Development Bootcamp</h3>
      <div class='accordionPane'>
        <div class='accordionNav'>
          <a href='#' id='bootcampOverviewButton' class='accordionNavItem activeAccordionNavItem'>Overview</a>
          <a href='#' id='bootcampSectionsButton' class='accordionNavItem'>Sections</a>
          <a href='#' id='bootcampCostsButton' class='accordionNavItem'>Costs</a>
        </div>
        <div id='bootcampOverview' class='courseContent'>
          <section class='blurbHalf'>
            <h2 class="emphasisTitle programSpace">Intensive training & focused career preparation</h2>
            <p> Intensive as in full-time, hands-on, collaborative, immersive, challenging, fast-moving, and rigorous. That kind of intensive. Also: intellectually stimulating, horizon broadening, energizing, and fun. All with the goal of preparing you as an entry-level software developer.</p>
          </section>
          <section class='imgHalf'>
            <img class="imgBorder" src="<?php bloginfo('template_url'); ?>/images/group.png" alt="first_class" width="460px;" height="230px;"/>
          </section>
          <div id="contentWrap" class='clearfix'>
            <div class='firstThird elements'>
              <h3 class="center homesub">Intensive Training</h3>
              <p>Our curriculum is a carefully curated collection of online tutorials, classroom lecture, and cooperative discussion.  You’ll be coding solo, in pairs, and in teams.  It's designed around hands-on learning by doing.  You'll get both the hard knowledge and the soft skills you need to succeed as a developer, and the chance to push yourself hard, to learn fast, and to learn deeply.</p>
            </div>
            <div class='midThird elements'>
              <h3 class="center homesub">Mentoring</h3>
              <p>We're going to set a fast pace and push you hard, but you won’t have to do it by yourself.  You'll be instructed and mentored by some of the smartest, most experienced software developers in Nashville.  They'll teach you how to solve problems, help get you unstuck when you hit a wall, and give you insight into the paths they’ve taken and the choices they've made to develop their career.</p>
            </div>
            <div class='lastThird elements'>
              <h3 class="center homesub">Apprenticeship</h3>
              <p>We work with our partner companies to line up internships and projects that will allow you to gain further hands-on experience.  You'll work with experienced software pros.  You'll gain an introduction to the professional workplace.  You'll expand your network of professional contacts.  You'll get to meet and impress potential employers with your knowledge and passion and ability to deliver.</p>
            </div>
          </div>
          <div style='clear: both;'></div>
        </div>
        <div id='bootcampSections' class='hidden courseContent'>
          <div>
            <section class='firstHalf'>
              <div class="moduleBorder">
                <h3 class="smallHeadline">Section 1:</h3>
              </div>
              <h4 class="homesub">Web Development Foundations</h4>
              <div class="courseTextWrapper">
                <p>This course focuses on the core front-end (client-side) technologies used to develop modern websites and web applications.  On completion of this module, students will be able to implement a full dynamic website, leverage a content management system to deliver and manage that website, use source code version control to manage project files, and demonstrate their aptitude for programming.  This course provides the foundation needed to learn how to conceptualize and build complex applications in future training courses.</p>
                <p>You'll learn the fundamentals of how to build websites correctly and be well on the path to becoming a qualified front-end developer.</p>
              </div>
              <div class="bottomBump">
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/html5.png" alt="html5"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/css3.png" alt="css"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/js.png" alt="js"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/ajax.png" alt="ajax"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/jquery.png" alt="jquery"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/wp.png" alt="wordpress"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/git.png" alt="github"/>
              </div>
              <h4 class="homeSub">What You'll Learn</h4>
              <p><ul class="listStyle programsList">
                <li><b>HTML5</b> & <b>CSS</b> to build functional, user-friendly websites</li>
                <li><b>Javascript</b> to add interactivity to web pages and apps </li>
                <li><b>jQuery</b> & <b>AJAX</b> to build dynamic one page apps</li>
                <li><b>API's</b> to integrate data from outside services in your app</li>
                <li><b>Git</b> & <b>Github</b> for source code control and collaboration</li>
                <li><b>Firebug</b> & <b>Chrome Dev Tools</b> to test your web app</li>
                <li>Building and deploying a custom <b>Wordpress</b> site</li>
                <li><b>Soft skills</b> like code review, giving and receiving feedback, and group presentions</li>
              </ul></p>

            </section>
            <section class='lastHalf'>
              <div class="moduleBorder">
                <h3 class="smallHeadline">Section 2:</h3>
              </div>
              <h4 class="homesub">Software Development Foundations</h4>
              <div class="courseTextWrapper">
                <p>This course focuses on core technologies used to develop the back-end, or server-side, of modern web and mobile applications.  You'll learn concepts such as object-oriented programming, test-driven development, agile methods, and pair programming.  You will apply one of the most popular modern web application development frameworks while designing, building, and delivering working apps.</p>
                <p>The combination of this course and Web Development Foundations gives the student exposure to "full stack" development of web applications - from controlling the styling the user sees to building the functional logic and database structures that run behind the scenes.</p>
              </div>
              <div class="bottomBump">
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/ruby.png" alt="ruby"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/rails.png" alt="rails"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/rspec.png" alt="rspec"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/cucs.png" alt="cucumber"/>
                <img class="imgBorder img logoImage" src="<?php bloginfo('template_url'); ?>/images/git.png" alt="github"/>
              </div>
              <h4 class="homeSub">What You'll Learn</h4>
              <p><ul class="listStyle programsList">
                <li><b>Ruby on Rails</b> for building modern, database-oriented applications</li>
                <li><b>RESTful</b> design, emphasizing modular, scalable apps</li>
                <li><b>Test-Driven Development</b> using Capybara, rSpec, Cucumber, and Fabrication</li>
                <li><b>Agile Software Development</b> methods for fast, iterative projects that deliver real user value</li>
                <li><b>Soft skills</b> like pair-programming, interview skills, and healthy coding habits</li>
              </ul></p>
            </section>
          </div>
        </div>
        <div id='bootcampCosts' class='hidden courseContent'>
          <div id='costWrap'>
            <div style='clear: both;'></div>
            <h3 id='costSub' class='third'>How much is this going to cost?</h3>
            <div class='twoThird'>
              <div class="marginPtag">
                <p>For those students who do not have the training and/or experience to be admitted directly as an apprentice, there is a tuition fee for the Web Developer Bootcamp program of  $1000.  That's a bargain for hundreds of hours of instruction, mentoring, and guided project work.</p>
              </div>
            </div>
            <p>It's also a bargain given that graduates of the Web Development Foundations course qualify as an NSS apprentice, start earning a barista-level-wage stipend and gain admission to Software Development Foundations. It’s an investment that can pay for itself many times over.</p>
            <p>If you have sufficient technical experience to be admitted directly as an apprentice, there is no tuition.  In fact, we’ll pay you a stipend - at around the level of barista wages -  during the 12 weeks of the Software Development Foundations class.  The stipend will continue after the Software Development Foundations class if you are engaged by one of our partner companies as an apprentice developer.</p>
            <p>The bottom line is – we’ll pay you to learn to become an outstanding software developer.  We only get paid back when you learn enough to start doing your internship projects for customers and when you get hired into a full-time position.</p>
            <p>We have arranged for a limited number of scholarships for students from Nashville’s minority and disadvantaged community.  Those sponsorships will cover tuition.  We may also to arrange for appropriate computing equipment for students.  If you are interested in being considered for sponsorship, please indicate that fact on your application</p>
          </div>
        </div>
      </div>
      <h3>Night Classes</h3>
      <div class='accordionPane'>
        <h1 class='emphasisTitle'>Night Classes</h1>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>