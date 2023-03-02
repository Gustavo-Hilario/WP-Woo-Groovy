<?php

/**
 * Plugin Name: My Test Plugin - Gustavo
 * Plugin URI: http://gustavohilario.com/
 * Description: Test plugin create to test the new GitHub integration on Atomic Sites.
 * Version: 0.1
 * Author: Gustavo-Hilario
 * Author URI: http://gustavohilario.com/
 **/

function modify_read_more_link()
{
   return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter('the_content_more_link', 'modify_read_more_link');
