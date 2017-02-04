<?php 

if( function_exists('acf_add_local_field_group') ):
	if(!function_exists('acf_background_color')) {
		function acf_background_color($key) {
			return array (
				'key' => 'webnerds_' . $key . 'bg_color' ,
				'label' => __('Bg color', 'webnerds'),
				'name' => 'bg_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			);
		}
	}

	if(!function_exists('acf_background_color')) {
		function acf_background_color($key) {
			return array (
				'key' => 'webnerds_' . $key . '_bg_color' ,
				'label' => __('Bg color', 'webnerds'),
				'name' => 'bg_color',
				'type' => 'color_picker',
				'instructions' => '',
			);
		}
	}

	if(!function_exists('acf_background_image')) {
		function acf_background_image($key) {
			return array (
				'key' => 'webnerds_'.$key.'_background_image',
				'label' => __('Background image', 'webnerds'),
				'name' => 'background_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			);
		}
	}

	if(!function_exists('acf_section_style')) {
		function acf_section_style($key, $styles = array (
					//if you want to give the user more default styles for all layouts you may add theme here.
					'color-1' => 'color-1',
					'color-2' => 'color-2',
					'dark-1' => 'dark-1',
					'dark-2' => 'dark-2',
					'light-1' => 'light-1',
					'light-2' => 'light-2',
				)
			) {
			return array (
				'key' => 'webnerds_'.$key.'_style',
				'label' => __('Style', 'webnerds'),
				'name' => 'style',
				'type' => 'select',
				'instructions' => __('Sets the style for the section.','webnerds'),
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => $styles,
				'default_value' => array (
					'light-1' => 'light-1',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
				'disabled' => 0,
				'readonly' => 0,
				'return_format' => 'value',
			);
		}
	}

	if(!function_exists('acf_column_width')) {
		function acf_column_width($key) {
			return array (
				'key' => 'webnerds_'.$key.'_size',
				'label' => __('Size', 'webnerds'),
				'name' => 'size',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'xsmall' => 'xsmall',
					'small' => 'small',
					'medium' => 'medium',
					'large' => 'large',
					'full' => 'full',

				),
				'default_value' => array (
					0 => 'normal',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
				'disabled' => 0,
				'readonly' => 0,
				'return_format' => 'value',
			);
		}
	}

	if(!function_exists('acf_section_class')) {
		function acf_section_class($key) {
			return array (
				'key' => 'webnerds_'.$key.'_class',
				'label' => __('Section Class','webnerds'),
				'name' => 'section_class',
				'type' => 'text',
				'instructions' => __('Add attitional classes to the section (for developers).', 'webnerds'),
				'required' => 0,
				'conditional_logic' => 0,
				'maxlength' => '100',
				'readonly' => 0,
				'disabled' => 0,
			);
		}
	}	

	if(!function_exists('acf_full_width')) {
		function acf_full_width($key) {
			return array (
				'key' => 'webnerds_'.$key.'_full_width',
				'label' => __('Full width', 'webnerds'),
				'name' => 'full_width',
				'type' => 'true_false',
				'instructions' => 'Should this section expand to full width?',
				'required' => 0,
				'conditional_logic' => 0,
				'default_value' => 0,
			);
		}
	}

	$one_column = array (
		'key' => '577bc8987e9b2',
		'name' => 'one_column',
		'label' => __('One column', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array(
			acf_column_width('one_column'),
			acf_full_width('one_column'),
			acf_section_style('one_column'),
			acf_section_class('one_column'),

			array (
				'key' => 'field_577bc8c721d4a',
				'label' => __('content', 'webnerds'),
				'name' => 'content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			)
		),
		'min' => '',
		'max' => '',
	);

	$two_columns = array (
		'key' => '577bc90c21d4c',
		'name' => 'two_columns',
		'label' => __('Two columns', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_style('two_columns'),
			acf_section_class('two_columns'),
			acf_full_width('two_columns'),
			array (
				'key' => 'field_577bc92021d4d',
				'label' => __('Content left', 'webnerds'),
				'name' => 'content_left',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				'key' => 'field_577bc93721d4e',
				'label' => __('Content right', 'webnerds'),
				'name' => 'content_right',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
		),
		'min' => '',
		'max' => '',
	);

	$image_text = array (
		'key' => '577bc97521d51',
		'name' => 'image_text',
		'label' => __('Image & text', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_style('image_text'),
			acf_section_class('image_text'),
			acf_full_width('image_text'),

			array (
				'key' => 'field_577bc98321d52',
				'label' => __('Image position', 'webnerds'),
				'name' => 'image_position',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'left' => 'left',
					'right' => 'right',
					'center' => 'center',
				),
				'default_value' => array (
					0 => 'left',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
				'disabled' => 0,
				'readonly' => 0,
				'return_format' => 'value',
			),
			array (
				'key' => 'field_57b417494e99d',
				'label' => __('Image size', 'webnerds'),
				'name' => 'image_size',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'small' => 'small',
					'normal' => 'normal',
					'large' => 'large',
				),
				'default_value' => array (
					0 => 'normal',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
				'disabled' => 0,
				'readonly' => 0,
				'return_format' => 'value',
			),

			acf_background_color('image_text'),
			array (
				'key' => 'field_577bc9b721d53',
				'label' => __('Image', 'webnerds'),
				'name' => 'image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array (
				'key' => 'field_577bc9cd21d54',
				'label' => __('content', 'webnerds'),
				'name' => 'content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
		),
		'min' => '',
		'max' => '',
	);

	$image_background = array (
		'key' => '577cf6d5c66f7',
		'name' => 'image_background',
		'label' => __('Image background', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_class('image_background'),
			acf_full_width('image_background'),
			array (
				'key' => 'field_577cf6dec66f8',
				'label' => __('image', 'webnerds'),
				'name' => 'image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array (
				'key' => 'field_577cf701c66f9',
				'label' => __('Background size', 'webnerds'),
				'name' => 'background_size',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'contain' => 'contain',
					'cover' => 'cover',
				),
				'default_value' => array (
					0 => 'cover',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
				'disabled' => 0,
				'readonly' => 0,
				'return_format' => 'value',
			),
			array (
				'key' => 'field_577cf7fcef681',
				'label' => __('Min height', 'webnerds'),
				'name' => 'min_height',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 400,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
		),
		'min' => '',
		'max' => '',
	);

	$questions_and_answers = array (
		'key' => 'q_and_a_577cf6d5c66f7',
		'name' => 'q_and_a',
		'label' => __('Questions and Answers', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_class('q_and_a'),
			acf_section_style('q_and_a'),
			array (
				'key' => 'field_57ac32fa31f65',
				'label' => __('Intro','webnerds'),
				'name' => 'q_and_a_text',
				'type' => 'wysiwyg',
				'instructions' => '',
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 0,
			),
			array(
				'key' => 'field_57ac333831f66',
				'label' => __('Questions and Answers', 'webnerds'),
				'name' => 'questions_and_answers',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_57ac334c31f67',
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => __('Add question','webnerds'),
				'sub_fields' => array (
					array (
						'key' => 'field_57ac334c31f67',
						'label' => __('Question','webnerds'),
						'name' => 'question',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_57b1840f65852',
						'label' => __('Answer','webnerds'),
						'name' => 'answer',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),
				),
			)
		)
	);

	$reviews = array (
		'key' => 'reviews_webnerds',
		'name' => 'reviews',
		'label' => __('Reviews', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_style('reviews'),
			acf_section_class('reviews'),
			array (
				'key' => 'field_57ac2f517154e',
				'label' => __('Intro', 'webnerds'),
				'name' => 'reviews_text',
				'type' => 'wysiwyg',
				'instructions' => '',
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				'key' => 'field_57ac2f787154f',
				'label' => __('Quote', 'webnerds'),
				'name' => 'quotes',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => '',
				'max' => '',
				'layout' => 'row',
				'button_label' => __('Add quote','webnerds'),
				'sub_fields' => array (
					array (
						'key' => 'field_57ac2fea71551',
						'label' => __('Author', 'webnerds'),
						'name' => 'author',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_57ac2fca71550',
						'label' => __('Quote', 'webnerds'),
						'name' => 'quote',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),
					array (
						'key' => 'field_57ac300571552',
						'label' => __('Image', 'webnerds'),
						'name' => 'image',
						'type' => 'image',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
				),
			)
		)
	);

	$coworkers = array (
		'key' => 'coworkers_webnerds',
		'name' => 'coworkers',
		'label' => __('Co-workers', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_style('coworkers'),
			acf_section_class('coworkers'),
			array (
				'key' => 'coworkers_text',
				'label' => __('Intro', 'webnerds'),
				'name' => 'intro',
				'type' => 'wysiwyg',
				'instructions' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				'key' => 'coworkers_list',
				'label' => __('Co-workers', 'webnerds'),
				'name' => 'coworkers',
				'type' => 'repeater',
				'collapsed' => 'name',
				'layout' => 'row',
				'button_label' => __('Add coworker', 'webnerds'),
				'sub_fields' => array (
					array (
						'key' => 'coworkers_name',
						'label' =>  __('Name', 'webnerds'),
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
					),
					array (
						'key' => 'coworkers_title',
						'label' =>  __('Title', 'webnerds'),
						'name' => 'title',
						'type' => 'text',
						'required' => 1,
					),
					array (
						'key' => 'coworkers_email',
						'label' =>  __('Email', 'webnerds'),
						'name' => 'email',
						'type' => 'text',
						'required' => 0,
					),
					array (
						'key' => 'coworkers_phone',
						'label' =>  __('Phone', 'webnerds'),
						'name' => 'phone',
						'type' => 'text',
						'required' => 0,
					),

					array (
						'key' => 'coworkers_description',
						'label' => __('Description', 'webnerds'),
						'name' => 'description',
						'type' => 'wysiwyg',
						'required' => 0,
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),
					array (
						'key' => 'coworkers_image',
						'label' => __('Bild', 'webnerds'),
						'name' => 'image',
						'type' => 'image',
						'required' => 1,
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
			)
		)
	);

	$grid = array(
		'key' => 'grid_webnerds',
		'name' => 'grid',
		'label' => __('Grid', 'webnerds'),
		'display' => 'block',
		'sub_fields' => array (
			acf_section_style('grid'),
			acf_section_class('grid'),
			acf_full_width('grid'),
			array (
				'key' => 'field_580539a615b3d',
				'label' => 'Intro',
				'name' => 'intro',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				'key' => 'webnerds_grid_columns',
				'label' => __('Columns', 'webnerds'),
				'name' => 'columns',
				'type' => 'select',
				'instructions' => __('Sets the number of items per row in the grid.','webnerds'),
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
						2 => 2,
						3 => 3,
						4 => 4
					),
				'return_format' => 'value',
			),
			array (
				'key' => 'field_580539be15b3e',
				'label' => 'Grid items',
				'name' => 'grid_items',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_580539d215b3f',
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => 'Add item',
				'sub_fields' => array (
					array (
						'key' => 'field_580539d215b3f',
						'label' => 'Content',
						'name' => 'content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 0,
					),
					array (
						'key' => 'field_58053a0215b40',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array (
						'key' => 'field_58053a1b15b41',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'text',
						'instructions' => 'Clicking the grid item would lead the user to this link.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		)
	);



	acf_add_local_field_group(array (
		'key' => 'group_577bc886da000',
		'title' => 'Flex Content',
		'fields' => array (
			array (
				'key' => 'field_577bc89021d49',
				'label' => __('Flex content', 'webnerds'),
				'name' => 'flex_content',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'button_label' => __('Add section', 'webnerds'),
				'min' => '',
				'max' => '',
				'layouts' => array (
					$one_column,
					$two_columns,
					$image_text,
					$image_background,
					$questions_and_answers,
					$reviews,
					$coworkers,
					$grid
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page_templates/flexible-content.php',
				),
			)
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'the_content',
		),
		'active' => 1,
		'description' => '',
	));


endif;