<?php

/**
 * Plugin Name: test-gustavo
 * Plugin URI: https://woo.groovytestsite.blog/
 * Description: Test.
 * Version: 0.1
 * Author: Gustavo-Hilario
 * Author URI: https://woo.groovytestsite.blog/
 **/


function modify_read_more_link()
{
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter('the_content_more_link', 'modify_read_more_link');
