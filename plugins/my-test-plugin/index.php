<?php

/**
 * Plugin Name: My Test Plugin - Gustavo
 * Plugin URI: http://gustavohilario.com/
 * Description: Test plugin create to test the new GitHub integration on Atomic Sites. Add Twitter and Facebook links at the bottom of posts
 * Version: 0.1
 * Author: Gustavo-Hilario
 * Author URI: http://gustavohilario.com/
 **/

function wpb_follow_us($content)
{

   // Only do this when a single post is displayed
   if (is_single()) {

      // Message you want to display after the post
      // Add URLs to your own Twitter and Facebook profiles

      $content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="http://gustavohilario.com/" title="Gustavo on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="http://gustavohilario.com/" title="Gustavo on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
   }
   // Return the content
   return $content;
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'wpb_follow_us');
