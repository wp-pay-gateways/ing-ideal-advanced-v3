<?php

class Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ing-ideal-advanced-v3';
		$this->name     = 'ING - iDEAL Advanced - v3';
		$this->provider = 'ing';
	}
}
