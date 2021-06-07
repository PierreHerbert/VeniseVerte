/* fonction ajouter script externe */
add_action( 'wp_enqueue_scripts', 'enqueue_mon_script' );
function enqueue_mon_script() {
    wp_enqueue_script( 'script-perso', get_stylesheet_directory_uri() . './jQuery/jQuery.js', array( 'jquery' ) );
}