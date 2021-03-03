<?php



    function my_menu(){
        register_nav_menus([
            'primary_menu' => 'Primary menu',
            ]);
    }
    register_sidebar( array(
		'name'          => __( 'obszar dla ig', 'kosmetycznedna' ),
		'id'            => 'ig-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	function my_cpt_post_types( $post_types ) {
    $post_types[] = 'movie';
    $post_types[] = 'actor';
    return $post_types;
    }
add_filter( 'cpt_post_types', 'my_cpt_post_types' );
add_action('after_setup_theme', 'my_menu');
add_action('widgets_init', 'register_widget_areas');

function remove_website_field($fields) {
    unset($fields['url']);
    return $fields;
}
 
add_filter('comment_form_default_fields', 'remove_website_field');

add_theme_support( 'post-thumbnails' );


?>