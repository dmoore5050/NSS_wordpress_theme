<?php

/*

Template Name: Community Page

*/

?>

<?php get_header ();?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/CSS/communityStyle.css">

<div id="backgroundWrapper" class="clearfix">

	<div id="communityWrapper" class="clearfix">

		<div class="sectionWrap clearfix">

			<section class="clearfix">

				<div class="infoSpace">

					<div class="communityBorder">

						<a name="instructorsStaffJump"></a>

						<h3 class="homesub">Mentors, Instructors, & Staff</h3>

					</div>

					<p>Nashville Software School was created by the Nashville tech creative community and it exists to serve and grow that same community.  All of our mentors, instructors and staff are committed to growing our tech community by helping our students learn the skills and gain the experience required to design, build and deliver software-based products, services and systems. We are grateful and humbled by the time, passion and knowledge that our community members provide to our students and through them to the broader Nashville community.</p>

				</div>

				<div class="clearfix">


					<ul class='communityList'>

					<?php $wp_query = new WP_Query("post_type=person&tag=mentor,Instructor/Staff&post_status=publish&posts_per_page=-1&cat=-9");?>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

							<li class='instructStaff'>

								<div class='pictBox'>

									<div class="pictInfo clearfix">

										<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>

										<hr/>

										<div class="imgPop">

											<h3><?php the_title();?></h3>

											<div class="infoPlace" style="margin-top:-40px;">

											<a href="#<?php the_ID();?>" data-reveal-id="<?php the_ID();?>" data-animation="fade" data-animationspeed="300">

											 <img src="<?php bloginfo('template_directory'); ?>/images/add.png" width="22px"/></a>

												<div id="<?php the_ID();?>" class = "reveal-modal" style="overflow-y: scroll;" >

													<h3 class="modalBio"><?php the_subtitle(); ?></h3>

													<?php the_content ();?>

												</div>

											</div>

											<ul class="peopleInfo">

												<li class = "infoItem"><p class="tags"> <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) {echo $tag->name . '';	}} ?> </p></li>

												<li class="infoItem infoMargin"><a class="format_text" href="http://<?php $personalLink = get_post_meta( get_the_ID(), 'personalLink', true);echo $personalLink;?>" class = "class"> <?php echo $personalLink;?> </a></li>

												<li class="infoItem infoMargin"><a class="format_text_lower" href="http://<?php $twitterLink= get_post_meta( get_the_ID(), 'twitterLink', true );echo $twitterLink;?>"> <?php $twitterID= get_post_meta( get_the_ID(), 'Twitter', true ); echo $twitterID;?></a></li>



											</ul>

										</div> <!-- end imgPop -->

									</div> <!-- end pictInfo -->

								</div> <!-- end pictBox -->

							</li>

						<?php endwhile; ?>

						<?php else : ?>

							<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>

						<?php endif; ?>

						<?php wp_reset_query();?>

					</ul>

				</div> <!-- end clearfix -->

				<div class="infoSpace">

					<div class="communityBorder">

						<a name="alumniJump"></a>

						<h3 class="homesub">Alumni</h3>

					</div>

					<p>Not only do our alumni leave the Nashville Software School with the skills to succeed in the Nashville software community and the drive to continue to expand upon the knowledge gained in the program, but they also leave understanding the importance of giving back to both the community and the program itself, now as mentors to future classes.</p>

				</div>

				<div class="clearfix">
					<ul class='communityList'>

						<?php $wp_query = new WP_Query("post_type=person&tag=alumni&post_status=publish&posts_per_page=-1&cat=-9");?>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

							<li class='alumni'>

								<div class='pictBox'>

									<div class="pictInfo clearfix">

										<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>

										<hr/>

										<div class="imgPop">

											<h3><?php the_title();?></h3>

											<div class="infoPlace" style="margin-top:-40px;">

											<a href="#<?php the_ID();?>" data-reveal-id="<?php the_ID();?>" data-animation="fade" data-animationspeed="300">

											 <img src="<?php bloginfo('template_directory'); ?>/images/add.png" width="22px"/></a>

												<div id="<?php the_ID();?>" class = "reveal-modal" style="overflow-y: scroll;" >

													<h3 class="modalBio"><?php the_subtitle(); ?></h3>

													<?php the_content ();?>

												</div>

											</div>

											<ul class="peopleInfo">

												<li class = "infoItem"><p class="tags"> <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) {echo $tag->name . '';	}} ?> </p></li>

												<li class = "infoItem infoMargin"><a class="format_text" href="http://<?php $personalLink = get_post_meta( get_the_ID(), 'personalLink', true);echo $personalLink;?>" class = "class"> <?php echo $personalLink;?> </a></li>

												<li class = "infoItem infoMargin"><a class="format_text_lower" href="http://<?php $twitterLink= get_post_meta( get_the_ID(), 'twitterLink', true );echo $twitterLink;?>"> <?php $twitterID= get_post_meta( get_the_ID(), 'Twitter', true ); echo $twitterID;?></a></li>



											</ul>

										</div> <!-- end imgPop -->

									</div> <!-- end pictInfo -->

								</div> <!-- end pictBox -->

							</li>

						<?php endwhile; ?>

						<?php else : ?>

							<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>

						<?php endif; ?>

						<?php wp_reset_query();?>

					</ul>

				</div> <!-- end clearfix -->

			<section id="partners">

				<div class="infoSpace">

					<div class="communityBorder">

						<a name="SponsorJump"></a>

						<h3 class="homesub">Partner Companies</h3>

					</div>

					<p>Our Partner Companies support NSS and our students in multiple fashions. Most importantly, many of our partner companies support the program by hiring our graduates for entry-level software developer jobs. Our partner companies also provide financial support for the school through donations to our general operating fund, through sponsorship commitments that pre-fund students expenses, through donations of equipment and other resources, and through scholarships for economically disadvantages students. Many of our partner companies also encourage their technical staff to support the school through mentoring.</p>

				</div> 

				<div class="clearfix">

					<ul class='communityList'>

						<?php $wp_query = new WP_Query("post_type=person&tag=Sponsor&post_status=publish&posts_per_page=-1&cat=-9");?>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

							<li class='sponsor'>

								<div class='sponsorBox'>

									<div class="pictInfo clearfix">

										<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>

										<hr/>
									</div>	

								</div>

							</li>

						<?php endwhile; ?>

						<?php else : ?>

							<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>

						<?php endif; ?>

						<?php wp_reset_query();?>

					</ul>

				</div> <!-- end clearfix -->

				<div><p style="text-align: center;">If your company is interested in learning how you can support the Nashville Software School and hire our students, please inquire to John Wark at Nashville Software School via the <a class="linkStyle" href="<?php echo esc_url( get_permalink( get_page_by_title( 'program' ) ) ); ?>">Contact page.</a></p></div>

			</section> <!-- end partners section -->

		</div> <!-- end section wrap -->

	</div> <!-- end community wrapper -->

</div> <!-- end background wrapper -->

<?php get_footer(); ?>

