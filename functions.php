<?php
/**
 * Created by PhpStorm.
 * User: WikdeWaal
 * Date: 6-2-2018
 * Time: 12:31
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') )
    register_sidebar();
?>