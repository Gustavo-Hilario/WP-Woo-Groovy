<?php

/**
 * Plugin Name: My Test Plugin - Gustavo
 * Plugin URI: http://gustavohilario.com/
 * Description: Test plugin create to test the new GitHub integration on Atomic Sites.
 * Version: 0.1
 * Author: Gustavo-Hilario
 * Author URI: http://gustavohilario.com/
 **/

 function disable_wpcomtoolbar ( $modules ) {
   if ( isset( $modules['masterbar'] ) ) {
   unset( $modules['masterbar'] );
   }
   return $modules;
   }
   add_filter( 'jetpack_get_available_modules', 'disable_wpcomtoolbar' );
    