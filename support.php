<?php
/*
Template Name: Support Page
*/
?>
<?php get_header(); ?>
<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/supportStyle.css'>
<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/campaignStyle.css'>

<script>
  $(document).ready(function() {

    $( '#tabOne' ).click(function(){
      $( '#tabOne' ).removeClass( 'inactiveTab' ).addClass( 'activeTab' );
      $( '#tabTwo' ).removeClass( 'activeTab' ).addClass( 'inactiveTab' );
      $( '#tabThree' ).removeClass( 'activeTab' ).addClass( 'inactiveTab' );
      $( '#campaignContentWrapper' ).removeClass( 'hidden' );
      $( '#donorWallWrapper' ).addClass( 'hidden' );
      $( '#updatesWrapper' ).addClass( 'hidden' );
      return false;
    });

    $( '#tabTwo' ).click(function(){
      $( '#tabTwo' ).removeClass( 'inactiveTab' ).addClass( 'activeTab' );
      $( '#tabOne' ).removeClass( 'activeTab' ).addClass( 'inactiveTab' );
      $( '#tabThree' ).removeClass( 'activeTab' ).addClass( 'inactiveTab' );
      $( '#updatesWrapper' ).removeClass( 'hidden' );
      $( '#campaignContentWrapper' ).addClass( 'hidden' );
      $( '#donorWallWrapper' ).addClass( 'hidden' );
      return false;
    });

    $( '#tabThree' ).click(function(){
      $( '#tabThree' ).removeClass( 'inactiveTab' ).addClass( 'activeTab' );
      $( '#tabOne' ).removeClass( 'activeTab' ).addClass( 'inactiveTab' );
      $( '#tabTwo' ).removeClass( 'activeTab' ).addClass('inactiveTab');
      $( '#donorWallWrapper' ).removeClass( 'hidden' );
      $( '#campaignContentWrapper' ).addClass( 'hidden' );
      $( '#updatesWrapper' ).addClass( 'hidden' );
      return false;
    });

    $('.openForm').click(function(){
      var value = $(this).attr('data-amount');
      var recur = $(this).attr('data-recur');
      var frequency = $(this).attr('data-frequency');
      var duration = $(this).attr('data-duration');
      $('#amount').val(value);
      $('#t3').val(recur);
      $('#p3').val(frequency);
      $('#srt').val(duration);
    });

    $('#formSubmit').click(function(){
      $('#formModal').trigger('reveal:close');
    });

    $('#more1').click(function(){
      if($(this).html() == "more"){
        $('#supportAbout').slideDown();
        $('.arrow-right').css({"transform" : "rotate(90deg)"});
        $(this).html("less");
      } else {
          $('#supportAbout').slideUp();
          $('.arrow-right').css({"transform" : "rotate(0deg)"});
          $(this).html("more");
        }
    })

    $('#more2').click(function(){
      if($(this).html() == "more"){
        $('#sustainable').slideDown();
        $('.arrow-right').css({"transform" : "rotate(90deg)"});
        $(this).html("less");
      } else {
          $('#sustainable').slideUp();
          $('.arrow-right').css({"transform" : "rotate(0deg)"});
          $(this).html("more");
        }
    })

    $('#more3').click(function(){
      if($(this).html() == "more"){
        $('#helpUs').slideDown();
        $('.arrow-right').css({"transform" : "rotate(90deg)"});
        $(this).html("less");
      } else {
          $('#helpUs').slideUp();
          $('.arrow-right').css({"transform" : "rotate(0deg)"});
          $(this).html("more");
        }
    })

  })
