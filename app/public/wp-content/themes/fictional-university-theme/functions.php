<?php
//add_action() tells wordpress what to do. It takes in 2 arguments.
//First argument is 'wp_enqueue_scripts' which tells wordpress to run css file or js file
//Second is a function we're going to define ourselves
function university_files() {
    //wp_enqueue_style is used to load css file with wordpress. It takes in 2 arguments
    //First argument is the nickname for our style sheet. You can name it anything.
    //Second argument is the location of the file. You can provide a location or in this case, we are working with the main style sheet from the same directory, so the get_stylesheet_uri() function from wordpress achieve that.
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom_google_font','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');    
    wp_enqueue_style('univeristy_main_syles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');

function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');

function university_adjust_queries($query) {
    //make sure query will not apply on admin dashboard
    //make sure post type is 'event'
    //make sure the query being manipulated is the main query, so we don't accidentally manipulating any custom query
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
        $query->set('meta_key','event_date');
        $query->set('orderby','met_value_num');

    }
}

add_action('pre_get_posts', 'university_adjust_queries');
?>