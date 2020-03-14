<?php
	
	define('H_THEME_ROOT', get_template_directory_uri());
	define('H_CSS_DIR', H_THEME_ROOT. '/css');
	define('H_JS_DIR', H_THEME_ROOT. '/js');
	define('H_IMG_DIR', H_THEME_ROOT. '/img');

	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'main', H_CSS_DIR . '/style.css');
		wp_enqueue_style( 'theme', get_stylesheet_uri());
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	});

	register_nav_menus(array(
	'top'    => 'Top menu',    //Название месторасположения меню в шаблоне
	'bottom' => 'Bottom menu'      //Название другого месторасположения меню в шаблоне
));



	add_filter( 'wp_nav_menu_args', 'filter_wp_menu_args' );
	function filter_wp_menu_args( $args ) {
		if ( $args['theme_location'] === 'top' ) {
			$args['container']  = false;
			$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
			$args['menu_class'] = 'collapse navbar-collapse navbar-menu';
		}
		return $args;
}
// // Изменяем атрибут id у тега li
// 	add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
// 		function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
// 			return $args->theme_location === 'top' ? '' : $menu_id;
// 		}

// Изменяем атрибут class у тега li
	add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
		function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
			if ( $args->theme_location === 'top' ) {
				$classes = [
					'nav-item',
					' active ',
					'navbar-menu-item' . ( $depth + 0 )
				];
			if ( $item->current ) {
				$classes[] = 'navbar-menu-item';
		}
	}
	return $classes;
}

// // Изменяет класс у вложенного ul
// add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
// function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
// 	if ( $args->theme_location === 'top' ) {
// 		$classes = [
// 			'navbar-nav', 'navbar-menu-items'
// 		];
// 	}
// 	return $classes;
// }

///Добавляем классы ссылкам
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( $args->theme_location === 'top' ) {
		$atts['class'] = 'nav-link';
		if ( $item->current ) {
			$atts['class'] .= ' nav-link';
		}
	}
	return $atts;
}




//post

add_action( 'init', function(){
	register_post_type('editsec', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Edit sections', 
			'singular_name'      => 'Section Title', 
			'add_new'            => 'add sections', 
			'add_new_item'       => 'text1', 
			'edit_item'          => 'edit title', 
			'new_item'           => 'Новое ____', 
			'view_item'          => 'Смотреть ____', 
			'search_items'       => 'Искать ____', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'edit section',
		),
		'public'              => true,
		'show_in_menu'        => null,  
		'menu_position'       => null,
		'menu_icon'           => 
		'dashicons-welcome-write-blog', 
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ],
	) );
});


function getsec(){
	$args = array(
		'numberposts' => 1,
		'post_type' => 'editsec',
	);

	return get_posts($args);


}
// var_dump(getsec());
