<?php
/*-----------------
add style sheet and javascriptfiles
--------------------------*/
function custom_theme_scripts(){
  //bootstrap integration//
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

add_action('wp_watts_scripts','custom_theme_scripts');

//Main CSS//
wp_enqueue_style('main styles', get_stylesheet_uri());
//Javascript files//
wp_enqueue_script('custom-js', get_template_directory_uri() . 'js/main.js');
wp_enqueue_script('custom-js', get_template_directory_uri() . 'js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts','custom_theme_scripts');
/*-----------------
feature image capability
--------------------------*/


add_theme_support('post-thumbnails');

/*-----------------
Custom header logo
--------------------------*/

$custom_image_header = array(
  'width'=> 225,
  'height'=> 120,
  'uploads'=> true,
);

add_theme_support('custom-header', $custom_image_header);
/*-----------------
Add Menu to theme
--------------------------*/
function register_my_menus(){
  register_nav_menus(
    array(
    'top-menu'=> __('Top Menu'),
    'footer-left'=> __('Left Footer Menu'),
    'footer-middle'=> __('Middle Footer Menu'),
    'footer-right'=> __('Right Footer Menu'),
  )
);
}
add_action('init', 'register_my_menus');

/*-----------------
Add Widget Area Header
--------------------------*/
function blank_widget_init(){
register_sidebar(array(
  'name'            => ('Right Header'),
  'id'              => 'right-header',
  'description'     => 'Right widget area in header',
  'before_widget'   => '<div class="widget-header">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "header-widget-title">',
  'after_title'     => '</h3>'

));


/*-----------------
Add Widget Homepage
--------------------------*/

register_sidebar(array(
  'name'            => ('Hero Image'),
  'id'              => 'hero-image',
  'description'     => 'hero image on home page',
  'before_widget'   => '<div class="widget-hero-image">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "hero-image-widget-title">',
  'after_title'     => '</h3>'

));

register_sidebar(array(
  'name'            => ('About Us'),
  'id'              => 'about-us',
  'description'     => 'about us section',
  'before_widget'   => '<div class="widget-about-us">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "about-us-widget-title">',
  'after_title'     => '</h3>'

));

register_sidebar(array(
  'name'            => ('Bottom Left Home page'),
  'id'              => 'bottom-left-home-page',
  'description'     => 'Bottom left on homepage',
  'before_widget'   => '<div class="widget-bottom-left">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "bottom-left-widget-title">',
  'after_title'     => '</h3>'

));

register_sidebar(array(
  'name'            => ('Bottom Middle Homepage'),
  'id'              => 'bottom-middle-home-page',
  'description'     => 'Bottom middle on home page',
  'before_widget'   => '<div class="widget-bottom-middle">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "bottom-middle-widget-title">',
  'after_title'     => '</h3>'

));

register_sidebar(array(
  'name'            => ('Bottom Right Home Page'),
  'id'              => 'bottom-right-home-page',
  'description'     => 'bottom right on home page',
  'before_widget'   => '<div class="widget-bottom-right">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "bottom-right-widget-title">',
  'after_title'     => '</h3>'

));

/*-----------------
Add Widget Area FOOTER
--------------------------*/
register_sidebar(array(
  'name'            => ('Facebook'),
  'id'              => 'facebook-footer',
  'description'     => 'facebook icon on footer',
  'before_widget'   => '<div class="widget-Facebook">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "facebook-footer-widget-title">',
  'after_title'     => '</h3>'

));
register_sidebar(array(
  'name'            => ('Instagram'),
  'id'              => 'instagram-footer',
  'description'     => 'instagram icon on footer',
  'before_widget'   => '<div class="widget-instagram-footer">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "instagram-footer-widget-title">',
  'after_title'     => '</h3>'

));
register_sidebar(array(
  'name'            => ('Twitter'),
  'id'              => 'twitter-footer',
  'description'     => 'twitter icon on footer',
  'before_widget'   => '<div class="widget-twitter-footer">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "twitter-footer-widget-title">',
  'after_title'     => '</h3>'

));
/*-----------------
Add Widget Right sidebar
--------------------------*/
register_sidebar(array(
  'name'            => ('Right Sidebar'),
  'id'              => 'right-sidebar',
  'description'     => 'About us right sidebar',
  'before_widget'   => '<div class="widget-right-sidebar">',
  'after_widget'    => '</div>',
  'before_title'    => '<h3 class= "right-sidebar-widget-title">',
  'after_title'     => '</h3>'

));
}
add_action('widgets_init', 'blank_widget_init');




 ?>
