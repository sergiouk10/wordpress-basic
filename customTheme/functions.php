<?php

// ******** THIS IS TO LOAD SCRIPTS ******** //
function enqueue_customtheme_styles() {

  wp_enqueue_script ( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_style( 'bootstrap' , '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
  wp_enqueue_style( 'googlefont', '//fonts.googleapis.com/css?family=PT+Sans+Narrow');
  wp_enqueue_style( 'customtheme-style', get_stylesheet_uri() );
  //wp_enqueue_style( 'theme-style',( get_stylesheet_directory_uri() . '/library/_dist/theme.min.css' ), false, filemtime( get_template_directory() . '/library/_dist/theme.min.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_customtheme_styles' );
// ******** THIS IS TO LOAD SCRIPTS ******** //



// ******** ADD THIS FUNCTIONS ON THIS STATEMENT ******** //
function customtheme_setup() {

  // REGISTER A CUSTOM PRIMARY NAVIGATION MENU
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'customtheme' )
  ));
  // REGISTER A CUSTOM PRIMARY NAVIGATION MENU

  // ADD THEME SUPPORT FOR DOC TITLE TAG HEAD
  add_theme_support( 'title-tag' );
  // ADD THEME SUPPORT FOR DOC TITLE TAG HEAD

}
add_action( 'after_setup_theme', 'customtheme_setup' ); //plugin api hooks wordpress (after_setup_theme)
// ******** ADD THIS FUNCTIONS ON THIS STATEMENT ******** //



// ******** ADD SIDEBAR ******** //
function customtheme_widgets() {
  register_sidebar( array(
    'name'           => __( 'Sidebar', 'customtheme' ),
    'id'             => 'sidebar-1',
    'description'    => __( 'Add widgets here to appear in the sidebar', 'customtheme' ),
    'before_widget'  => '<section id="%1$s" class="widget %2$s">',
    'after_widget'   => '</section>',
    'before_title'   => '<h2 class="widget-title">',
    'after_title'    => '</h2>'
  ));
}
add_action( 'widgets_init', 'customtheme_widgets' );
// ******** ADD SIDEBAR ******** //



// ******** SHORTCODE TO CREATE MULTICOLUMMS ******** //

if( ! function_exists( 'custom_shortcode' ) ) :    // <—- add this to make sure this function doesn´t have conflict or in any function

function custom_shortcode( $atts , $content = null ) {
  return '<div class="col-sm-4">' . $content . '</div>';
}
endif;                                             // <—- add this to make sure this function doesn´t have conflict or in any function
add_shortcode( 'one_third' , 'custom_shortcode' );

// ******** SHORTCODE TO CREATE MULTICOLUMMS ******** //


// ******** REMOVE AUTOMATIC "P" ON CONTENT ******** //
//remove_filter( 'the_content', 'wpautop' );
// ******** REMOVE AUTOMATIC "P" ON CONTENT ******** //


?>


