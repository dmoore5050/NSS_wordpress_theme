<div style="clear: both;"></div>
	<footer>
<!-- 		<div>
		</div> -->
		<div id="footer_wrapper" class="clearfix">
			<div id="footer_left">
				<div id="footer_logo">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'home' ) ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt="NSS" /></a>
				</div>
			</div>
			<div id="footer_right">
				<nav id="footNav">
					<ul>
						<?php wp_nav_menu(
    						array('theme_location'  => 'bottom_nav'));?>
					</ul>
				</nav>
			</div>
			<div id="footer_text">
				<h5>COPYRIGHT &copy; 2013 NASHVILLE SOFTWARE SCHOOL. ALL RIGHTS RESERVED. | HANDCRAFTED BY OUR STUDENTS IN NASHVILLE, TN.</h5>
			</div>
			<div style="clear: both;"></div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>