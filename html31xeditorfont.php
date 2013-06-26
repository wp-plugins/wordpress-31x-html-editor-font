<?php
/*
  Plugin Name: HTML 3.1x Editor Font
  Plugin URI: http://www.eracer.de/
  Description: Brings the old HTML-Editor font from Wordpress 3.1x back to WordPress 3.2/3.3
  Author: rockschtar
  Version: 1.7
  Author URI: http://www.eracer.de
 */

function my_htmleditor31xfont_css() {
  echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('html31xeditorfont.css  ', __FILE__). '">';
}

add_action('admin_head','my_htmleditor31xfont_css');

?>