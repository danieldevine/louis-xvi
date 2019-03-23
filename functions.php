<?php

/**
 * Allows SVG uploads.
 *
 * @param [type] $mimes
 * @return void
 */
function xvi_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'xvi_mime_types');


/**
 * Adds ACF Options page
 */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}