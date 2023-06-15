<?php 
//menu
require_once get_template_directory().'/classes/class-wp-bootstrap-navwalker.php';
add_theme_support('menus');

register_nav_menus(array(
	'header_menu' => 'header menu',
	'footer_menu' => 'footer menu',
	));
//menu

// one çikan görsel
add_theme_support("post-thumbnails"); 



 ?>