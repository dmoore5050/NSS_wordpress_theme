<?php get_header ();?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/indexStyle.css">
<style>
.backgroundImgChalk {
	background-image: url('<?php echo get_template_directory_uri(); ?>/images/chalk_black_low.jpg');
	background-repeat: no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.arrowBackground {
	background-image: url('<?php echo get_template_directory_uri(); ?>/images/white_carbonfiber.png');
}
@-moz-document url-prefix() {
   .carousel-control {
        padding-top: 15px;
    }
	.newsHead {
		margin-top: -33px;
	}
}
</style>
 <script>
$(document).ready(function() {
	$(function() {
		$('.carousel').carousel('pause')
	})
});
</script>
<div id="myCarousel" class="carousel slide carousel-fade border">
	<div class="carousel-inner backgroundImgChalk">
		<div class="active item first">
			<div class="margin">
    	  		<img class="carouselBorder" src="<?php echo get_template_directory_uri(); ?>/images/carousel1.png" alt="slide1">
		    	<div id="taglineInfo">
					<h3 class="smallHeadlineCarousel1 smallDiff">Learn How To</h3>
					<h2 class="emphasisTitleCarousel1">Build Web Applications</h2>
					<p class="carouselText">Six-month intensive training program that qualifies you for a junior developer job.</p>
				</div>
			</div>
  		</div>
		<div class="item second">
			<div class="margin">
   				<img class="carouselBorder" src="<?php echo get_template_directory_uri(); ?>/images/carousel2.png" alt="slide2">
				<div id="taglineInfo">
					<h3 class="smallHeadlineCarousel1 smallDiff">Supporting You with</h3>
					<h2 class="emphasisTitleCarousel1">Mentors</h2>
					<p class="carouselText">Nashville's best developers volunteer their time to help you learn. </p>
				</div>
			</div>
  		</div>
  		<div class="item second">
			<div class="margin">
   				<img class="carouselBorder" src="<?php echo get_template_directory_uri(); ?>/images/carousel3.png" height="245px" style="margin-top: -50px; margin-left: -20px;" alt="slide2">
   				<div id="taglineInfo">
   					<h3 class="smallHeadlineCarousel1 smallDiff">Learn by Doing</h3>
   					<h2 class="emphasisTitleCarousel1">Apprenticeship</h2>
   					<p class="carouselText">Gain valuable experience through project work with our partner companies.  Get paid while you continue to learn.</p>
  				</div>
			</div>
  		</div>
 	</div>
	<a class="carousel-control left arrowBackground" href="#myCarousel" data-slide="prev">‹</a>
  	<a class="carousel-control right arrowBackground" href="#myCarousel" data-slide="next">›</a>
</div>

<div id="actionCall">
	<div class="containAction">	
		<div id="actionPlace">
			<?php $wp_query = new WP_Query("post_type=announcement&tag=active&post_status=publish&posts_per_page=1");?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<p><?php the_subtitle(); ?></p>
			<?php endwhile; ?>
			<?php else : ?>
					<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>		
			<?php endif; ?>
			<?php wp_reset_query();?>
		</div>	
		<a href="http://tfaforms.com/244179"><button id="applyBtn" class="button orange">Apply Now</button></a> 
	</div>
</div>

<div class="containInfo clearfix">
	<div class="weDoFloat" class="clearfix">
		<section class="weDo">
			<div class="headingBorder">
				<h2 class="smallHeadline">what we do</h2>
			</div>
			<h3 class="homesub">Home-growing Tech Talent</h3>
			<p class="doSpace">Are you looking for a way to begin a career as a software developer?  Want to build mobile apps or web sites?  Nashville Software School will help you prepare for a job as a entry-level or junior software developer - even if you have no prior technical training or experience.</p>
			<p>Our innovative Bootcamp program is designed to take you from novice to developer in six months of intensive training and mentoring followed by real project work as an apprentice programmer.</p>
			<a class="linkStyle" href="<?php echo esc_url( get_permalink( get_page_by_title( 'program' ) ) ); ?>">Learn More</a>
		</section>
	</div>
	<section id="weAre" class="clearfix">
		<div class="indexBorder clearfix">
			<h2 class="smallHeadline">Who We Are</h2>
		</div>
		<div class="peopleLocate clearfix">
			<h3 class="homesub textLocate">Our Mentors and Instructors represent the best from Nashville's tech community</h3>
		</div>
		<div>
			<a class="meetLink" href="<?php echo esc_url( get_permalink( get_page_by_title( 'community' ) ) ); ?>">Meet All of Our Team</a>
		</div>
		<div class="peopleLoop clearfix">
			<?php $wp_query = new WP_Query("post_type=person&post_status=publish&category_name=featured&posts_per_page=3");?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="weBox" class="clearfix">
				<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>
				<hr/>
				<h4 class="clickBox homesub"><?php the_title(); ?></h4>
				<p><?php the_subtitle(); ?></p>
				<p><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) {echo $tag->name . '';	}} ?></p>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
			<?php endif; ?>
			<?php wp_reset_query();?>
		</div>
	</section>
	<div class="lowerWidth clearfix">
		<div class="studentBox" class="clearfix">
			<section>
				<?php $wp_query = new WP_Query("post_status=publish&category_name=student&tag_name=active&posts_per_page=1");?>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="student">
						<div class="studentBorder">
							<h2 class="smallHeadline studentTitle">Featured Student</h2>
						</div>
						<h5 class="className"><?php the_title();?></h5>
						<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>
						<hr/>
						<p><?php the_excerpt(); ?></p>
					</div>
				<?php endwhile; ?>
				<?php else : ?>
					<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query();?>
			</section>
		</div>
		<div class="news">
			<section>
				<div class="newsHead clearfix">
					<div class="indexBorder">
						<h2 class="smallHeadline">News</h2>
					</div>
				</div>
				<h3 class="homesub titleFix">See what's going on in our world</h3>
				<div class="newsLoop clearfix">
					<?php $wp_query = new WP_Query("posts_per_page=3&category_name=featured&posts_per_page=3");?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="newsBox">
						<article>
							<div class="newsBody">
								<a class="newsBlog" href="<?php the_permalink() ?>">
									<h5>
										<?php
										$thetitle = $post->post_title; /* or you can use get_the_title() */
										$getlength = strlen($thetitle);
										$thelength = 21;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
										?>
									</h5>
								</a>

								<div class="metaImg">
									<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>
									<hr/>
									<div class="post1Meta clearfix">
										<div class="floatMeta">
											<p class="monthBox"><?php the_time('M');?></p>
											<h5 class="dayBox"><?php the_time('j');?></h5>
										</div>
										<p><?php the_time('Y');?> | <?php the_author();?></p>
										<p class="commentSpace"><?php comments_number();?></p>
									</div>
								</div>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink();?>">Read More</a>
							</div>
						</article>
					</div>
					<?php endwhile; ?>
					<?php else : ?>
						<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
					<?php endif; ?>
					<?php wp_reset_query();?>
				</div> <!-- newsloop-->
			</section>
		</div>
	</div>
</div>
<?php get_footer ();?>
