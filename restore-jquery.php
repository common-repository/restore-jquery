<?php
/*
Plugin Name: Restore jQuery
Plugin URI: http://wordpress.org/extend/plugins/restore-jquery/
Description: Restore the loaded jQuery library to the version bundled with WordPress.
Version: 1.0
Author: Syahir Hakim
Author URI: http://www.khairul-syahir.com/
License: GPL3
*/

/*  Copyright 2012 Syahir Hakim (email : syahir at khairul dash syahir dot com)

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

function rejq_restore_jquery(){
	if ( wp_script_is( 'jquery', 'queue' ) ){
		wp_dequeue_script( 'jquery' );
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_home_url() . '/wp-includes/js/jquery/jquery.js' );
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'wp_print_scripts', 'rejq_restore_jquery', 10000 );
?>