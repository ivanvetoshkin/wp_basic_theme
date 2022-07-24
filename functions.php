<?php 

remove_filter('the_content', 'wptexturize');
remove_filter('the_title', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

add_theme_support( 'automatic-feed-links' );
add_theme_support('html5', array('comment-list', 'search-form', 'comment-form', 'gallery'));
add_theme_support( 'post-thumbnails' );
add_editor_style();

