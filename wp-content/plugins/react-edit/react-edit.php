<?php
/*
Plugin Name: React Edit

*/


add_action('admin_menu', 'react_edit_setup_menu');
 
function react_edit_setup_menu(){
    add_menu_page( 'React Edit Page', 'React Edit', 'manage_options', 'react-edit', 'react_DOM' );
}
 
function react_DOM(){        
    echo '<div id="root"></div>';
}

function enqueue_media_uploader()
{
    wp_enqueue_media();
}

add_action("admin_enqueue_scripts", "enqueue_media_uploader");

wp_enqueue_script('wp-api');
wp_enqueue_script( 'react-edit' . '-bundle', plugin_dir_url( __FILE__ ) . 'dist/bundle.js', array(), '1.0', 'all' );




