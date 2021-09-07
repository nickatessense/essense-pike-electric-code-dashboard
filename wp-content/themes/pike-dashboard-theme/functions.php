<?php

require_once(get_template_directory().'/includes/classes/class-highcharts.php');

$highcharts = new HighCharts();

// Register menus
register_nav_menus([
    'main-nav'      => 'Main Menu',       // Main nav in header
]);

function add_scripts(){

	// Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css');

	// Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/main.js', ['jquery'], null, true);

    // jQuery UI Stylesheet
    wp_enqueue_style( 'jquery-ui-style', get_template_directory_uri() . '/assets/styles/jquery-ui.min.css');

    wp_enqueue_script('jquery-ui-slider');
    wp_enqueue_style('dashicons');

}

add_action('wp_enqueue_scripts', 'add_scripts');