<?php

/*
Plugin Name: Surbma | WooCommerce Without Marketplace Suggestions
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Remove WooCommerce Marketplace Suggestions from admin permanently.

Version: 2.1

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-woocommerce-without-marketplace-suggestions

WooCommerce options
WC requires at least: 3.6
WC tested up to: 3.9
*/

// Prevent direct access to the plugin.
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Remove WooCommerce Marketplace Suggestions.
add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false' );
