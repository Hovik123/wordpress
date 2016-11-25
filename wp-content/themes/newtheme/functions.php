<?php
function register_menu() {
    register_nav_menu('primary',__( 'Header menu' ));
}
add_action( 'init', 'register_menu' );
add_theme_support( 'post-thumbnails' ); 

?>
