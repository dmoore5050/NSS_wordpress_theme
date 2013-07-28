<?php get_header ();
/*
Template Name: Fundraising Page
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/communityStyle.css">

<style type='text/css'>
  .backgroundImgLt {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/first_aid_kit.png');
  }

  @-moz-document url-prefix() {
    .titleSize {
      margin-top:0px;
      padding-top: 5px;
    }

</style>

<div id="backgroundWrapper" class="clearfix">
	<div id="communityWrapper" class="clearfix">
		<div class="sectionWrap clearfix">
			<section class="clearfix">
      	<h3 class="emphasisTitle aboutSmall">Fundraising</h3>
      </section>
    </div>
  </div>
</div>


<?php get_footer(); ?>