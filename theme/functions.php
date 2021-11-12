<?php

add_theme_support('post-thumbnails', array( 'post', 'page' ));
set_post_thumbnail_size(1440, 900);
add_image_size('vignette', 220, 100, true);


register_nav_menus(array(
    'menu_principal' => 'Menu principal',
	'menu_footer' => 'Menu du pied de page',
	'menu_entreprise' => 'Menu de la page entreprise',
));


if ( function_exists('acf_add_options_page') ) {

    acf_add_options_sub_page(array(
        'page_title'     => 'Offers Page Content',
        'menu_title'    => 'offers-page-content',
        'parent_slug'    => 'edit.php?post_type=offers',
    ));
}



function dunns_menu() {

	$labels = array(
		'name'                  => _x( 'Menu', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Menu', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Menus', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les Menus', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau menu', 'text_domain' ),
		'add_new'               => __( 'Ajouter menu', 'text_domain' ),
		'new_item'              => __( 'nouveau menu', 'text_domain' ),
		'edit_item'             => __( 'Editer menu', 'text_domain' ),
		'update_item'           => __( 'Update menu', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Menu', 'text_domain' ),
		'description'           => __( 'les menus', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dunns_menu', $args );

}
add_action( 'init', 'dunns_menu', 0 );




function contenu_text() {

	$labels = array(
		'name'                  => _x( 'contenu_text', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'contenu_text', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'contenu_texts', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les contenu_texts', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau contenu_text', 'text_domain' ),
		'add_new'               => __( 'Ajouter contenu_text', 'text_domain' ),
		'new_item'              => __( 'nouveau contenu_text', 'text_domain' ),
		'edit_item'             => __( 'Editer contenu_text', 'text_domain' ),
		'update_item'           => __( 'Update contenu_text', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'contenu_text', 'text_domain' ),
		'description'           => __( 'les contenu_texts', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-text-page',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'contenu_text', $args );

}
add_action( 'init', 'contenu_text', 0 );



function dunns_swiper_card() {

	$labels = array(
		'name'                  => _x( 'content_swiper', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'content_swiper', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'content_swipers', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les contenu_texts', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau contenu_text', 'text_domain' ),
		'add_new'               => __( 'Ajouter contenu_text', 'text_domain' ),
		'new_item'              => __( 'nouveau contenu_text', 'text_domain' ),
		'edit_item'             => __( 'Editer contenu_text', 'text_domain' ),
		'update_item'           => __( 'Update contenu_text', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'content_swiper', 'text_domain' ),
		'description'           => __( 'les content_swipers', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-slides',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dunns_swiper_card', $args );

}
add_action( 'init', 'dunns_swiper_card', 0 );







function dunns_page_commerce() {

	$labels = array(
		'name'                  => _x( 'content_commerce', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'content_commerce', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'content_commerces', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les contenu_texts', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau contenu_text', 'text_domain' ),
		'add_new'               => __( 'Ajouter contenu_text', 'text_domain' ),
		'new_item'              => __( 'nouveau contenu_text', 'text_domain' ),
		'edit_item'             => __( 'Editer contenu_text', 'text_domain' ),
		'update_item'           => __( 'Update contenu_text', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'content_commerce', 'text_domain' ),
		'description'           => __( 'les content_commerce', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-store',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dunns_page_commerce', $args );

}
add_action( 'init', 'dunns_page_commerce', 0 );






function page_entreprise() {

	$labels = array(
		'name'                  => _x( 'content_entreprise', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'content_entreprise', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'content_entreprise', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les contenu_texts', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau contenu_text', 'text_domain' ),
		'add_new'               => __( 'Ajouter contenu_text', 'text_domain' ),
		'new_item'              => __( 'nouveau contenu_text', 'text_domain' ),
		'edit_item'             => __( 'Editer contenu_text', 'text_domain' ),
		'update_item'           => __( 'Update contenu_text', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'content_entreprise', 'text_domain' ),
		'description'           => __( 'les content_entreprise', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-building',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'page_entreprise', $args );

}
add_action( 'init', 'page_entreprise', 0 );





function page_emplacement() {

	$labels = array(
		'name'                  => _x( 'content_emplacement', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'content_emplacement', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'content_emplacement', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les content_emplacements', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau content_emplacement', 'text_domain' ),
		'add_new'               => __( 'Ajouter content_emplacement', 'text_domain' ),
		'new_item'              => __( 'nouveau content_emplacement', 'text_domain' ),
		'edit_item'             => __( 'Editer content_emplacement', 'text_domain' ),
		'update_item'           => __( 'Update content_emplacement', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'content_emplacement', 'text_domain' ),
		'description'           => __( 'les content_emplacements', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-airplane',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'page_emplacement', $args );

}
add_action( 'init', 'page_emplacement', 0 );








function page_accueil() {

	$labels = array(
		'name'                  => _x( 'content_accueil', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'content_accueil', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'content_accueil', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les content_accueil', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau content_accueil', 'text_domain' ),
		'add_new'               => __( 'Ajouter content_accueil', 'text_domain' ),
		'new_item'              => __( 'nouveau content_accueil', 'text_domain' ),
		'edit_item'             => __( 'Editer content_accueil', 'text_domain' ),
		'update_item'           => __( 'Update content_accueil', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'content_accueil', 'text_domain' ),
		'description'           => __( 'les content_accueil', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-admin-home',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'page_accueil', $args );

}
add_action( 'init', 'page_accueil', 0 );


function icon__footer() {

	$labels = array(
		'name'                  => _x( 'social_icon', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'social_icon', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'social_icon', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les social_icon', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau social_icon', 'text_domain' ),
		'add_new'               => __( 'Ajouter social_icon', 'text_domain' ),
		'new_item'              => __( 'nouveau social_icon', 'text_domain' ),
		'edit_item'             => __( 'Editer social_icon', 'text_domain' ),
		'update_item'           => __( 'Update social_icon', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'social_icon', 'text_domain' ),
		'description'           => __( 'les social_icon', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-youtube',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'icon__footer', $args );

}
add_action( 'init', 'icon__footer', 0 );




function cpt_publicite() {

	$labels = array(
		'name'                  => _x( 'publicite', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'publicite', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'publicite', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les publicite', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un nouveau publicite', 'text_domain' ),
		'add_new'               => __( 'Ajouter publicite', 'text_domain' ),
		'new_item'              => __( 'nouveau publicite', 'text_domain' ),
		'edit_item'             => __( 'Editer publicite', 'text_domain' ),
		'update_item'           => __( 'Update publicite', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'publicite', 'text_domain' ),
		'description'           => __( 'les publicite', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-cover-image',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cpt_publicite', $args );

}
add_action( 'init', 'cpt_publicite', 0 );

function my_login_logo() { ?>
    <style type="text/css">
		.login{
			background-color: #352f2e;
		}

		.message, #loginform{
			background-color: #201918 !important;
			color: white;
		}

        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_dunns.png);
		width:150px;
		background-size: 150px;
		background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );








