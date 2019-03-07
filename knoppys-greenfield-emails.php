<?php
/*
Plugin Name:       Knoppys Greenfield Emails
Plugin URI:        https://github.com/knoppys/greenfield-emails
Description:       This plugin controls the email templates that are sent out to candidates and Greenfield Staff. The emails are branded and responsive. 
Version:           3
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/greenfield-emails
GitHub Branch:     master
*/
define( 'PLUGIN_VERSION', '1' );
define( 'PLUGIN__MINIMUM_WP_VERSION', '1.0' );
define( 'PLUGIN__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
/***************************
*Load Native & Custom wordpress functionality plugin files. 
****************************/
foreach ( glob( dirname( __FILE__ ) . '*.php' ) as $root ) {
    require $root;
}

foreach ( glob( dirname( __FILE__ ) . '/functions/*.php' ) as $root ) {
    require $root;
}

foreach ( glob( dirname( __FILE__ ) . '/templates/*.php' ) as $root ) {
    require $root;
}
