<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

if ( current_user_can('edit_files') ) {
    add_action( 'admin_menu','register_my_custom_menu_page');
}


