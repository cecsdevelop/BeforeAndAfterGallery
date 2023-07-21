<?php
/**
 * @package beforeandaftergalleryphotos
 * 
 * ADD REGISTER POST TYPE
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class AdminMenu extends BaseController
{

    public function register(){
        if(!empty($this->admin_pages)){
            add_action('admin_menu', array($this, 'addPatientsMenu'));
            add_action('admin_menu', array($this, 'addPatientsSubMenu'));
        }
    }


    public function addPages(array $pages){
        $this->admin_pages = $pages;
        return $this;
    }

    public function addPatientsMenu(){
        foreach($this->admin_pages as $page){
           add_menu_page(
                $page['page_title'],
                $page['menu_title'],
                $page['capability'],
                $page['menu_slug'],
                $page['callback'],
                $page['icon_url'],
                $page['position']
            );
        }
    }

    public function addPatientsSubMenu(){
        foreach($this->admin_sub_pages as $sub_page){
            add_submenu_page( 
                $sub_page ['parent_slug'], 
                $sub_page ['page_title'], 
                $sub_page ['menu_title'], 
                $sub_page ['capability'], 
                $sub_page ['menu_slug'], 
                $sub_page ['callback']
            );
        }
    }


    
}