<?php
/**
 * @package beforeandaftergalleryphotos
 * Plugin Name:  Before and After Gallery Photos
 * Description: Makes your custom images gallery
 * Version: 1.1.1
 * Author: P5marketing team
 * Text Domain: patients plastic surgery
 */

 if ( ! defined( 'ABSPATH' ) ) { die( 'Invalid request.' ); }

 if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
	require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;


function activate_bagp_plugin(){
	Activate::activate();
}
register_activation_hook(__FILE__, 'activate_bagp_plugin' );


function deactivate_bagp_plugin(){
	Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_bagp_plugin' );



if(class_exists('Inc\\Init')){
	Inc\Init::register_services();
}