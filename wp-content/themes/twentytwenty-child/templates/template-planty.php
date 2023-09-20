<?php

/**
 * Template Name: Planty Template
 * 
 */

get_header();
?>

<main id="site-content">

	<?php
	the_content();
	?>

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
