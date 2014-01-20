<?php
/*
Plugin Name: Redirect with GET
Plugin URI: https://ge1.me/yourls-redirect-with-get
Description: Redirect with all GET parameters.
Version: 1.0
Author: fnkr
Author URI: https://www.fnkr.net
License: Creative Commons Attribution 3.0 Unported: https://creativecommons.org/licenses/by/3.0/
*/

yourls_add_action( 'redirect_shorturl', 'fnkr_redirect_with_get' );

function fnkr_redirect_with_get() {
    if( $_SERVER['QUERY_STRING'] ) {
        global $url;
        $url = $url . '?' . $_SERVER['QUERY_STRING'];
    }
}
