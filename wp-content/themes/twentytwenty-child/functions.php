<?php
/* enqueue scripts and style from parent theme */
function twentytwenty_styles()
{
    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
add_action('wp_enqueue_scripts', 'twentytwenty_styles');




// ADMIN LINK :
// 
function add_admin_link($items, $args)
{
    // Si primary menu activé et si utilisateur connecté : 
    if ($args->theme_location == 'primary' && is_user_logged_in()) {
        // Lien vers l'admin :
        $admin_link = '<li><a title="Admin" href="' . admin_url() . '">' . __('Admin') . '</a></li>';
        // ajoute $admin_link en 2eme position parmis les $items du menu :
        $items = substr_replace($items, $admin_link, strpos($items, '<li', 2), 0);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
