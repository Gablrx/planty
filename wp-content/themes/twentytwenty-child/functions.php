<?php
/* enqueue scripts and style from parent theme */
function twentytwenty_styles()
{
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'twentytwenty_styles');



/* 
<?php if(is_user_logged_in()):?>
<li><a target="blank" href="<?php echo admin_url(); ?>">Admin</a></li>
<?php endif; ?> */