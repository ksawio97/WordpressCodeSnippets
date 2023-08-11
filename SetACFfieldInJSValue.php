<?php
  function SetACFfieldInJSValue( $atts = [], $content = null, $tag = '' ) {
	// normalize attribute keys, lowercase
	$atts = array_change_key_case( (array) $atts, CASE_LOWER );
	$wporg_atts = shortcode_atts(
		array(
			'name' => ''
		), $atts, $tag
	);
	
	if($wporg_atts['name'] !== '')
		echo '<script> var ' . $wporg_atts['name'] . ' = "'. get_field($wporg_atts['name']) . '"</script>';
}
//adds shortcode that creates js value with name defined in call: [SetACFfieldInJSValue name="your_acf_value"]
add_shortcode( 'SetACFfieldInJSValue', 'SetACFfieldInJSValue' );
?>
