<?php get_header(); ?>

	<?php
        get_template_part('template-parts/content','slider');
    ?>

	<!-- Our History -->
    <?php
        get_template_part('template-parts/content','history');
    ?>
	<!-- End Our History -->

	<!-- Our Gallery -->
    <?php
        get_template_part('template-parts/content','gallery');
    ?>
	<!-- End Our Gallery -->

    <!-- Our Testimonials -->
    <?php
        get_template_part('template-parts/content','testimonials');
    ?>
	<!-- End Our Testimonials -->

    <!-- Our Blog Grid -->
    <?php
        get_template_part('template-parts/content','blogGrid');
    ?>
	<!-- End Our Blog Grid -->

    <!-- Our Blog Grid -->
    <?php
        get_template_part('template-parts/content','contact');
    ?>
	<!-- End Our Blog Grid -->

<?php get_footer(); ?>

