<?php

/**
 * Plugin Name: test-gustavo
 * Plugin URI: https://woo.groovytestsite.blog/
 * Description: Test.
 * Version: 0.1
 * Author: Gustavo-Hilario
 * Author URI: https://woo.groovytestsite.blog/
 **/

 function disable_wpcomtoolbar ( $modules ) {
    if ( isset( $modules['masterbar'] ) ) {
    unset( $modules['masterbar'] );
    }
    return $modules;
    }
    add_filter( 'jetpack_get_available_modules', 'disable_wpcomtoolbar' );
     