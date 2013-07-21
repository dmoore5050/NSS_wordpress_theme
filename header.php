<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <title>Nashville Software School</title>
  <!--favicon-->
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" >
  <!--css-->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js' type='text/javascript'></script>
  <!--jquery-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/JS/jquery.reveal.js"></script>
  <!--bootstraps -->
  <script src="<?php echo get_template_directory_uri(); ?>/JS/bootstrap.js"></script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/reveal.css" type="text/css" media="screen" />
<style>
  .backgroundImg {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/header_background.png');
  }
  @-moz-document url-prefix() {
      #menu-item-20 {
    margin-left: 4px;
    }
  }
</style>
<?php wp_head(); ?>
</head>
<body>
  <header class="backgroundImg">
    <div id="header_wrapper">

      <div id="header_left">
        <div id="header_logo">
          <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'home' ) ) ); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="NSS" />
          </a>
        </div>
      </div>

      <div id="header_right">
        <nav id="headNav" class="clearfix">
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location'  => 'top_nav', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
      </div>

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
    </div>
  </header>
  <div style="clear: both; padding-top: 55px;"></div>
