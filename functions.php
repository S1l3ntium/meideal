<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action('wp_footer', 'scripts_theme');

function style_theme() {
   wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
   wp_enqueue_style( 'main-style', get_stylesheet_uri());
   wp_enqueue_style('bootstrap-grid.min', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
   wp_enqueue_style( 'fullpage.min', get_template_directory_uri() . '/assets/css/fullpage.min.css' );
   wp_enqueue_style( 'all.min', get_template_directory_uri() . '/assets/css/all.min.css' );

}

function scripts_theme() {
   wp_enqueue_script('fullpage.min', get_template_directory_uri() . '/assets/js/fullpage.min.js');
   wp_enqueue_script('all.min', get_template_directory_uri() . '/assets/js/all.min.js');
}

function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  remove_menu_page( 'edit.php' );                   // Записи	
}

add_theme_support ('custom-logo');
add_theme_support('menus');