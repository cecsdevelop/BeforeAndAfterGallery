<?php
/**
 * @package beforeandaftergalleryphotos
 * 
 * ADD TAXONOMIES
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class AddTaxonomies extends BaseController{
    
    public function register(){
        add_action( 'init', array($this, 'procedures_taxonomies' ));
    }

    function procedures_taxonomies() {
        $labelsProcedures = array(
            'name'              => _x( 'Procedures', 'taxonomy general name' ),
            'singular_name'     => _x( 'Procedures', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Procedures' ),
            'all_items'         => __( 'All Procedures' ),
            'parent_item'       => __( 'Parent Procedure' ),
            'parent_item_colon' => __( 'Parent Procedure:' ),
            'edit_item'         => __( 'Edit Procedure' ),
            'update_item'       => __( 'Update Procedure' ),
            'add_new_item'      => __( 'Add New Procedure' ),
            'new_item_name'     => __( 'New Procedure' ),
            'menu_name'         => __( 'Procedures' ),
        );
        $argsProcedures   = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labelsProcedures,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'public'            => true,
            'show_in_menu'      => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'rewrite'           => [ 'slug' => 'procedures' ],
            'supports'          => array( 'title', 'editor', 'comments', 'thumbnail' )
        );
        register_taxonomy( 'procedures', 'patients', $argsProcedures );
    }

}