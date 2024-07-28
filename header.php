<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
   <meta charset="<?php bloginfo('charset') ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

   <header>
      <nav class="navbar">
         <div class="logo">acodez</div>
         <div class="menu">

            <?php
            wp_nav_menu(array(
               'theme_location' => 'primary', // Location registered in functions.php
               'menu_class'     => 'nav-menu', // Class for the <ul> element
               'fallback_cb'    => false      // Disable fallback to wp_page_menu
            ));
            ?>

         </div>
      </nav>
   </header>