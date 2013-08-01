<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <title>Nashville Software School</title>
  <!--favicon-->
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" >

  <!--css-->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/reveal.css" type="text/css" media="screen" />
<!--   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/bootstrap.css"> -->

  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

  <!--javascript/jquery-->

  <script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js' type='text/javascript'></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/JS/jquery.reveal.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


  <!--bootstrap -->
  <script src="<?php echo get_template_directory_uri(); ?>/JS/bootstrap.js"></script>

<style>
  .background {

    background: rgb(125,126,125); /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzdkN2U3ZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwZTBlMGUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, rgba(88,88,88,1) 0%, rgba(60,60,60,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(88,88,88,1)), color-stop(100%,rgba(60,60,60,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, rgba(88,88,88,1) 0%,rgba(60,60,60,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, rgba(88,88,88,1) 0%,rgba(60,60,60,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, rgba(88,88,88,1) 0%,rgba(60,60,60,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom, rgba(88,88,88,1) 0%,rgba(60,60,60,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d7e7d', endColorstr='#0e0e0e',GradientType=0 ); /* IE6-8 */
    border-bottom: px solid rgba(88,88,88,1);
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


    </div>
  </header>
  <div style="clear: both; padding-top: 55px;"></div>
