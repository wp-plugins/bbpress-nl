<?php
/**
* This plugin will provide the Dutch translation for your bbPress installation
*
* @author Remkus de Vries
*
* Plugin Name: bbPress NL
* Plugin URI: http://remkusdevries.com/plugins/bbpress-nl/
* Description: This plugin will translate bbPress in Dutch.
* Author: Remkus de Vries
* Version: 2.5.1
* Author URI: http://remkusdevries.com/
* License: GPLv2
* Copyright (C) 2014 Remkus de Vries, and each individual languages' contributors from http://translate.wordpress.org/projects/bbpress
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along
* with this program; if not, write to the Free Software Foundation, Inc.,
* 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'bbp_loaded', 'fsm_bbpress_do_nl_translation' );
/**
 * Change translations domain location
 * @return alterd text_domain
 */
function fsm_bbpress_do_nl_translation() {

	// load the location
	$mofile = WP_PLUGIN_DIR . "/bbpress-nl/nederlands/" . 'bbpress-nl_NL.mo';

	// inject it if it exists for bbPress
	if ( file_exists( $mofile ) ) {
		return load_textdomain( 'bbpress', $mofile );
	}

}
