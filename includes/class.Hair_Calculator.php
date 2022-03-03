<?php

class Hair_Calculator
{
    private $post_id;

    public function __construct( $post_id )
    {
        $this->post_id = $post_id;
    }

    private function get_meta( $meta_key )
    {
        return get_post_meta( $this->post_id, '_' . $meta_key, true );
    }

    private function set_meta( $meta_key, $value )
    {
        update_post_meta( $this->post_id, '_' . $meta_key, $value );
    }

    public function get_calculator_type()
    {
        return $this->get_meta( 'calculator_type' );
    }

    public function set_calculator_type( $value )
    {
        return $this->set_meta( 'calculator_type', $value );
    }

}