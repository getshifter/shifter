<?php
/*
 * Plugin Name: Redirect to beta website
 * Version: 1.0.0
 * Plugin URI:https://github.com/getshifter/
 * Description:Redirect to https://beta.getshifter.io/
 * Author: hideokamoto
 * Author URI: http://getshifter.io/
 * @package redirect-to-beta
 */
function redirect_to_beta() {
	if ( ! is_user_logged_in() ) {
		$url = "https://beta.getshifter.io/";
		wp_redirect( $url );
		exit;
	}
}
add_action('template_redirect', 'redirect_to_beta' );
