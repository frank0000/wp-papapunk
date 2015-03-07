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
    
?>l