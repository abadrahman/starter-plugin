<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       {{plugin.uri}}
 * @since      1.0.0
 *
 * @package    {{plugin.package}}
 * @subpackage {{plugin.package}}/admin/partials
 */
?>

<?php

function {{plugin.prefix}}_add_local_field_groups() {

    $options = array(
        //Defaults
        array( 'key' => '{{plugin.slug}}-text' , 'label' => 'text', 'name' => 'text', 'type' => 'text', 'placeholder' => ''),
//        array( 'key' => '{{plugin.slug}}-textarea' , 'label' => 'textarea', 'name' => 'textarea', 'type' => 'textarea', 'placeholder' => '', 'rows' => 4 ,'new_lines' => 'wpautop'),
//        array( 'key' => '{{plugin.slug}}-wysiwyg' , 'label' => 'wysiwyg', 'name' => 'wysiwyg', 'type' => 'wysiwyg', 'placeholder' => '', 'rows' => 4 ),
//        array( 'key' => '{{plugin.slug}}-image' , 'label' => 'image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url',),
//        array( 'key' => '{{plugin.slug}}-true-false', 'default_value' => 1,'message' => '', 'label' => '','name' => '','instructions' => 'Straight to checkout','type' => 'true_false', 'ui' => 1, 'ui_on_text' => '', 'ui_off_text' => '','required' => 0,)
    );

    $fields = array();
    $field = array();
    foreach ($options as $option){
        foreach ($option as $key => $value){
            $field[$key] = $value;
        }
        $fields[] = $field;

    }

	if( function_exists('acf_add_local_field_group') ) {
		acf_add_local_field_group( array(
			'key'      => '{{plugin.slug}}-setting-page-group',
			'title'    => '{{plugin.menu_title}}',
			'fields'   => array( $fields ),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => '{{plugin.slug}}',
					),
				),
			),
		) );
	}



}

/**
 * Run after the options page hook
 */
add_action('admin_menu', '{{plugin.prefix}}_add_local_field_groups', 90);


?>