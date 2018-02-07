<?php

/**
 * Forces 404 headers on a query.
 *
 * Use this function in a [WordPress template file](https://wphierarchy.com/).
 *
 * When a template other than 404.php is loaded, the proper headers for a 404 status are not set properly.
 * This function can be used to set proper headers even after a template file is loaded.
 *
 * What you have to do after this request is to include the 404 template and exit after it.
 *
 * @example
 * ```php
 * if ( 'publish' !== $post->post_status ) {
 *     force_404();
 *     Timber::render( '404.twig', $context );
 *     exit;
 * }
 * ```
 *
 * @see   WP::handle_404()
 * @since 1.0.0
 */
function force_404() {
	global $wp_query;

	$wp_query->set_404();
	status_header( 404 );
	nocache_headers();
}
