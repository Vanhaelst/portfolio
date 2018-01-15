<?php
/**
 * Created by PhpStorm.
 * User: vanhaelst
 * Date: 22/11/2017
 * Time: 19:33
 */

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );





if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title' 	=> 'Theme General Settings',
    'menu_title'	=> 'Theme Settings',
    'menu_slug' 	=> 'theme-general-settings',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Theme Footer Settings',
    'menu_title'	=> 'Footer',
    'parent_slug'	=> 'theme-general-settings',
  ));

}



/* ===============================
  Portfolio
=============================== */
/*
function create_post_type() {
  register_post_type( 'acme_product',
    $labels = array(
      'labels' => array(
        'name'                  => __( 'Portfolio', 'portfolio', 'portfolio' ),
        'singular_name'         => __( 'Portfolio', 'portfolio', 'portfolio' ),
        'menu_name'             => __( 'Portfolio', 'portfolio' ),
        'name_admin_bar'        => __( 'Testimonials', 'portfolio' ),
        'archives'              => __( 'Portfolio Archives', 'testimonial_archive' ),
        'all_items'             => __( 'All portfolio items', 'alle_portfolio_items' ),
        'add_new_item'          => __( 'New portfolio item', 'new_portfolio_item' ),
        'add_new'               => __( 'New portfolio item', 'new_portfolio_item' ),
        'new_item'              => __( 'New portfolio item', 'new_portfolio_item' ),
        'edit_item'             => __( 'Edit portfolio item', 'edit_portfolio_item' ),
        'update_item'           => __( 'Update portfolio item', 'update_portfolio_item' ),
        'view_item'             => __( 'See portfolio', 'see_portfolio' ),
        'view_items'            => __( 'See portfolio', 'see_portfolio' ),
        'search_items'          => __( 'Search portfolio', 'search_portfolio' ),
        'not_found'             => __( 'Not found', 'not_founr' ),
        'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'text_domain' ),
        'featured_image'        => __( 'Uitgelichte afbeelding', 'text_domain' ),
        'set_featured_image'    => __( 'Uitgelichte afbeelding kiezen', 'text_domain' ),
        'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'text_domain' ),
        'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'text_domain' ),
        'insert_into_item'      => __( 'Voeg in bij portfolio', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Laad op bij portfolio', 'text_domain' ),
        'items_list'            => __( 'Lijst portfolio', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' )
      ),
      'label'                 => $labels,
      'supports'              => array( 'title', 'thumbnail' ),
      'taxonomies'            => false, //array( 'category', 'post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
    )
  );
}
add_action( 'init', 'create_post_type' );
*/




/* ===============================
  Testimonials
=============================== */


function create_posttype() {
  register_post_type( 'acme_portfolio',
    array(
      'labels' => array(
        'name'                  => __( 'Portfolio', 'portfolio', 'portfolio' ),
        'singular_name'         => __( 'Portfolio', 'portfolio', 'portfolio' ),
        'menu_name'             => __( 'Portfolio', 'portfolio' ),
        'name_admin_bar'        => __( 'Portfolio', 'portfolio' ),
        'archives'              => __( 'Portfolio Archives', 'portfolio_archive' ),
        'all_items'             => __( 'All portfolio items', 'alle_portfolio_items' ),
        'add_new_item'          => __( 'New portfolio item', 'new_ortfolio_item' ),
        'add_new'               => __( 'New portfolio item', 'new_ortfolio_item' ),
        'new_item'              => __( 'New portfolio item', 'new_ortfolio_item' ),
        'edit_item'             => __( 'Edit portfolio item', 'edit_ortfolio_item' ),
        'update_item'           => __( 'Update portfolio item', 'update_ortfolio_item' ),
        'view_item'             => __( 'See portfolio item', 'see_ortfolio_items' ),
        'view_items'            => __( 'See portfolio item', 'see_ortfolio_items' ),
        'search_items'          => __( 'Search portfolio item', 'search_tortfolio_items' ),
        'not_found'             => __( 'Not found', 'not_found' ),
        'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'not_found_in_trash' ),
        'featured_image'        => __( 'Uitgelichte afbeelding', 'featured_image' ),
        'set_featured_image'    => __( 'Uitgelichte afbeelding kiezen', 'select_featured_image' ),
        'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'delete_featured_image' ),
        'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'use_featured_image' ),
          'insert_into_item'      => __( 'Voeg bij winkel in', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Laad op bij winkel', 'text_domain' ),
        'items_list'            => __( 'Lijst winkels', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' )
      ),

      'menu_position' => 5,
      'public'        => true,
      'has_archive'   => true,
      'rewrite'       => array('slug' => 'work'),
      'taxonomies'    => array( 'category' ),
    )
  );
}
add_action( 'init', 'create_posttype' );







function create_post_type() {
  register_post_type( 'acme_testimonial',
    $labels = array(
      'labels' => array(
        'name'                  => __( 'Testimonials', 'testimonials', 'testimonials' ),
        'singular_name'         => __( 'Testimonial', 'testimonial', 'testimonial' ),
        'menu_name'             => __( 'Testimonials', 'testimonials' ),
        'name_admin_bar'        => __( 'Testimonials', 'testimonials' ),
        'archives'              => __( 'Testimonial Archives', 'testimonial_archive' ),
        'all_items'             => __( 'All testimonials', 'alle_testimonials' ),
        'add_new_item'          => __( 'New testimonials', 'new_testimonials' ),
        'add_new'               => __( 'New testimonials', 'new_testimonials' ),
        'new_item'              => __( 'New testimonials', 'new_testimonials' ),
        'edit_item'             => __( 'Edit testimonials', 'edit_testimonials' ),
        'update_item'           => __( 'Update testimonials', 'update_testimonials' ),
        'view_item'             => __( 'See testimonials', 'see_testimonials' ),
        'view_items'            => __( 'See testimonials', 'see_testimonials' ),
        'search_items'          => __( 'Search testimonials', 'search_testimonials' ),
        'not_found'             => __( 'Not found', 'not_founr' ),
        'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'text_domain' ),
        'featured_image'        => __( 'Uitgelichte afbeelding', 'text_domain' ),
        'set_featured_image'    => __( 'Uitgelichte afbeelding kiezen', 'text_domain' ),
        'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'text_domain' ),
        'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'text_domain' ),
        'insert_into_item'      => __( 'Voeg bij winkel in', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Laad op bij winkel', 'text_domain' ),
        'items_list'            => __( 'Lijst winkels', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' )
      ),
      'label'                 => $labels,
      'supports'              => array( 'title', 'thumbnail' ),
      'taxonomies'            => false, //array( 'category', 'post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 6,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
    )
  );
}
add_action( 'init', 'create_post_type' );