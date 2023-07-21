<?php
/**
 * @package beforeandaftergalleryphotos
 * 
 * Base Controller
 */

namespace Inc\Base;
use \Inc\Base\AddTaxonomies;

class BaseController
{
    
    public $plugin_path;
    public $plugin_url;
    public $plugin_name;

    public $menu_slug;

    public $admin_pages = array();
    public $admin_sub_pages = array();

    public function __construct(){
        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
        $this->plugin_name = plugin_basename(dirname(__FILE__, 3)).'/p5schema.php';

        $this->menu_slug = "photo_patients";

        $this->admin_pages = [
            [
                'page_title' => 'Patients page_title',
                'menu_title' => 'Before and after Patients Gallery',
                'capability' => 'manage_options',
                'menu_slug' => $this->menu_slug,
                'callback' =>  array($this, 'adminCallback'),
                'icon_url' => 'dashicons-networking',
                'position' => 110
            ]
        ];


        /*$this->admin_sub_pages = [
            [
                'parent_slug' => $this->menu_slug,
                'page_title' => 'Procedures',
                'menu_title' => 'Procedures',
                'capability' => 'manage_options',
                'menu_slug' => 'procedures',
                'callback' => array($this, 'addTaxomonies')
            ]
        ];*/
    }

    public function adminCallback(){
        echo 'page test';
    }

    public function addTaxomonies(){
        $this->add_taxonomies = new AddTaxonomies();
        $this->add_taxonomies->register();
    }
}