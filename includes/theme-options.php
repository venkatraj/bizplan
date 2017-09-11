<?php
require_once get_template_directory() . '/includes/options-config.php';
require_once get_template_directory() . '/admin/control-icon-picker.php';

	if( ! class_exists('BizPlan_Customizer_API_Wrapper') ) {
			require_once get_template_directory() . '/admin/class.bizplan-customizer-api-wrapper.php';
	}


BizPlan_Customizer_API_Wrapper::getInstance($options);
