<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action('wp_footer', 'scripts_theme');

function style_theme() {
   wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
   wp_enqueue_style( 'main-style', get_stylesheet_uri());
   wp_enqueue_style('bootstrap-grid.min', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
   wp_enqueue_style( 'fullpage.min', get_template_directory_uri() . '/assets/css/fullpage.min.css' );
   wp_enqueue_style( 'all.min', get_template_directory_uri() . '/assets/css/all.min.css' );
   wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
}

function scripts_theme() {
   wp_enqueue_script('fullpage.min', get_template_directory_uri() . '/assets/js/fullpage.min.js');
   wp_enqueue_script('fp', get_template_directory_uri() . '/assets/js/fp.js');
   wp_enqueue_script('all.min', get_template_directory_uri() . '/assets/js/all.min.js');
   wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
   wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js');
   wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}

function remove_menus(){
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  remove_menu_page( 'edit.php' );                   // Записи	
}

add_theme_support ('custom-logo');
add_theme_support('menus');


add_action( 'wp_ajax_misha', 'test_function' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_misha', 'test_function' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей
 
function test_function(){
 
	$summa = $_POST['param1'] + $_POST['param2'];
	echo $summa;
 
	die; // даём понять, что обработчик закончил выполнение
}