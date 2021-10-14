<?php
// Hier werden die Custom Post Types indexiert. Einfach freischalten und Argumente austauschen.

// function register_themepost() {
//     $labels = array(
//         'name' => _x( 'Themes', 'my_custom_post','custom' ),
//         'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
//         'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
//         'add_new_item' => _x( 'Add New ThemePost', 'my_custom_post', 'custom' ),
//         'edit_item' => _x( 'Edit ThemePost', 'my_custom_post', 'custom' ),
//         'new_item' => _x( 'New ThemePost', 'my_custom_post', 'custom' ),
//         'view_item' => _x( 'View ThemePost', 'my_custom_post', 'custom' ),
//         'search_items' => _x( 'Search ThemePosts', 'my_custom_post', 'custom' ),
//         'not_found' => _x( 'No ThemePosts found', 'my_custom_post', 'custom' ),
//         'not_found_in_trash' => _x( 'No ThemePosts found in Trash', 'my_custom_post', 'custom' ),
//         'parent_item_colon' => _x( 'Parent ThemePost:', 'my_custom_post', 'custom' ),
//         'menu_name' => _x( 'Themes Posts', 'my_custom_post', 'custom' ),
//     );
//
//     $args = array(
//         'labels' => $labels,
//         'hierarchical' => false,
//         'description' => 'Custom Theme Posts',
//         'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
//         'taxonomies' => array( 'post_tag','themes_categories'),
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'menu_position' => 5,
//         'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
//         'show_in_nav_menus' => true,
//         'publicly_queryable' => true,
//         'exclude_from_search' => false,
//         'query_var' => true,
//         'can_export' => true,
//         'rewrite' => array( 'slug' => 'themes/%themes_categories%', 'with_front' => FALSE ),
//         'public' => true,
//         'has_archive' => 'themes',
//         'capability_type' => 'post'
//     );
//     register_post_type( 'themes', $args ); // max 20 character cannot contain capital letters and spaces
// }
// add_action( 'init', 'register_themepost', 20 );

?>
