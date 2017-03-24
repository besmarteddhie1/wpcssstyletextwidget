<?php

/*
  Plugin Name: Emerlard Packages helpers
  Plugin URI:
  Description: only widget text first
  Version: 0.0.1
  Author: eddhie
  Author URI:
  License: GPLv2
 */



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//todo:how to use namespace in wordpress
//namespace com_emerlard_wordpress_component;

/**
 * Description of WP_Widget_CSS_Text
 *
 * @author eddhie
 */
//start includes of what is needed
//todo: check existance on deployed wordpress

if ( class_exists( 'WP_Widget_Text' ) ) {
	
} else {
	include ABSPATH . WPINC . '/widgets/class-wp-widget-text.php';
}



//the packet from emerlard corp.
//todo:does we need this still since I was following the worpress cookbook?
//thanks for the writer of the book
function emerlard_packet() {
	$widget_options = Array(
		'classname' => 'WP_Widget_CSS_Text',
		'description' => 'WP_Widget with CSS text'
	);
	$this->WP_Widget( 'WP_Widget_CSS_Text', $widget_options, '' );
	dynamic_sidebar();
}


//init function
function emerlard_packet_init() {
	register_widget( 'WP_Widget_CSS_Text' );
}


//assign the init of widget hook
add_action( 'widgets_init', 'emerlard_packet_init' );


/*
 * start of the class
 * @author eddhie
 * this have adding a property of css or more preciely text to the widget text
 */
class WP_Widget_CSS_Text extends WP_Widget_Text {

	private function setupbase( $id_base, $name, $widget_options = array(), $control_options = array() ) {
		$this->id_base = empty( $id_base ) ? preg_replace( '/(wp_)?widget_/', '', strtolower( get_class( $this ) ) ) : strtolower( $id_base );
		$this->name = $name;
		$this->option_name = 'widget_' . $this->id_base;
		$this->widget_options = wp_parse_args( $widget_options, array( 'classname' => $this->option_name, 'customize_selective_refresh' => false ) );
		$this->control_options = wp_parse_args( $control_options, array( 'id_base' => $this->id_base ) );
	}

	function __construct() {
		$widget_ops = array(
			'classname' => 'WP_Widget_CSS_Text',
			'description' => __( 'Arbitrary text or HTML With CSS Style WP_Widget with CSS text' ),
			'customize_selective_refresh' => true,
		);
		$control_ops = array( 'width' => 400, 'height' => 350 );

		$this->setupbase( '', __( 'CSS Style Text' ), $widget_ops, $control_ops );
	}

	
	
	public function form( $instance ) {
		parent::form( $instance );
		$CSSStyle = sanitize_text_field( $instance['CSSStyle'] );
		include 'resource/widget_round_property_form_resource.php';
	}

	//todo:should i check more on the cssstyle field?
	public function update( $new_instance, $old_instance ) {
		$instance=parent::update( $new_instance, $old_instance );
		$instance['CSSStyle'] = $new_instance['CSSStyle'];
		return $instance;
	}

	public function widget( $args, $instance ) {

//The items of the event of the one taht is working with the items whtat is work is impornatntent
//That we create the items tath is workign appropirately. In this sense I guess that the WP_widget_text 
//have event system of the item of the widget_text filter is only on the text item that is 
//represented
//start by using handler to filter
//add_filter('widget_text', 'thefunctiontoadd',10,3);
//=================================
		
		//start the temp nested buffer
		ob_start( null, null, PHP_OUTPUT_HANDLER_CLEANABLE + PHP_OUTPUT_HANDLER_REMOVABLE );
		parent::widget( $args, $instance );
		$temp_output = ob_get_contents();

		//todo: domdocument constructor utiliztion direct?
		$mdom = new DOMDocument();
		$mdom->loadHTML( $temp_output );
		$mdomnode = $mdom->getElementsByTagName( 'div' );
		//todo: what about adding class
		//todo: what aobut style already exist
		//set the domelement for the Domnode gotten
		$mdomnode->item( 0 )->setAttribute( 'style', $instance[CSSStyle] );
		//kill buffer nested	
		ob_end_clean();
		//conclude result
		//domdoucment is representation of domojbect in the moreory it is not html thus we need to save the html from it
		//very interesting dom concept including the xml?
		echo $mdom->saveHTML();
	}

}
