<?php


function theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-text-domain'),
        'footer'  => __('Footer Menu', 'theme-text-domain')
    ));
}