</script>
<div id='container'>
  <div id='titleWrapper'>
    <h1 id='campaignHeader' class='emphasisTitle'>Sustain Nashville Software School</h1>
    <h2 id='campaignSubhead'>We need your support to continue to grow Nashville's tech talent pool</h2>
  </div>
  <div id='tabsWrapper'>
    <p id='tabOne' class='activeTab'>
      <a href='#' class='tab'>Campaign Home</a>
    </p>
    <p id='tabTwo' class='inactiveTab'>
      <a href='#' class='tab'>Updates</a>
    </p>
    <p id='tabThree' class='inactiveTab'>
      <a href='#' class='tab'>Recognition Wall</a>
    </p>
  </div>
  <div id='contentWrapper' class='clearfix'>
    <div id='mainWrapper'>
      <div id='campaignContentWrapper'>
        <section id='campaignMedia'>
         <iframe width="620" height="383" src="//www.youtube.com/embed/XZiska--wX0" frameborder="0" allowfullscreen></iframe>
        </section>
        <section id='campaignBody'>
          <p class='bodyText'>
            Between June of 2012 and July of 2013 Nashville Software School graduated its first 
            40 junior software developers and demonstrated the viability of its training model. 
            Now it’s time to take the next step in the evolution of NSS and move towards long-term 
            sustainability of its business model.
          </p>
          <h2 class="bodyTitle">Fixing Nashville's Tech Talent Shortage</h2>
          <p class='bodyText'>
            All of us who have been working in and around the Nashville tech community, or who have been 
            trying to hire or partner with skilled software developers, have known for years that Nashville 
            has a painful shortage of these critical resources.  We've all seen the quarterly surveys from 
            the Nashville Technology Council that show a consistent 800 to 1100 open tech jobs in Nashville.  
            We've all shared the frustration of spending months trying to fill software 
            developer positions.&nbsp;&nbsp;<span id="more1">more<div id="arrow1" class="arrow-right"></div></span>
          </p>
          <div id="supportAbout">
          <p class='bodyText'>
            In 2012 a group of Nashville technologists got together to try to find a way to address this problem.  We believed that Nashville had plenty of people with the latent talent to become tech professionals.  We knew that it didn't take a four year computer science degree to become a productive professional software developer because many of us didn't have such a degree.  We believed that we could partner with Nashville area technology employers to create a curriculum that would create the skills they needed in an entry-level software developer.
          </p>
          <p class='bodyText'>The result?</p>
          <h2 class="bodyTitle">Nashville Software School</h2>
          </p>
      <aside class='right smallAside'>
        <a href='http://nashvillecitypaper.com/content/city-news/new-program-teaches-software-coding-power-city-s-tech-boom'>
          <img class='asideImage' src='<?php bloginfo('template_url'); ?>/images/CodeSchoolTopper.jpg' alt='City Paper headshots' width='183px;' height='183px;'/>
        </a>
        <p id='asideText'>Read more about NSS in a great article from the Nashville City Paper.</p>
      </aside>
      <p class='bodyText'>
        Nashville Software School (NSS) is a career accelerator for highly motivated adult learners who possess the aptitude to become software developers.  We offer a six month, full-time vocational training program that creates career-ready entry-level software developers.
      </p>
      <p class='bodyText'>
        We are a strongly community-centered organization.  Our founders, instructors and mentors are all working technology professionals in the Nashville area who have donated time, dollars and energy to help prove that the NSS model works.
      </p>
      <p class='bodyText'>We are also a Tennessee non-profit corporation.  Our mission is to open doors to technology careers to qualified applicants irrespective of their financial resources and to grow the local tech workforce for the benefit of all local startups or established organizations.</p>
      <h2 class="bodyTitle">So does this really work?</h2>
      <p class='bodyText'>
        <img class='bodyImage left' src='<?php bloginfo('template_url'); ?>/images/coding_trio.jpg' alt='3 Cohort 1 students at work' width='400px;'/>
        We have graduated 40 junior software developers since starting our first class in June 2012.  In late 2012 we graduated our first cohort of 14 developers and at mid-year 2013 we graduated an additional 26.  Most of the graduates of our first cohort are employed in software developer or other technology jobs around Nashville.  Several in our second cohort have already secured full-time positions and the remainder are actively searching for positions in Nashville.
      </p>
      <p class='bodyText'>
        Our alumni work at local companies including Centresource, OnLife Health, Checkd.in, Change Healthcare, ioStudio, Zeumo, Eliza Brock Software, LiveSchool, and BorderJump.
      </p>
      <p class='bodyText'>
        We have also proven to our satisfaction that there is no shortage of demand in Nashville for training from people seeking careers in software development.  And there is no shortage of people with the latent potential to become professional developers seeking a way to activate that potential.  We stopped taking applications for our third cohort of students at 200 applications - of whom at least 50 were fully qualified for admission to NSS.
      </p>
      </div> <!-- end supportAbout -->
      <h2 class="bodyTitle">
        Now we Need to Make NSS Sustainable
      </h2>
      <p class='bodyText'>
        As noted above, NSS is open to qualified applicants irrespective of their ability to pay 
        for six months of full-time training. In practical terms this means that we only ask 
        our students for a nominal commitment fee at the beginning of the program - currently $1000. 
        Our cost to train a student is significantly greater than $1000. 
        But rather than require significant tuition payments up-front, payments that would have 
        created significant barriers to a tech career for many of the great students that 
        have graduated from our program, we recoup our investment in our students at the end 
        of our program when they go to work as professional 
        developers or in other technology jobs. &nbsp;&nbsp;<span id="more2">more<div id="arrow2" class="arrow-right"></div></span>
      </p>
      <div id="sustainable">
        <p class='bodyText'>
          <img class='bodyImage right' src='<?php bloginfo('template_url'); ?>/images/BenWhiteBoard.jpg' alt='An instructor instructing at Nashville Software School' width='400px;'/>
          This approach aligns our incentives with those of our students. We are incented to only admit those who we truly believe have the motivation and aptitude to succeed as professional developers. We are incented to ensure that they are learning both the foundational knowledge required of all professional developers but that they are also learning tools and technologies that are widely used. We are also incented to ensure our students become deeply connected with the Nashville tech community where they aspire to work.
        </p>
        <p class='bodyText'>
          We then recoup our investment once our students graduate and go to work. Our partner companies that hire graduates pay us a placement fee to offset our investment in the student and that relieves the student of his obligation to the school. Or, for those students who don't go to work for partner companies, the students repay us from their earnings as a working tech professional.  Either way, our investment in a student returns to us after they find a job. We can then re-invest in another student in a future cohort.  Over the long-term, our business model is self-sustaining.
        </p>
      </div>
        <h2 class="bodyTitle">
          Help us Train NSS Cohort Three
        </h2>
        <p class='bodyText'>
          Our third cohort of students began the NSS program in September 2013 and will graduate in March 2014.  
          During this training of this cohort we must shift from a completely bootstrapped mode of operation to a more sustainable model.  
          That means building our working capital reserves to create sufficient operating cushion to bring on our first full-time, permanent instructor.  That means engaging additional teaching assistants to work with students in the classroom.  
          That means funding a small permanent support staff to support student recruiting and student placement.
          &nbsp;&nbsp;<span id="more3">more<div id="arrow3" class="arrow-right"></div></span>
        </p>
        <div id="helpUs">
        <p class='bodyText'>
          <img class='bodyImage' src='<?php bloginfo('template_url'); ?>/images/Eliza_Teaching.jpg' alt='Eliza teaching' width='320px;' height='295px;'/>
          All of that requires help from the community.  Our investment in our prior student cohort will return to us over the next nine months but in the meantime we must be able to continue to train students and grow the program.  Your contributions to this campaign will allow that to happen.
        </p>
        <p class='bodyText'>
          Help us build our capital reserves. Help us ensure that we will be able to continue to open doors to careers in technology for motivated students. Help us continue to grow Nashville's technology talent pool by training hungry, committed junior developers. Help ensure that when the time comes that you are looking for developers to hire for your team, when you are looking for a freelancer to build your website or mobile app, when you are searching for a technical co-founder for your startup that those resources will be available to you right here in Nashville.
        </p>
        <p class='bodyText'>
          Support us now by selecting a donation level from the options in the column to the right. Help sustain Nashville Software School.  Help us train Cohort 3’s 20-plus new entry-level software developers.  Help us turn Nashville Software School into a viable, long-term contributor to the health of Nashville’s technology community.
        </p>
        <p class='bodyText'>
          And remember, NSS is a Tennessee non-profit corporation and has applied for 501(c)3 status.  A portion of your donation to NSS is tax deductible.
        </p>
      </div> <!-- end helpUs -->
        <?php $wp_query = new WP_Query("post_type=campaign_update&tag=nextstep&cat=25&post_status=publish&posts_per_page=1");?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content ();?>
        <?php endwhile; ?>
        <?php else : ?>
          <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
        <?php endif; ?>
        <?php wp_reset_query();?>
        <br>

        <div class='pledgeButtonWrapper'>
          <a href='#' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'><button class='pledgeButton button orange'>Pledge Support</button></a>
        </div>
        <div class='linkWrapper'>
          <a href='#'><span class='blue'>-</span> Back to Top <span class='blue'>-</span></a>
        </div>
      </section>
   <!--*************** donor wall tab *****************  -->
      </div>
      <div id='donorWallWrapper' class='hidden'>
        <div id="donorWallBody">
          <?php echo do_shortcode ('[donorwall title="Supporter Recognition Wall"]'); ?>
        </div>
      </div>
   <!--*************** updates tab *****************  -->
      <div id='updatesWrapper' class='hidden'>
        <div id='updatesBody' class='clearfix'>
          <?php $wp_query = new WP_Query("post_type=campaign_update&tag=capital&cat=-22&post_status=publish&posts_per_page=10");?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class='postWrapper'>
              <div class='titleBar clearfix'>
                <h3 class='titleLeft'><?php the_title();?></h3>
                <p class='nameRight'><?php the_author();?><p>
              </div>
              <div class='updatePostBody'>
                <?php the_content ();?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php else : ?>
            <p class="no-posts"><?php _e('No campaign updates have been posted yet.', 'example'); ?></p>
          <?php endif; ?>
          <?php wp_reset_query();?>
        </div>
      </div>
  <!--*************** campaign status and donation levels *****************  -->
      <aside id='sidebarWrapper'>
        <section id='campaignStatus'>
          <h2 class='progressBangHeader'><span class='greyText'>$</span><?php echo do_shortcode ('[donatetotal prefix="0" suffix="0"]'); ?></h2>
          <p class='progressSubMessage'>donated of $50000.00 goal</p>
          <h2 class='progressBangHeader'><?php echo do_shortcode ('[donornumber]'); ?></h2>
          <p class='progressSubMessage'>supporters</p>
          <br>
          <!-- Begin Countdown Timer. Remove following section to remove timer. -->
          <?php echo do_shortcode ("[countdown date=2013/11/30]
          <h2 class='progressBangHeader'>[dtimer]</h2>
          <p class='progressSubMessage'>days to go</p>[after]Campaign ended!
          [/countdown]"); ?>
          <br>
          <!-- End Countdown Timer -->
          <div class='pledgeButtonWrapper formButtonWrapper'>
            <a href='#' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'><button id='10' class='pledgeButton button orange openForm'>Pledge Support</button></a>
            <p id='donationFinePrint'>All donations to this campaign will become immediately available to Nashville Software School.</p>
            <br>
          </div>
          <div id='formModal' class='reveal-modal hide' >
            <h3 class="formTitle top"><span class='bigAndBlue'>Support</span> Nashville Software School</h3>
            <?php echo do_shortcode ('[donateextra]'); ?>
          </div>
        </section>
        <section>
          <ul id='donationTiers'>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='25' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>25</h3>
                <h3 class='tierTitle'>Trainee Developer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Your name will be permanently placed on the Recognition Wall in Nashville Software School's classrooms.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='50' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>50</h3>
                <h3 class='tierTitle'>Junior Developer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>You'll get an NSS logo sticker, and your name on the Recognition Wall.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='75' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>75</h3>
                <h3 class='tierTitle'>Web Designer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>You'll get an NSS Cohort 3 Limited Edition T-shirt, and your name on the Recognition Wall.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='100' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount' style='display: inline-block;'><span class='greyText'>$</span>100</h3>
                <h3 class='tierTitle'>Developer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>You'll get an NSS Cohort 3 Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='10' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>10<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Developer<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='250' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>250</h3>
                <h3 class='tierTitle'>Senior Developer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>NSS ceramic coffee mug!
                  <br><br>You'll also get a Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='25' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>25<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Senior Developer<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='500' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>500</h3>
                <h3 class='tierTitle'> Lead Developer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>NSS insulated coffee mug!
                  <br><br>You'll also get a Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.
                </p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='45' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>45<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Lead Developer<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='1000' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>1,000</h3>
                <h3 class='tierTitle'>Principal Engineer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Personalized Thank You photograph of you with one of our students whose tuition your donation paid for!
                  <br><br>You'll also get an NSS insulated coffee mug, a Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.
                </p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='90' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>90<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Principal Engineer<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='2500' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>2,500</h3>
                <h3 class='tierTitle'>Product Architect</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Your generous gift will pay for the initial tuition for a student as well as purchase them a new laptop computer!
                  <br><br>You'll get a personalized Thank You photograph of you with one of our students, an NSS insulated coffee mug, a Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.
                </p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='225' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>225<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Product Architect<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.</p>
                <p class='tierFooter'>Estimated Availability: January 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='5000' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>5,000</h3>
                <h3 class='tierTitle'>Development Manager</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Your generous gift will pay for a full 12-week stipend to support the living expense of one of our students!
                  <br><br>You'll get a personalized Thank You photograph of you with one of our students, an NSS insulated coffee mug, a Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.
                </p>
                <p class='tierFooter'>Estimated Availability: March 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='475' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>475<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Development Manager<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.</p>
                <p class='tierFooter'>Estimated Availability: March 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='10000' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>10,000</h3>
                <h3 class='tierTitle'>Chief Technology Officer</h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Your generous gift will pay for a full 12 week stipend to support the living expense of one of our students plus their initial tuition plus a new laptop computer!
                  <br><br>You'll get a personalized Thank You photograph of you with one of our students, an NSS insulated coffee mug, a Limited Edition T-shirt, an NSS logo sticker, and your name on the Recognition Wall.
                </p>
                <p class='tierFooter'>Estimated Availability: March 2014</p>
              </a>
            </li>
            <li class='tier'>
              <a href='#' class='openForm' data-amount='950' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>950<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Chief Technology Officer<br><span class='recurring'>Recurring</span></h3>
                <hr class='tierRule'>
                <p class='tierDescription'>Same as above.
                <p class='tierFooter'>Estimated Availability: March 2014</p>
              </a>
            </li>
          </ul>
        </section>
      </aside>
    </div>
  </div>
</div>
<?php get_footer(); ?>