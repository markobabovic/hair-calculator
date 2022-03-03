<?php


class Core_Hair_Calculator_Plugin {
	public function __construct() {
        add_action( "init" , array( $this , "init" ) );   

		add_shortcode( "hair_calculator" , array( $this , "shortcode" ) );
		
		add_action( "save_post" , array( $this , "save_post" ));

		add_filter( 'manage_hair_calculator_posts_columns', array( $this, 'hair_calculator_columns' ) );
		add_action( 'manage_hair_calculator_posts_custom_column' , array( $this, 'hair_calculator_columns_content' ), 10, 2 );		
    }

    public function init() {
        
    }

	public static function meta_box( $post, $metabox ) {

		$metabox_template_path = HAIR_PLUGIN_DIR . "/includes/templates/metaboxes/metabox_" . $metabox["id"] . ".php";

		if( file_exists( $metabox_template_path ) ) :

			include $metabox_template_path;

		endif;

	}
	
	public function save_post( $post_id ) {
		
		if (defined('DOING_AJAX') && DOING_AJAX)  return;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		if( !is_admin() ) return;

		if (!isset($_POST['metabox_noncename'])) return;

		if (!wp_verify_nonce($_POST['metabox_noncename'], "metabox".$post_id)) {
			return;
		}
		
		switch( get_post_type( $post_id ) ) :

			case "hair_calculator" :

				$Calculator = new Hair_Calculator( $post_id );

				$Calculator->set_calculator_type( sanitize_text_field( $_POST['calculator_type'] ?? '' ) );

			break;


		endswitch;
	}
	
	public function shortcode( $atts ) {
		$output = "";
		$Hair_Calculator = new Hair_Calculator( $atts["id"] );
		
		if( isset( $atts["id"] ) ) :

			$calculator = (!empty(get_post( $atts["id"] ))) ? get_post( $atts["id"] ) : "";

			if( !empty($calculator) && $calculator->post_type === "hair_calculator" ) :

				ob_start();			

				if(get_post_status($calculator->ID) == "publish") {
					include HAIR_PLUGIN_DIR . "/includes/shortcode.php";
				}

				$output .= ob_get_clean();

			endif;

		endif;

		return $output;
	}
	
	public function hair_calculator_columns( $columns ) {
		global $current_user;

		unset( $columns["date"] );

		$columns["shortcode"] = "Shortcode";

		return $columns;
	}	

	public function hair_calculator_columns_content( $column, $post_id ){

		switch( $column ) :

			case "shortcode" :

				printf(
					"<code>[hair_calculator id=\"%s\"]</code>",
					$post_id
				);

			break;

		endswitch;
	}
	
}