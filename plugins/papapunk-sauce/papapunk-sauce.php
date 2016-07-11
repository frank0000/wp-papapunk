<?php
/**
 * Plugin Name: PapaPunk Sauce
 * Description: PapaPunk Sauce
 * Version: 0.0.1
 * Author: Frank Charron
 * License: GPL2
 */
/*  Copyright 2015  Frank Charron  (email : fcharron@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

    // removes detailed login error information for security
    add_filter( 'login_errors', create_function( '$a', 'return " Invalid username or password.";' ) );

    // removes the WordPress version from your header for security
    add_filter( 'the_generator', '__return_null' );


    add_action( 'init', 'register_papapunk_taxonomies' );
    function register_papapunk_taxonomies() {
        register_punk_tag_taxonomies();
    }

    function register_punk_tag_taxonomies() {

        register_taxonomy(
            'punk-tag',
            array( 'post', 'page' ),
            array(
                'labels' => array(
                    'name' => __('Punk Tags'),
                    'singular_name' => __('Punk Tag'),
                    'all_items' => __( 'All Punk Tags' ),
                    'edit_item' => __( 'Edit Punk Tag' ),
                    'view_item' => __( 'View Punk Tag' ),
                    'update_item' => __( 'Update Punk Tag' ),
                    'add_new_item' => __( 'Add New Punk Tag' ),
                    'new_item_name' => __('New Punk Tag Name'),
                    'parent_item' => ('Parent Punk Tag'),
                    'parent_item_colon' => ('Parent Punk Tag:'),
                    'search_items' => __( 'Search Punk Tags' ),
                    'popular_items' => __( 'Popular Punk Tags' ),
                    'separate_items_with_commas' => __( 'Separate Punk Tags with commas' ),
                    'add_or_remove_items' => __( 'Add or remove Punk Tags' ),
                    'choose_from_most_used' => __( 'Choose from the most used Punk Tags' ),
                    'not_found' => __( 'No Punk Tags found' ),
                ),
                'hierarchical' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array( 'slug' => 'punk-tag', 'with_front' => true, 'hierarchical' => true ),
                'show_admin_column' => true,
            )
        );
    }

?>
