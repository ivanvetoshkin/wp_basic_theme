<?php 

remove_filter('the_content', 'wptexturize');
remove_filter('the_title', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

add_theme_support( 'automatic-feed-links' );
add_theme_support('html5', array('comment-list', 'search-form', 'comment-form', 'gallery'));
add_theme_support( 'post-thumbnails' );
add_editor_style();


/* Registering and enqueueing the script for links hover */
function enqueue_hover() {
    wp_enqueue_script( 'hover', get_template_directory_uri() . '/js/hover.js', array( 'jquery' ), null, 'in_footer' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_hover' );