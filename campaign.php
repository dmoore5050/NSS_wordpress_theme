<?php
/*
Template Name: Campaign Page
*/
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/campaignStyle.css">

<?php get_header(); ?>

<div id='container'>
  <h3 id='campaignHeader' class='emphasisTitle'>Campaign Name</h3>
  <div id='contentWrapper' class='clearfix'>
    <div id='campaignContentWrapper'>
      <section id='campaignMedia'>
        <iframe width="620" height="349" src="//www.youtube.com/embed/8AdSzQZ8AKo?rel=0" frameborder="0" allowfullscreen></iframe>
      </section>
      <section id='campaignBody'>
        <h2 class='copyTitle'>Body title here</h2>
        <div id='leadWrap'>
          <p id='leadParagraph'>"Etsy Echo Park literally sriracha. Wolf cred hashtag, next level blue bottle four loko occupy. Disrupt mumblecore try-hard, cliche biodiesel moustache salvia pickled whatever."<span id="leadName"> -John Wark</span></p>
        </div>
        <p class='bodyText'>Small batch typewriter fanny pack, yr vinyl readymade salvia biodiesel chillwave selfies tumblr pour-over. Actually blog letterpress, art party sriracha shabby chic selvage Echo Park Carles. Fap wolf +1 next level, butcher fanny pack hoodie Brooklyn salvia dreamcatcher mumblecore. 8-bit lo-fi polaroid selfies plaid post-ironic. Truffaut High Life fashion axe, cred banjo keytar 3 wolf moon food truck butcher McSweeney's Williamsburg chillwave gluten-free photo booth. </p>
        <p class='bodyText'>
          <img class="bodyImage" src="<?php bloginfo('template_url'); ?>/images/codeschooltopper.jpg" alt="filler image" width="320px;" height="320px;" align: 'left;'/>Pitchfork labore locavore artisan exercitation, incididunt hoodie odio banjo Godard roof party Etsy. Mollit adipisicing cray aliqua. Qui officia lo-fi fugiat you probably haven't heard of them Tonx. Sed tofu cillum duis Terry Richardson, organic leggings food truck american apparel asymmetrical mumblecore.</p>
        <p class='bodyText' >Meggings banh mi forage flannel Marfa, ethnic mumblecore Odd Future freegan 90's Neutra wolf. Bitters McSweeney's irony you probably haven't heard of them, helvetica church-key cliche. Fixie DIY occupy, pitchfork asymmetrical retro keffiyeh freegan stumptown viral PBR tattooed Etsy pug. Master cleanse forage sustainable ethical, Marfa street art. Echo Park Carles. Fap wolf +1 next level, butcher fanny pack hoodie Brooklyn salvia dreamcatcher mumblecore. 8-bit lo-fi polaroid selfies plaid post-ironic. </p>
        <br>
        <h2 class='copyTitle right'>Another Body Title Here</h2>
      </section>
    </div>
    <aside id='sidebarWrapper'>
      <section id='campaignStatus'>
        <h2 class='progressBangHeader'><span class='greyText'>$</span>12345.67</h2>
        <p class='progressSubMessage'>donated of $20000.00 goal</p>
        <h2 class='progressBangHeader'>25</h2>
        <p class='progressSubMessage'>supporters</p>
        <br>
        <h2 class='progressBangHeader'>17</h2>
        <p class='progressSubMessage'>days to go</p>
        <br>
        <div id='pledgeButtonWrapper'>
          <a href=""><button id='pledgeButton' class="button orange">Pledge Support</button></a>
          <p id='donationFinePrint'>Any donation fine print, deadline details, etc. could go in these lines.</p>
        </div>
      </section>
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
        </div>
      </section>
    </aside>
  </div>
</div>

<?php get_footer(); ?>