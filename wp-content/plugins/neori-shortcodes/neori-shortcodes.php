<?php

/*
Plugin Name: Neori Shortcodes
Plugin URI: http://litmotion.net
Description: Bunch of shortcodes.
Version: 1.0
Author: litMotion
*/



/* Featured */

function neori_carousel() {

	ob_start();
	get_template_part( 'template-parts/carousel' );
	return ob_get_clean();

}

add_shortcode( 'carousel', 'neori_carousel' );



/* Slice Type 1 */

function neori_slice_type1() {

	ob_start();
	get_template_part( 'template-parts/slices/type1' );
	return ob_get_clean();

}

add_shortcode( 'slice_type1', 'neori_slice_type1' );


function neori_slice_type1_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type1-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type1_instance2', 'neori_slice_type1_instance2' );


function neori_slice_type1_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type1-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type1_instance3', 'neori_slice_type1_instance3' );



/* Slice Type 2 */

function neori_slice_type2() {

	ob_start();
	get_template_part( 'template-parts/slices/type2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type2', 'neori_slice_type2' );


function neori_slice_type2_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type2-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type2_instance2', 'neori_slice_type2_instance2' );


function neori_slice_type2_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type2-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type2_instance3', 'neori_slice_type2_instance3' );



/* Slice Type 3 */

function neori_slice_type3() {

	ob_start();
	get_template_part( 'template-parts/slices/type3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type3', 'neori_slice_type3' );


function neori_slice_type3_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type3-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type3_instance2', 'neori_slice_type3_instance2' );


function neori_slice_type3_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type3-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type3_instance3', 'neori_slice_type3_instance3' );



/* Slice Type 4 */

function neori_slice_type4() {

	ob_start();
	get_template_part( 'template-parts/slices/type4' );
	return ob_get_clean();

}

add_shortcode( 'slice_type4', 'neori_slice_type4' );


function neori_slice_type4_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type4-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type4_instance2', 'neori_slice_type4_instance2' );


function neori_slice_type4_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type4-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type4_instance3', 'neori_slice_type4_instance3' );



/* Slice Type 5 */

function neori_slice_type5() {

	ob_start();
	get_template_part( 'template-parts/slices/type5' );
	return ob_get_clean();

}

add_shortcode( 'slice_type5', 'neori_slice_type5' );


function neori_slice_type5_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type5-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type5_instance2', 'neori_slice_type5_instance2' );


function neori_slice_type5_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type5-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type5_instance3', 'neori_slice_type5_instance3' );



/* Slice Type 6 */

function neori_slice_type6() {

	ob_start();
	get_template_part( 'template-parts/slices/type6' );
	return ob_get_clean();

}

add_shortcode( 'slice_type6', 'neori_slice_type6' );


function neori_slice_type6_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type6-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type6_instance2', 'neori_slice_type6_instance2' );


function neori_slice_type6_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type6-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type6_instance3', 'neori_slice_type6_instance3' );



/* Slice Type 7 */

function neori_slice_type7() {

	ob_start();
	get_template_part( 'template-parts/slices/type7' );
	return ob_get_clean();

}

add_shortcode( 'slice_type7', 'neori_slice_type7' );


function neori_slice_type7_instance2() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type7-instance2' );
	return ob_get_clean();

}

add_shortcode( 'slice_type7_instance2', 'neori_slice_type7_instance2' );


function neori_slice_type7_instance3() {

	ob_start();
	get_template_part( 'template-parts/slices/additional-instances/type7-instance3' );
	return ob_get_clean();

}

add_shortcode( 'slice_type7_instance3', 'neori_slice_type7_instance3' );


function neori_more_from_this_author() {

	ob_start();
	get_template_part( 'template-parts/more-from-this-author' );
	return ob_get_clean();

}

add_shortcode( 'more_from_this_author', 'neori_more_from_this_author' );



?>