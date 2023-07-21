<?php
/**
 * @package beforeandaftergalleryphotos
 * 
 * ENQUEUE STYLES AND SCRIPTS
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'adminStyles'));
        add_action('wp_enqueue_scripts', array($this, 'frontStyles'));
    }

    public function adminStyles(){
        wp_enqueue_style('bafg-admin-css', $this->plugin_url . 'assets/css/admin_styles.css', false, 'all');
        wp_enqueue_script('bafg-admin-js', $this->plugin_url . 'assets/js/admin_scripts.js', array(), 1.0, false);

    }

    public function frontStyles(){
        wp_enqueue_style('bafg-front-css', $this->plugin_url . 'assets/css/front_styles.css', false, 'all');
        wp_enqueue_script('bafg-front-js', $this->plugin_url . 'assets/js/front_scripts.js', array(), 1.0, false);
    }

}