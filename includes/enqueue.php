<?php

   function t_enqueue()
   {
       wp_register_style('t_theme',get_theme_file_uri("/assets/index.css"));
       wp_enqueue_style('t_theme');
   }



   