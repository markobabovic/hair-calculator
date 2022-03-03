<?php

class Hair_Calculator_Plugin {
	public function __construct() {
        add_action( "init" , array( $this , "init" ) );
        
        add_action( "add_meta_boxes" , array( $this , "add_meta_boxes" ) );
    }

    public function init() {
		$labels = array(
			'name'               => __('Calculators', 'hair-calculator'),
			'singular_name'      => __('Calculator', 'hair-calculator'),
			'menu_name'          => __('Calculators', 'hair-calculator'),
			'name_admin_bar'     => __('Calculator', 'hair-calculator'),
			'add_new'            => __('Add New', 'hair-calculator'),
			'add_new_item'       => __('Add Calculator', 'hair-calculator'),
			'new_item'           => __('New Calculator', 'hair-calculator'),
			'edit_item'          => __('Edit Calculator', 'hair-calculator'),
			'view_item'          => __('View Calculator', 'hair-calculator'),
			'all_items'          => __('All Calculators', 'hair-calculator'),
			'search_items'       => __('Search Calculators', 'hair-calculator'),
			'parent_item_colon'  => __('Parent Calculators:', 'hair-calculator'),
			'not_found'          => __('No Calculators Found.', 'hair-calculator'),
			'not_found_in_trash' => __('No Calculators Found in Trash.', 'hair-calculator')
		);

		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'show_ui'            => true,
			'menu_icon'          => 'dashicons-calculator',
			'capabilities'    => array(
			  'edit_post'          => 'publish_posts', 
			  'read_post'          => 'publish_posts', 
			  'delete_post'        => 'publish_posts', 
			  'delete_posts'       => 'publish_posts', 
			  'edit_posts'         => 'publish_posts', 
			  'edit_others_posts'  => 'publish_posts', 
			  'publish_posts'      => 'publish_posts',       
			  'read_private_posts' => 'update_core', 
			  'create_posts'       => 'publish_posts'
			),
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title' )
		);
		register_post_type( 'hair_calculator', $args );
    }

	public function add_meta_boxes() {
		global $current_user;

		add_meta_box( 'calculator_type', __('Hair Calculator Type', 'hair-calculator'), 'Core_Hair_Calculator_Plugin::meta_box', 'hair_calculator' );
		//add_meta_box( 'calculator_setup', __('Hair Calculator Setup', 'hair-calculator'), 'Core_Hair_Calculator_Plugin::meta_box', 'hair_calculator' );
	}
	
	
}