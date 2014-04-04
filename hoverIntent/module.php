<?php
/**
 * Load hoverIntent
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */

if( !function_exists( 'ot_load_hoverIntent_js' ) ) :
  function ot_load_hoverIntent_js() {
    if(!is_child_theme()){
      wp_register_script( 'hoverIntent_js', get_template_directory_uri().'/lib/modules/hoverIntent/js/hoverIntent.js', array( 'jquery' ), 'r7', true );
  } else {
      wp_register_script( 'hoverIntent_js', get_stylesheet_directory_uri().'/lib/modules/hoverIntent/js/hoverIntent.js', array( 'jquery' ), 'r7', true );
  }
    wp_enqueue_script( 'hoverIntent_js' );
  }
  add_action( 'init', 'ot_load_hoverIntent_js' );

endif;
