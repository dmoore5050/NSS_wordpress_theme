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

						<h3 class="homesub">Mentors, Instructors & Staff</h3>

					</div>

					<p>Nashville Software School was created by the Nashville tech creative community and it exists to serve and grow that same community.  All of our mentors, instructors and staff are committed to growing our tech community by helping our students learn the skills and gain the experience required to design, build and deliver software-based products, services and systems. We are grateful and humbled by the time, passion and knowledge that our community members provide to our students and through them to the broader Nashville community.</p>

				</div>

				<div class="clearfix">

					<ul class='instructStaffList'>

						<?php $wp_query = new WP_Query("post_type=person&post_status=publish&posts_per_page=-1&cat=-9");?>

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

							<li class='instructStaff'>

								<div class='pictBox'>

									<div class="pictInfo clearfix">

										<?php the_post_thumbnail('author-thumbnail', array('class' => 'imgBorder')); ?>

										<hr/>

										<div class="imgPop">

											<h3><?php the_title();?></h3>

										<div>



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

										</div>

									</div>

								</div>

							</li>

						<?php endwhile; ?>

						<?php else : ?>

							<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>

						<?php endif; ?>

						<?php wp_reset_query();?>

					</ul>

				</div>

			<section id="partners">

				<div>

					<div class="communityBorder">

						<h3 class="homesub">Partner Companies</h3>

					</div>

					<p>Our Partner Companies support NSS and our students in multiple fashions. Most importantly, many of our partner companies support the program by hiring our graduates for entry-level software developer jobs. Our partner companies also provide financial support for the school through donations to our general operating fund, through sponsorship commitments that pre-fund students expenses, through donations of equipment and other resources, and through scholarships for economically disadvantages students. Many of our partner companies also encourage their technical staff to support the school through mentoring.</p>

				</div>

				<div class="pictures2 clearfix">

					<div class="pictBox2">

						<img class="imgBorder"src="<?php echo get_template_directory_uri(); ?>/images/sponsor_csia.png">

							<div class="pictInfo2">

								<hr/>

							</div>

					</div>

					<div class="pictBox2">

						<img class="imgBorder"src="<?php echo get_template_directory_uri(); ?>/images/sponsor_ci.png">

							<div class="pictInfo2">

								<hr/>

							</div>

					</div>

					<div class="pictBox2">

						<img class="imgBorder"src="<?php echo get_template_directory_uri(); ?>/images/sponsor_ch.png">

							<div class="pictInfo2">

								<hr/>

							</div>

					</div>

					<div class="pictBox2">

						<img class="imgBorder"src="<?php echo get_template_directory_uri(); ?>/images/sponsor_ft.png">

							<div class="pictInfo2">

								<hr/>

							</div>

					</div>

					<div class="pictBox2">

						<img class="imgBorder"src="<?php echo get_template_directory_uri(); ?>/images/sponsor_e.png">

							<div class="pictInfo2">

								<hr/>

							</div>

					</div>

				</div>

				<div><p style="text-align: center;">If your company is interested in learning how you can support the Nashville Software School and hire our students, please inquire to John Wark at Nashville Software School via the <a class="linkStyle" href="<?php echo esc_url( get_permalink( get_page_by_title( 'program' ) ) ); ?>">Contact page.</a></p></div>

			</section>

		</div>

	</div>

</div>

<?php get_footer(); ?>

