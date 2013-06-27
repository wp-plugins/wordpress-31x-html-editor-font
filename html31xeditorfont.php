<?php
/*
  Plugin Name: HTML 3.1x Editor Font
  Plugin URI: http://www.eracer.de/
  Description: Brings the old HTML-Editor font from Wordpress 3.1x back to WordPress 3.2 and higher
  Author: rockschtar
  Version: 1.8
  Author URI: http://www.eracer.de
 */

function h31ef_admin_print_styles() {
    wp_enqueue_style("h31f", plugins_url('html31xeditorfont.css  ', __FILE__));
}

add_action('admin_print_styles-post-new.php', "h31ef_admin_print_styles");
add_action('admin_print_styles-post.php', "h31ef_admin_print_styles");
?>