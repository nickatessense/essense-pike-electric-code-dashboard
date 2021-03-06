<?php

function check_for_user_login(){

    if ( !is_user_logged_in() ) {
        get_template_part('page-login');
        exit();
    }

}
add_action('template_redirect', 'check_for_user_login');


// Removes admin bar from users that are not admins
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}
function block_dashboard_access() {
    if ( is_admin() && !current_user_can( 'administrator' ) && ! (defined( 'DOING_AJAX' ) && DOING_AJAX) ) {
         global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        get_template_part( 404 ); 
        exit();
    }
}

add_action( 'init' , 'block_dashboard_access' );

require_once(get_template_directory().'/includes/classes/class-highcharts.php');

$highcharts = new HighCharts();

// Register menus
register_nav_menus([
    'supervisor-menu'      => 'Supervisor Menu',
    'worker-menu'      => 'Worker Menu',
    'executive-menu'      => 'Executive Menu',
]);

function add_scripts(){

	// Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', ['dashicons']);

	// Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/main.js', ['jquery'], null, true);

    // jQuery UI Stylesheet
    wp_enqueue_style( 'jquery-ui-style', get_template_directory_uri() . '/assets/styles/jquery-ui.min.css');

    wp_enqueue_script('jquery-ui-slider');
    wp_enqueue_style('dashicons');

}

add_action('wp_enqueue_scripts', 'add_scripts');

// Creating Roles Below

add_role('worker', 'Worker', ['read' => true]);

add_role('supervisor', 'Supervisor', ['read' => true]);

// Temp Code used to generate tables
function generateTable($table, $table_classes = '', $enable_button_generation = true){

    echo "<table class='$table_classes'>";
    echo "<thead>";
    echo "<tr>";
    if( isset($table['headers']) && count($table['headers']) > 0 ){
        foreach( $table['headers'] as $header ){
            echo "<th>$header</th>";
        }
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    if( isset($table['rows']) && count($table['rows']) > 0 ){
        foreach( $table['rows'] as $row ){
            echo "<tr>";
            foreach($row as $col){
                if (strpos( $col, '%' ) != false || strpos( $col, ':' ) != false ) {

                    if ($enable_button_generation == true) {
                        $button = generateRandomGreenYellowButton();
                    }else{ $button = ''; }
                    echo "<td>$col $button</td>";
                }else{
                    echo "<td>$col</td>";
                }
            }
            echo "</tr>";
        }
    }
    echo "<tr><td class='show-more'>Show More</td></tr>";
    echo "</tbody>";
    echo "</table>";
}

function generateRandomGreenYellowButton(){

    $percent_random = rand(0, 50);
    $positive_or_negative = rand(0, 1) == 0 ? '-' : '+';
    $button_color_class = $positive_or_negative == '-' ? 'btn-lightYellow' : 'btn-lightGreen';
    $dashicion_class = $positive_or_negative == '-' ? 'dashicons-arrow-down-alt' : 'dashicons-arrow-up-alt';

    return "<button class='btn-round $button_color_class'><span class='dashicons $dashicion_class'></span> $positive_or_negative $percent_random%</button>";

}