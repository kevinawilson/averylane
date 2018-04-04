<?php

function post_type_home() {
    $labels = array(
        'name' => __( 'Homepage', 'homeposttype' ),
        'singular_name' => __( 'Homepage', 'homeposttype' ),
        'add_new' => __( 'Add New Homepage', 'homeposttype' ),
        'add_new_item' => __( 'Add New Homepage', 'homeposttype' ),
        'edit_item' => __( 'Edit Homepage', 'homeposttype' ),
        'new_item' => __( 'Add New Homepage', 'homeposttype' ),
        'view_item' => __( 'View Homepage', 'homeposttype' ),
        'search_items' => __( 'Search Homepage', 'homeposttype' ),
        'not_found' => __( 'No Homepage found', 'homeposttype' ),
        'not_found_in_trash' => __( 'No Homepage found in trash', 'homeposttype' )
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array( 'title' ),
        'capability_type' => 'post',
        'menu_position' => 5,
    );
    register_post_type( 'home', $args );
}

add_action( 'init', 'post_type_home' );
