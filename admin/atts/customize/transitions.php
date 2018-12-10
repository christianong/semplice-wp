<?php

// -----------------------------------------
// semplice
// admin/atts/customize/transitions.php
// -----------------------------------------

$transitions = array(
	'tabs' => array(
		'options' => array(
			'preview-transition' => array(
				'title' => 'Preview',
				'hide-title'	=> true,
				'break'	=> '1',
				'preview' => array(
					'title'				=> 'Preview',
					'hide-title'		=> true,
					'size'				=> 'span4',
					'data-input-type'	=> 'button',
					'button-title'		=> 'Preview Transition',
					'class'				=> 'admin-listen-handler semplice-button',
					'data-handler'  	=> 'transitions',
				),
			),
			'background' => array(
				'title' => 'Browser Background Color',
				'break'	=> '1',
				'background-color' => array(
					'title'			=> 'Color',
					'hide-title' 	=> true,
					'help'			=> 'The default browser background color is white (browser default). To avoid that you can see the default white in between some page transitions you can change the default browser background color here.',
					'size'			=> 'span4',
					'data-input-type'	=> 'color',
					'default'		=> 'transparent',
					'class'			=> 'color-picker admin-listen-handler',
					'data-handler'  => 'colorPicker',
					'data-picker'	=> 'transitions',
				),
			),
			'select_preset' => array(
				'title' => 'Transition Options',
				'break' => '1,2',
				'status' => array(
					'data-input-type' 			=> 'switch',
					'help'						=> 'Select \'Disabled\' to show no transitions at all. (except your content editor motions)',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Status',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'  			=> 'transitions',
					'data-visibility-switch' 	=> true,
					'data-visibility-values' 	=> 'enabled,disabled',
					'data-visibility-prefix'	=> 'ov-status',
					'default' 	 				=> 'disabled',
					'switch-values' => array(
						'enabled'	 		=> 'Enabled',
						'disabled'  		=> 'Disabled',
					),
				),
				'preset' => array(
					'title'				=> 'Preset',
					'size'				=> 'span4',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'style-class'		=> 'ov-status-enabled',
					'select-box-values' => array(
						'fade'			=> 'Fade',
						'rightToLeft'	=> 'Right to Left',
						'leftToRight'	=> 'Left to Right',
						'topToBottom'	=> 'Top to Bottom',
						'bottomToTop'	=> 'Bottom to Top',
					),
				),
			),
			'out_transition' => array(
				'title' 		=> 'Content Out Transition',
				'break' 		=> '2',
				'style-class'	=> 'ov-status-enabled',
				'duration_out' => array(
					'title'				=> 'Duration',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 800,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 1000,
					'data-range-slider' => 'transitions',
				),
				'easing_out' => array(
					'title'				=> 'Easing',
					'size'				=> 'span3',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'select-box-values' => $easings,
				),
			),
			'in_transition' => array(
				'title' 		=> 'Content in Transition',
				'break'		 	=> '2',
				'style-class'	=> 'ov-status-enabled',
				'duration_in' => array(
					'title'				=> 'Duration',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 800,
					'min'				=> 0,
					'max'				=> 9999,
					'data-divider'		=> 1000,
					'data-range-slider' => 'transitions',
				),
				'easing_in' => array(
					'title'				=> 'Easing',
					'size'				=> 'span3',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'select-box-values' => $easings,
				),
			),
		),
		'scroll_reveal' => array(
			'options' => array(
				'title' => 'Options',
				'break' => '2,2,2,1',
				'hide-title' => true,
				'sr_viewFactor' => array(
					'title'				=> 'View factor (%)',
					'help'				=> 'Change when an element is considered in the viewport. Once an element is in the viewport of your browser it gets faded in. Default is 20%<br /><br />Please be aware that a section only gets displayed once its n% (the value you defined) visible in the browser viewport so to be safe a lower value is better here. Maximum is 50%.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 20,
					'min'				=> 1,
					'max'				=> 50,
					'data-divider'		=> 100,
					'data-range-slider' => 'transitions',
				),
				'sr_distance' => array(
					'title'				=> 'Distance',
					'help'				=> 'Define the distance the content should slide up while the \'reveal\' transitions runs.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'transitions',
				),
				'sr_easing' => array(
					'title'				=> 'Easing',
					'size'				=> 'span2',
					'data-input-type'	=> 'select-box',
					'class'				=> 'admin-listen-handler',
					'data-handler'  	=> 'transitions',
					'default'			=> 'ease-out',
					'select-box-values' => array(
						'ease-out'		=> 'ease-out',
						'ease'			=> 'ease',
						'linear'		=> 'linear',
						'ease-in'		=> 'ease-in',
						'ease-in-out'   => 'ease-in-out',
					),
				),
				'sr_duration' => array(
					'title'				=> 'Duration',
					'help'				=> 'Define the duration of your \'reveal\' transition',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 700,
					'min'				=> 0,
					'max'				=> 9999,
					'data-range-slider' => 'transitions',
				),
				'sr_opacity' => array(
					'title'				=> 'Opactiy',
					'help'				=> 'Define starting opacity of your content before the \'reveal\' transition starts. Example: 80% means that the opacity of your content will fade from 80% to 100% while the duration of the transition.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 0,
					'min'				=> 0,
					'max'				=> 100,
					'data-divider'		=> 100,
					'data-range-slider' => 'transitions',
				),
				'sr_scale' => array(
					'title'				=> 'Scale',
					'help'				=> 'Define starting scale of your content before the \'reveal\' transition starts. Example: 80% means that your content will get scaled from 80% to 100% while the duration of the transition.',
					'size'				=> 'span2',
					'offset'			=> false,
					'data-input-type' 	=> 'range-slider',
					'class'				=> 'admin-listen-handler',
					'data-handler'		=> 'transitions',
					'default'			=> 100,
					'min'				=> 0,
					'max'				=> 100,
					'data-divider'		=> 100,
					'data-range-slider' => 'transitions',
				),
				'sr_mobile' => array(
					'data-input-type' 			=> 'switch',
					'help'						=> 'Select \'Enabled\' to enable scroll reveal on mobile devices.<br /><br />Please note that big sections can cause problems on mobile if your \'View Factor\' is to high.<br /><br />If you experience problems please set this to \'Disabled\' again.',
					'switch-type'				=> 'twoway',
					'title'		 				=> 'Scroll reveal on mobile',
					'size'		 				=> 'span4',
					'class'						=> 'admin-listen-handler',
					'data-handler'  			=> 'transitions',
					'default' 	 				=> 'false',
					'switch-values' => array(
						'true'	 		=> 'Enabled',
						'false'  		=> 'Disabled',
					),
				),
			),
		),
	),
);