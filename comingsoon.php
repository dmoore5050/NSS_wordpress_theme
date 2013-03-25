<?php
/*
Template Name: Coming Soon
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/comingsoonStyle.css">
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
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
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
	});
</script>
<div class='contentWrap'>

	<section>
		<h1 class='comingSoonTitle'>Evening Classes at the Nashville Software School</h1>
		<div id='chalkboard' class='backgroundImgChalk'>
			<h2 id="comingSoonBanner" class="emphasisTitle programSpace">Coming Soon</h2>
		</div>
		<hr id='bottomBorder'>
	</section>
	
</div>

<?php get_footer(); ?>