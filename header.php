<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <title>Nashville Software School</title>

  <!--favicon-->
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" >

  <!--css-->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/reveal.css" media="screen" />

  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

  <!--javascript/jquery-->
  <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/JS/foundation.js'></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/JS/foundation.reveal.js'></script>
  <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js'></script>

  <!--bootstrap -->
  <script src="<?php echo get_template_directory_uri(); ?>/JS/bootstrap.js"></script>

<?php wp_head(); ?>
</head>
<body>
  <header class="background">
    <div class="socialLinks">

      <div id="social1">
        <a class="icon" href="http://www.twitter.com/nashsoftware"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/twitter_bird.png" alt="twitter"/></a>
      </div>
      <div id="social2">
        <a class="icon" href="http://www.facebook.com/NashvilleSoftwareSchool"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook"/></a>
      </div>
      <div id="social3">
        <a class="icon" href="http://www.nashvillesoftwareschool.com/rss"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="rss"/></a>
      </div>

    </div>
    <div id="header_wrapper">

      <div id="header_left">
        <div id="header_logo">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="NSS" />
          </a>
        </div>
      </div>

      <div id="header_right">
        <nav id="headNav" class="clearfix">
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location'  => 'top_nav', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
      </div>


    </div>
  </header>
  <div style="clear: both; padding-top: 55px;"></div>
