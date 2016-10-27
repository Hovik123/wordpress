<?php
function register_menu() {
    register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_menu' );
?>
