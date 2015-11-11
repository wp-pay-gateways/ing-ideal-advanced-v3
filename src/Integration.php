<?php

class Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Integration {
	public function __construct() {
		$this->id       = 'ing-ideal-advanced-v3';
		$this->name     = 'ING - iDEAL Advanced - v3';
		$this->provider = 'ing';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Gateway';
	}
}
