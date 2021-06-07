<?php 

// ajout style et script
function ajout_feuilles() {
wp_enqueue_style( "style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "ajout_feuilles");


// enregistrer le menu
register_nav_menus( array("menu" => "Menu principal"));


// activer les thumbnails
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// donner plusieurs tailles de thumbnails
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'petit', 200, 150 );
    add_image_size( 'moyen', 220, 180, true );
    add_image_size( 'grand', 800, 600);
    
}

/** CUSTOM JAVASCRIPT **/

// function jquery_jquery_ui() {
//         if (!is_admin()) {
//          wp_deregister_script('jquery');
   
//          // Google API (CDN)
//          wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1', true);
//          wp_register_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('jquery'), "1.10.3", true);
   
//          wp_enqueue_script('jquery');
//          wp_enqueue_script('jquery-ui');
//         }
//        }
//        add_action('init', 'jquery_jquery_ui');
   
//        /** END **/


function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . './jQuery/jQuery.js', #your JS file
        array( 'jquery' ) #dependencies
    );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
