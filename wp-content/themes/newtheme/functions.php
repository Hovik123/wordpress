<?php
require_once get_template_directory() . "/inc/Walker_menu.php";
function register_menu() {
    register_nav_menu('primary',__( 'Header menu' ));
}
add_action( 'init', 'register_menu' );
add_theme_support( 'post-thumbnails' ); 

?>
