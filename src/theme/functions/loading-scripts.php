<?php

add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
   if ( !is_page('Contact') ) {
    wp_deregister_script( 'contact-form-7' );
     }
}

?>
