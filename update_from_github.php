<?php


/**
 * Plugin Name: UPdate from Git Hub example Plugin
 * Plugin URI: http://simplyct.co.il/update-from-github-plugin
 * Description: Example how to update from GitHub
 * Version: 1.0
 * Author: Roy
 * Author URI: http://www.simplyct.co.il
 */

add_action('the_content', 'my_thank_you_text');


function my_thank_you_text($content)
{
    return $content .= '<p>Thank you for reading!</p>';
}

