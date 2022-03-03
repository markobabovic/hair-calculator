<?php
    $calculator_type = get_post_meta( $calculator->ID, "_calculator_type" , true );
    require_once(HAIR_PLUGIN_DIR.'/includes/templates/calculator_types/'.$calculator_type.'.php');                        
?>

