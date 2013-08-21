<?php
/*
Template Name: Campaign Page
*/
?>
<?php get_header(); ?>

<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/campaignStyle.css'>
<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/jquery_ui_style.css'>

<style>

  @-moz-document url-prefix() {

    .inactiveTab a {
      line-height: 18px;
    }

    #contentWrapper {
      margin-top: -1px;
    }

    #tabOne {
      margin-left: -1px;
    }

  }
</style>

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

  })
</script>

<div id='container'>
  <div id='titleWrapper'>
    <h3 id='campaignHeader' class='emphasisTitle'>Sustain Nashville Software School</h3>
    <p id='campaignSubHead'>We need your support to be able to continue to grow Nashville's tech talent pool</p>
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
         <iframe width="620" height="465" src="//www.youtube.com/embed/XZiska--wX0" frameborder="0" allowfullscreen></iframe>
        </section>
        <section id='campaignBody'>
            <p class='bodyText'>
              All of us who have been working in and around the Nashville tech community, or who have been trying to hire or partner with skilled software developers, have known for years that Nashville has a painful shortage of these critical resources.  We've all seen the quarterly surveys from the Nashville Technology Council that show a consistent 800 to 1100 open tech jobs in Nashville.  We've all shared the frustration of spending months trying to fill software developer positions.
              In 2012 a group of Nashville technologists got together to try to find a way to address this problem.  We believed that Nashville had plenty of people with the latent talent to become tech professionals.  We knew that it didn't take a four year college degree and computer science degree to become a productive professional software developer because many of us didn't have such a degree.  We believed that we could partner with Nashville area technology employers to create a curriculum that would create the skills they needed in an entry-level software developer.
            <p class='bodyText'>The result?</p>
            <h2 class="bodyTitle">Nashville Software School</h2>
            </p>
          <p class='bodyText'>
            Nashville Software School (NSS) is a career accelerator for highly motivated adult learners who possess the aptitude to become software developers.  We offer a six month, full-time vocational training program that creates career-ready entry-level software developers.
          </p>
          <p class='bodyText'>
            We are a strongly community-centered organization.  Our founders, instructors and mentors are all working technology professionals in the Nashville area who have donated time, dollars and energy to help prove that the NSS model works.
          </p>
          <p class='bodyText'>We are also a Tennessee non-profit corporation.  Our mission is to open doors to technology careers to qualified applicants irrespective of their financial resources and to grow the local tech workforce for the benefit of all local startups or established organizations.</p>
          <h2 class="bodyTitle">So does this really work?</h2>
          <aside class='right smallAside'>
            <a href='http://nashvillecitypaper.com/content/city-news/new-program-teaches-software-coding-power-city-s-tech-boom'>
              <img class='asideImage' src='<?php bloginfo('template_url'); ?>/images/CodeSchoolTopper.jpg' alt='City Paper headshots' width='183px;' height='183px;'/>
            </a>
            <p id='asideText'>Read more about NSS in a great article from the Nashville City Paper.</p>
          </aside>
          <p class='bodyText'>
            We have graduated 40 junior software developers since starting our first class in June 2012.  In late 2012 we graduated our first cohort of 14 developers and at mid-year 2013 we graduated an additional 26.  Most of the graduates of our first cohort are employed in software developer or other technology jobs around Nashville.  Several in our second cohort have already secured full-time positions and the remainder are actively searching for positions in Nashville.
          </p>
          <p class='bodyText'>
            Our alumni work at local companies including Centresource, OnLife Health, Checkd.in, Change Healthcare, ioStudio, Zeumo, Eliza Brock Software, LiveSchool, and BorderJump.
          </p>
          <p class='bodyText'>
            We have also proven to our satisfaction that there is no shortage of demand in Nashville for training from people seeking careers in software development.  And there is no shortage of people with the latent potential to become professional developers seeking a way to activate that potential.  We stopped taking applications for our third cohort of students at 200 applications - of whom at least 50 were fully qualified for admission to NSS.
          </p>
          <h2 class="bodyTitle">
            NSS invests in our students
          </h2>
          <p class='bodyText'>
            As noted above, NSS is open to qualified applicants irrespective of their ability to pay for six months of full-time training.  In practical terms this means that we only ask our students for a nominal commitment fee at the beginning of the program - currently $1000.  Our cost to train a student is significantly greater than $1000.  But rather than require significant tuition payments up-front, payments that would have created significant barriers to a tech career for many of the great students that have graduated from our program, we recoup our investment in our students at the end of our program when they go to work as professional developers or in other technology jobs.
          </p>
          <p class='bodyText'>
            This approach aligns our incentives with those of our students.  We are incented to only admit those who we truly believe have the motivation and aptitude to succeed as professional developers.  We are incented to ensure that they are learning both the foundational knowledge required of all professional developers but that they are also learning tools and technologies that are widely used.  We are also incented to ensure our students become deeply connected with the Nashville tech community where they aspire to work.
          </p>
          <p class='bodyText'>
            We then recoup our investment once our students graduate and go to work.  Our partner companies that hire graduates pay us a placement fee to offset our investment in the student and that relieves the student of his obligation to the school.  Or, for those students who don't go to work for partner companies, the students repay us from their earnings as a working tech professional.
          </p>
          <h2 class="bodyTitle">
            What do we need the money for?
          </h2>
          <p class='bodyText'>
          <img class='bodyImage' src='<?php bloginfo('template_url'); ?>/images/Eliza_Teaching.jpg' alt='Eliza teaching' width='320px;' height='295px;'/>

            We love the business model we have designed but it means that we spend a lot training a class of graduates before we begin to recoup that investment through placement fees and repayments.

          <p class='bodyText'>That means we need to maintain a working capital reserve large enough to sustain the school's operation through a full training and repayment cycle.
          </p>
          <p class='bodyText'>
            We have been able to successfully bootstrap NSS for its first year of operation.  The financial support of our founders and advisory board, plus the placement fees and repayments from our first class have allowed us to demonstrate the ability to train and place our graduates into software developer jobs.  However, to reach full sustainability, we now need the support of the full Nashville community to help us build the endowment - our working capital reserve -  that we need to fully fund the school.
          </p>
          <p class='bodyText'>
            We have a third cohort of student starting the program in September 2013.  That will be our last cohort of students if we can't engage the broader support of the Nashville community.
          </p>
          <p class='bodyText'>
            Help us build our capital reserves.  Help us ensure that we will be able to continue to open doors to careers in technology for motivated students.  Help us continue to grow Nashville's technology talent pool by training hungry, committed junior developers.  Help ensure that when the time comes that you are looking for developers to hire for your team, when you are looking for a freelancer to build your website or mobile app, when you are searching for a technical co-founder for your startup that those resources will be available to you right here in Nashville.
          </p>
          <p class='bodyText'>
            Support us now by selecting a donation level from the options in the column to the right.  Help sustain Nashville Software School.
          </p>
          <?php $wp_query = new WP_Query("post_type=campaign_update&tag=capital&cat=22&post_status=publish&posts_per_page=1");?>
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
        </section>
      </div>
      <div id='donorWallWrapper' class='hidden'>
        <div id="donorWallBody">
          <?php echo do_shortcode ('[donorwall title="Supporter Recognition Wall"]'); ?>
        </div>
      </div>
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
            <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
          <?php endif; ?>
          <?php wp_reset_query();?>
        </div>
      </div>
      <aside id='sidebarWrapper'>
        <section id='campaignStatus'>
          <h2 class='progressBangHeader'><span class='greyText'>$</span><?php echo do_shortcode ('[donatetotal prefix="0" suffix="0"]'); ?></h2>
          <p class='progressSubMessage'>donated of $20000.00 goal</p>
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
          <div class='pledgeButtonWrapper'>
            <a href='#' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'><button id='10' class='pledgeButton button orange openForm'>Pledge Support</button></a>
            <p id='donationFinePrint'>All donations to this campaign will become immediately available to Nashville Software School.</p>
            <br>
            <p id='donationFinePrint'>Nashville Software School is a non-profit corporation and has filed for approval as a 501(c)3, so part of your donation to this campaign is TAX DEDUCTIBLE (depending on the perks, and that’s one).</p>
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
                <h3 class='tierTitle'>Developer()</h3>
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
                <h3 class='tierTitle'>Senior Developer()</h3>
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
              <a href='#' class='openForm' data-amount='50' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>50<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Lead Developer()</h3>
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
              <a href='#' class='openForm' data-amount='100' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>100<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Principal Engineer()</h3>
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
              <a href='#' class='openForm' data-amount='250' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>250<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Product Architect()</h3>
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
              <a href='#' class='openForm' data-amount='500' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>500<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Development Manager()</h3>
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
              <a href='#' class='openForm' data-amount='1000' data-recur='M' data-frequency='1' data-duration='12' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'>
                <h3 class='tierAmount'><span class='greyText'>$</span>1000<span class='months greyText'>/mo for</span> 12 <span class='months greyText'>mos</span></h3>
                <h3 class='tierTitle'>Chief Technology Officer()</h3>
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