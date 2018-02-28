<?php


require(get_template_directory().'/inc/codestar-framework/cs-framework.php');

// framework options filter example
function industry_cs_framework_options( $options ) {

  $options      = array(); // remove old options

  $options[]    = array(
    'id'      => 'industry_slide_meta',
    'title'     => 'Slide Options',        
    'post_type' => 'industry-slide',
	'context'   => 'normal',
	'priority'  => 'default',
    'sections'    => array(
      array(
        'name'    => 'industry_slide_metabox',
        'title' => 'Slide Options',
        'fields' => array(
        // begin: a field
        array(
          'id'    => 'text_color',
          'type'  => 'color_picker',
          'title' => 'Slider text color',
          'default' => '#2ecc71',
        ),
        // end: a field
        array(
          'id'    => 'enable_overlay',
          'type'  => 'switcher',
          'title' => 'Overlay Oprion',
          'default' => 'false',
        ),
        // end: a field  
        array(
          'id'    => 'overlay_color',
          'type'  => 'color_picker',
          'title' => 'Overlay Color',
          'desc' => 'Type a Overlay Color',
          'default' => '#333',
          'dependency' => array( 'enable_overlay', '==', 'true' ) // dependency rule
        ),
        // end: a field 
        array(
          'id'    => 'overlay_opacity',
          'type'  => 'number',
          'title' => 'Overlay Opacity',
          'desc' => 'Type a Opacity number',
          'default' => '70',
          'dependency' => array( 'enable_overlay', '==', 'true' ) // dependency rule
        ),
        // end: a field       
      )
      )     
    )
  );  


  $options[]    = array(
    'id'      => 'industry_page_meta',
    'title'     => 'Page Options',        
    'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
    'sections'    => array(
      array(
        'name'    => 'industry_page_metabox',
        'title' => 'Page Options',
        'fields' => array(
        // begin: a field
        array(
          'id'    => 'enable_title',
          'type'  => 'switcher',
          'title' => 'Enable Page Title',
          'default' => 'false',
        ),
        // end: a field  
        array(
          'id'    => 'custom_title',
          'type'  => 'textarea',
          'title' => 'Add Page custom Title',          
          'dependency' => array( 'enable_title', '==', 'true' ) 
        ),
        // end: a field      
              
      )
      )     
    )
  );

  return $options;

}
add_filter( 'cs_metabox_options', 'industry_cs_framework_options' );

