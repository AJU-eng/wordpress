<?php

//Variables




//includes

include(get_theme_file_path("/includes/enqueue.php"));
include(get_theme_file_path("/includes/widgets.php"));
//hooks
// Register Nav Menus

add_action('wp_enqueue_scripts','t_enqueue');
add_action('after_setup_theme', 'theme_setup');



