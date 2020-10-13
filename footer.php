<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hassan\'s_Inclusion_Education
 */

?>

	<!-- footer -->
	<footer id="footer">
		<div class="container row_spacer clearfix">
			<div class="rows_container clearfix">
				<div class="col-md-3">
					<div class="footer_row">
						<h6 class="footer_title">Company Info</h6>
						<img alt="Enar" src="<?php echo get_template_directory_uri();?>/images/logo-light.png">
						<span class="footer_desc">
							There are many  Purchase Now There are many variations of passages of Lorem Ipsum available, but the majority.
						</span>
						<a href="#" class="black_button">
							<i class="ico-angle-right"></i><span>Read More</span>
						</a>
					</div>
				</div><!-- Grid -->

				<div class="col-md-3">
					<div class="footer_row">
						<h6 class="footer_title">Recent Posts</h6>
						<ul class="recent_posts_list">
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="<?php echo get_template_directory_uri();?>/images/blog/thumb1.jpg" alt="Post Title"></span>
									<span>Best HTML5 Theme</span>
								</a>
								<span class="recent_post_detail">2015/01/23</span>
								<span class="recent_post_detail">Tutorials, Videos</span>
							</li>
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="<?php echo get_template_directory_uri();?>/images/blog/thumb2.jpg" alt="Post Title"></span>
									<span>Responseve Design</span>
								</a>
								<span class="recent_post_detail">2015/02/17</span>
								<span class="recent_post_detail">Audio, Videos</span>
							</li>
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="<?php echo get_template_directory_uri();?>/images/blog/thumb3.jpg" alt="Post Title"></span>
									<span>Many Home Pages</span>
								</a>
								<span class="recent_post_detail">2015/02/17</span>
								<span class="recent_post_detail">Tutorials, Design</span>
							</li>
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="<?php echo get_template_directory_uri();?>/images/blog/thumb4.jpg" alt="Post Title"></span>
									<span>Best HTML5 Theme</span>
								</a>
								<span class="recent_post_detail">2015/01/23</span>
								<span class="recent_post_detail">Tutorials, Videos</span>
							</li>
						</ul>
						<a href="#" class="arrow_button full_width">
							<span>
								<i class="ico-arrow-forward"></i>
								<span>Read More Posts</span>
								<i class="ico-arrow-forward"></i>
							</span>
						</a>
					</div>
				</div><!-- Grid -->

				<div class="col-md-3">
				</div><!-- Grid -->

				<div class="col-md-3">
					<div class="footer_row">

					</div>

				</div><!-- Grid -->
			</div>
		</div>
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-6">
					<span class="footer_copy_text">Copyright &copy; 2020 Powered By <a href="#">HASSAN'S INCLUSION EDUCATION</a> All Rights Reserved./span>
				</div>
				<div class="col-md-6 clearfix">
					<ul class="footer_menu clearfix">
						<li><a href="#"><span>Home</span></a></li>
						<li>/</li>
						<li><a href="#"><span>About Us</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Help Center</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->
	<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri();?>/js/jquery.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
<!--<script src="--><?php //echo get_template_directory_uri();?><!--/js/jquery.themepunch.tools.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri();?><!--/js/jquery.themepunch.revolution.min.js"></script>-->
<script src="<?php echo get_template_directory_uri();?>/js/mediaelement-and-player.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script src="<?php echo get_template_directory_uri();?>/js/gmaps.js"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/functions.js"></script>

<?php wp_footer(); ?>

</body>
</html>
