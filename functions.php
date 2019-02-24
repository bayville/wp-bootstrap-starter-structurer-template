<?php
function WP_Bayville_enqueue() {
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    if($_SERVER['SERVER_NAME'] != 'localhost'){
    } else{
      wp_enqueue_style('style', get_template_directory_uri() . './style.css');
    }
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_script( 'bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'WP_Bayville_enqueue');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'header' => 'Custom Primary Menu',
  ) );
function WP_Bayville_widgets_init() {
  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'WP_Bayville_widgets_init' );

//Include Navbar
require_once get_template_directory() . './classes/class-wp-bootstrap-navwalker.php';
