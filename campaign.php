<?php
/*
Template Name: Campaign Page
*/
?>
<?php get_header(); ?>

<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/campaignStyle.css'>

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
    <h1 id='campaignHeader' class='emphasisTitle'>Next Step Campaign</h1>
    <h2 id='campaignSubHead'>Support NSS’s Third Student Cohort and Help us Build our Operating Fund</h2>
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
            Between June of 2012 and July of 2013 Nashville Software School graduated its first 40 junior software developers and demonstrated the viability of its training model. Now it’s time to take the next step in the evolution of NSS and move towards long-term sustainability of its business model.
          </p>
          <h2 class="bodyTitle">
            Help us Train NSS Cohort Three
          </h2>
          <p class='bodyText'>
            Our third cohort of students is starting the NSS program in September 2013 and will graduate in March 2014.  During this training of this cohort we must shift from a completely bootstrapped mode of operation to a more sustainable model.  That means building our working capital reserves to create sufficient operating cushion to bring on our first full-time, permanent instructor.  That means engaging additional teaching assistants to work with students in the classroom.  That means funding a small permanent support staff to support student recruiting and student placement.
          </p>
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
            <p class="no-posts"><?php _e('No campaign updates have been posted yet.', 'example'); ?></p>
          <?php endif; ?>
          <?php wp_reset_query();?>
        </div>
      </div>
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