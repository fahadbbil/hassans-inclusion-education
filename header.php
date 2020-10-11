<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hassan\'s_Inclusion_Education
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(array('dark_sup_menu', 'dark_header')); ?>>
<?php wp_body_open(); ?>
<div id="preloader">
	<div class="spinner">
		<div class="sk-dot1"></div><div class="sk-dot2"></div>
		<div class="rect3"></div><div class="rect4"></div>
		<div class="rect5"></div>
	</div>
</div>

<div id="main_wrapper">
	<header id="site_header">

		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="<?php echo site_url();?>">
						<img class="logo_dark" src="<?php echo get_template_directory_uri();?>/images/Logo-1.png" alt="Enar Logo">
						<img class="logo_light" src="<?php echo get_template_directory_uri();?>/images/Logo-1.png" alt="Enar Logo">
					</a>
				</div>

				<nav id="main_nav">
					<div id="nav_menu">
						<span class="mobile_menu_trigger">
						    <a href="#" class="nav_trigger"><span></span></a>
						</span>
						<ul id="navy" class="clearfix">
							<li class="normal_menu mobile_menu_toggle current_page_item">
								<a href="index.html"><span>Home</span></a>
								<ul>
									<li class="normal_menu"><a href="index.html">Home Page V1</a></li>
									<li class="normal_menu"><a href="index2.html">Home Page V2</a></li>
									<li class="normal_menu"><a href="index3.html">Home Page V3</a></li>
									<li class="normal_menu"><a href="index4.html">Home Page V4</a></li>
									<li class="normal_menu"><a href="index5.html">Home Page V5</a></li>
									<li class="normal_menu"><a href="index-one-page1.html">Home One Page </a>
										<ul>
											<li class="normal_menu"><a href="index-one-page1.html">Home One Page V1</a></li>
											<li class="normal_menu"><a href="index-one-page2.html">Home One Page V2</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="index-blog-timeline.html">Home Blog </a>
										<ul>
											<li class="normal_menu"><a href="index-blog-timeline.html">Home Blog Timeline</a></li>
											<li class="normal_menu"><a href="index-blog-masonry.html">Home Blog Masonry</a></li>
											<li class="normal_menu"><a href="index-blog-list.html">Home Blog List</a></li>
											<li class="normal_menu"><a href="index-blog-standard.html">Home Blog Standard</a></li>
										</ul>
									</li>

									<li class="normal_menu"><a href="index-header-side.html">Home With Side Menu</a>
										<ul>
											<li class="normal_menu"><a href="index-header-side-boxed.html">Home Boxed With Side Menu</a></li>
											<li class="normal_menu"><a href="index-header-side.html">Home Full With Side Menu</a></li>
										</ul>
									</li>

									<li class="normal_menu"><a href="index-header-transparent-dark.html">Home Transparent Header</a>
										<ul>
											<li class="normal_menu"><a href="index-header-transparent-dark.html">Home Transparent Dark</a></li>
											<li class="normal_menu"><a href="index-header-transparent-light.html">Home Transparent Light</a></li>
										</ul>
									</li>
									<li class="normal_menu"><a href="index-menu-button-mode.html">Home Menu Button Mode</a></li>
								</ul>
							</li>

						</ul>
					</div>
				</nav>
				<!-- End Nav -->

				<div class="clear"></div>
			</div>
		</div>
 	</header>
        <!-- End Main Header -->
