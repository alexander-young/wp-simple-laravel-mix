<?php

add_action('wp_enqueue_scripts', function(){

  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/css/main.css', [], '1.0', 'all');

  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/js/main.js', [], '1.0', true);

});
