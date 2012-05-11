<?php
/* MENUS
====================================*/
//Main menu
register_nav_menu( 'main', 'Main menu');

// Remove menu items IDs
function filter_nav_menu_id( $id ) {
	return false;
}

add_filter( 'nav_menu_item_id', 'filter_nav_menu_id' );


/* WORKS
====================================*/
register_post_type(
    'works',
    array(
	    'labels' => array(
	        'name' => __( 'Works' ),
          'singular_name' => __( 'Work' )
        ),
	    'public' => true,
	    'description' => 'My works',
	    'has_archive' => true,
	    'menu_position' => 5,
	    'rewrite' => array('slug' => 'works'),
	    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    )
);
register_taxonomy (
    'services',        // internal name = machine-readable taxonomy name
    'works',   // object type = post, page, link, or custom post-type
    array(
        'hierarchical' => false,
        'label' => 'Services',    // the human-readable taxonomy name
        'query_var' => true,    // enable taxonomy-specific querying
        'rewrite' => array( 'slug' => 'services' ),    // pretty permalinks for your taxonomy?
    )
);

/* ASIDE
====================================*/
if ( function_exists('register_sidebar') )  
    register_sidebar(array(  
    'name' => 'aside',  
    'before_widget' => '<div class="sidebar-box">',  
    'after_widget' => '</div>',  
    'before_title' => '<span class="sidebar-title">',  
    'after_title' => '</span><div class="dots"></div>',  
)); 


/* FEATURED IMAGES
====================================*/
// Add feature images to pages
add_theme_support( 'post-thumbnails', array( 'post', 'page','works' ) );

// Remove width and height
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

