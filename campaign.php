<?php
/*
Template Name: Campaign Page
*/
?>
<?php get_header(); ?>

<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/campaignStyle.css'>
<link rel='stylesheet' type='text/css' href='<?php echo get_template_directory_uri(); ?>/CSS/jquery_ui_style.css'>

<script>

$(document).ready(function() {

  $( '#tabOne' ).click(function(){
    $( '#tabOne' ).addClass( 'activeTab' );
    $( '#tabTwo' ).removeClass( 'activeTab' );
    $( '#donorWallWrapper' ).addClass( 'hidden' );
    $( '#mainWrapper' ).removeClass( 'hidden' );
    return false;
  });

  $( '#tabTwo' ).click(function(){
    $( '#tabTwo' ).addClass( 'activeTab' );
    $( '#tabOne' ).removeClass( 'activeTab' );
    $( '#mainWrapper' ).addClass( 'hidden' );
    $( '#donorWallWrapper' ).removeClass( 'hidden' );
    return false;
  });

})

</script>

<div id='content'>
  <h3 id='campaignHeader' class='emphasisTitle'>Campaign Name</h3>
  <div id='tabsWrapper'>
    <p id='tabOne' class='activeTab'><a href='#' class='tab'>Campaign Home</a></p>
    <p id='tabTwo'><a href='#' class='tab'>Donor Wall</a></p>
  </div>
  <div id='contentWrapper' class='clearfix'>
    <div id='mainWrapper'>
      <div id='campaignContentWrapper'>
        <section id='campaignMedia'>
          <iframe width='620' height='349' src='//www.youtube.com/embed/8AdSzQZ8AKo?rel=0' frameborder='0' allowfullscreen></iframe>
        </section>
        <section id='campaignBody'>
          <h2 class='bodyTitle'>Body Title Here</h2>
          <div id='leadWrap'>
            <p id='leadParagraph'>"Etsy Echo Park literally sriracha. Wolf cred hashtag, next level blue bottle four loko occupy. Disrupt mumblecore try-hard, cliche biodiesel moustache salvia pickled whatever."<span id="leadName"> -John Wark</span></p>
          </div>
          <p class='bodyText'>Small batch typewriter fanny pack, yr vinyl readymade salvia biodiesel chillwave selfies tumblr pour-over. Actually blog letterpress, art party sriracha shabby chic selvage Echo Park Carles. Fap wolf +1 next level, butcher fanny pack hoodie Brooklyn salvia dreamcatcher mumblecore. 8-bit lo-fi polaroid selfies plaid post-ironic. Truffaut High Life fashion axe, cred banjo keytar 3 wolf moon food truck butcher McSweeney's Williamsburg chillwave gluten-free photo booth. </p>
          <p class='bodyText'>
            <img class='bodyImage' src='<?php bloginfo('template_url'); ?>/images/codeschooltopper.jpg' alt='filler image' width='320px;' height='320px;'/>Pitchfork labore locavore artisan exercitation, incididunt hoodie odio banjo Godard roof party Etsy. Mollit adipisicing cray aliqua. Qui officia lo-fi fugiat you probably haven't heard of them Tonx. Sed tofu cillum duis Terry Richardson, organic leggings food truck american apparel asymmetrical mumblecore.</p>
          <p class='bodyText'>Meggings banh mi forage flannel Marfa, ethnic mumblecore Odd Future freegan 90's Neutra wolf. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche. Fixie DIY occupy, pitchfork asymmetrical retro keffiyeh freegan stumptown viral PBR tattooed Etsy pug. Master cleanse forage sustainable ethical, Marfa street art. Echo Park Carles. Fap wolf +1 next level, butcher fanny pack hoodie Brooklyn salvia dreamcatcher mumblecore. 8-bit lo-fi polaroid selfies plaid post-ironic. </p>
          <br>
          <h2 class='bodyTitle right'>Another Body Title Here</h2>
          <aside class='right smallAside'>
            <a href='#' id='modalTrigger' data-reveal-id='videoModal' data-animation='fade' data-animationspeed='300'>
              <div id='fakePic'></div>
            </a>
            <div id='videoModal' class='reveal-modal hidden' >
              <iframe id='videoFrame' width='620' height='349' src='//www.youtube.com/embed/8AdSzQZ8AKo?rel=0' frameborder='0' allowfullscreen></iframe>
            </div>
            <h3 id='asideTitle'>Johnny Fakename</h3>
            <p id='asideText'>Mumblecore. 8-bit lo-fi polaroid selfies plaid post-ironic. Fixie DIY occupy, pitch fork asymmetrical retro keffiyeh freegan stump town viral PBR tattoo Etsy pug bahn mi.</p>
          </aside>
          <p class='bodyText'>Bushwick artisan deep v ethnic, pop-up cardigan freegan gluten-free single-origin coffee Portland. Ullamco pitchfork pour-over PBR, thundercats hoodie Bushwick hella roof party reprehenderit readymade wolf aliqua. Meggings viral fap magna, blue bottle quis ad Austin. Messenger bag assumenda accusamus yr bitters, deep v vegan VHS magna culpa ennui small batch. Exercitation before they sold out.</p>
          <p class='bodyText'>Master cleanse iPhone lo-fi Bushwick. Freegan mixtape laborum, occaecat photo booth officia Brooklyn voluptate squid iPhone id roof party. Meggings banh mi forage flannel Marfa, ethnic mumblecore Odd Future freegan 90's Neutra wolf. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche assumenda hoodie nostrud 8-bit. Odd Future freegan 90's Neutra wolf. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche. </p>
          <br>
          <h2 class='bodyTitle center'>And Now: Stretch Goals!</h2>
          <p class='bodyText'><span class='goalName'>Stretch Goal #1: </span>Pitchfork labore locavore artisan exercitation, incididunt hoodie odio banjo Godard roof party Etsy. Mollit adipisicing cray aliqua. Qui officia lo-fi fugiat you probably haven't heard of them Tonx. Sed tofu cillum duis, organic leggings food truck american apparel asymmetrical mumblecore.</p>
          <p class='bodyText'><span class='goalName'>Stretch Goal #2: </span>Pitchfork labore locavore artisan exercitation, incididunt hoodie odio banjo Godard roof party Etsy. Mollit adipisicing cray aliqua. Qui officia lo-fi fugiat you probably haven't heard of them Tonx. Sed tofu cillum duis, organic leggings food truck american apparel asymmetrical mumblecore.</p>
          <p class='bodyText'><span class='goalName'>Stretch Goal #3: </span>Pitchfork labore locavore artisan exercitation, incididunt hoodie odio banjo Godard roof party Etsy. Mollit adipisicing cray aliqua. Qui officia lo-fi fugiat you probably haven't heard of them Tonx. Sed tofu cillum duis, organic leggings food truck american apparel asymmetrical mumblecore.</p>
          <br>
          <div class='pledgeButtonWrapper'>
            <a href=""><button class='pledgeButton button orange'>Pledge Support</button></a>
          </div>
        </section>
      </div>
      <aside id='sidebarWrapper'>
        <section id='campaignStatus'>
          <h2 class='progressBangHeader'><span class='greyText'>$</span><?php echo do_shortcode ('[donatetotal prefix="0" suffix="0"]'); ?></h2>
          <p class='progressSubMessage'>donated of $20000.00 goal</p>
          <h2 class='progressBangHeader'>25</h2>
          <p class='progressSubMessage'>supporters</p>
          <br>
          <h2 class='progressBangHeader'>17</h2>
          <p class='progressSubMessage'>days to go</p>
          <br>
          <div class='pledgeButtonWrapper'>
            <a href='#' data-reveal-id='formModal' data-animation='fade' data-animationspeed='300'><button class='pledgeButton button orange'>Pledge Support</button></a>
            <div id='formModal' class='reveal-modal hide' >
              <?php echo do_shortcode ('[donateextra]'); ?>
            </div>
            <p id='donationFinePrint'>Any donation fine print, deadline details, etc. could go in these lines.</p>
          </div>
        </section>
        <section>
          <ul id='donationTiers'>
            <li class='tier'>
              <h3 class='tierAmount'><span class='greyText'>$</span>20</h3>
              <h3 class='tierTitle'>First tier title goes here!</h3>
              <hr class='tierRule'>
              <p class='tierDescription'>Meggings banh mi forage flannel Marfa, ethnic mumblecore Odd Future freegan 90's Neutra wolf. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche.<p>
              <p class='tierFooter'>Shipping/delivery info goes here.</p>
            </li>
            <li class='tier'>
              <h3 class='tierAmount'><span class='greyText'>$</span>50</h3>
              <h3 class='tierTitle'>Second tier title goes here!</h3>
              <hr class='tierRule'>
              <p class='tierDescription'> Fixie DIY occupy, pitchfork asymmetrical retro keffiyeh freegan stumptown viral PBR tattooed Etsy pug. Master cleanse forage sustainable ethical, Marfa street art.<p>
              <p class='tierFooter'>Shipping/delivery info goes here.</p>
            </li>
            <li class='tier'>
              <h3 class='tierAmount'><span class='greyText'>$</span>100</h3>
              <h3 class='tierTitle'>Third tier title goes here!</h3>
              <hr class='tierRule'>
              <p class='tierDescription'>YOLO semiotics +1 letterpress. Narwhal flexitarian roof party gentrify mixtape, keffiyeh biodiesel banh mi small batch blog.<p>
              <p class='tierFooter'>Shipping/delivery info goes here.</p>
            </li>
            <li class='tier'>
              <h3 class='tierAmount'><span class='greyText'>$</span>250</h3>
              <h3 class='tierTitle'>Fourth tier title goes here!</h3>
              <hr class='tierRule'>
              <p class='tierDescription'>Meggings banh mi forage flannel Marfa, ethnic mumblecore Odd Future freegan 90's Neutra wolf. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche.<p>
              <p class='tierFooter'>Shipping/delivery info goes here.</p>
            </li>
            <li class='tier'>
              <h3 class='tierAmount'><span class='greyText'>$</span>500</h3>
              <h3 class='tierTitle'>Fifth tier title goes here!</h3>
              <hr class='tierRule'>
              <p class='tierDescription'>Fanny pack salvia biodiesel typewriter kitsch. Mixtape salvia chillwave hella. Forage sriracha retro Banksy deep v viral. Quinoa beard sustainable, small batch jean shorts banh mi aesthetic kogi polaroid. Carles asymmetrical umami Williamsburg.<p>
              <p class='tierFooter'>Shipping/delivery info goes here.</p>
            </li>
            <li class='tier'>
              <h3 class='tierAmount'><span class='greyText'>$</span>1000</h3>
              <h3 class='tierTitle'>Sixth tier title goes here!</h3>
              <hr class='tierRule'>
              <p class='tierDescription'>Blog sriracha gastropub vinyl wolf small batch iPhone. Pour-over kogi Brooklyn sriracha, pug art party.<p>
              <p class='tierFooter'>Shipping/delivery info goes here.</p>
            </li>
          </ul>
        </section>
      </aside>
    </div>
    <div id='donorWallWrapper' class='hidden'><?php echo do_shortcode ('[donorwall title="Supporter Recognition Wall"]'); ?></div>
  </div>
</div>

<?php get_footer(); ?>