<?php

/**
 * Title: ING - iDEAL Advanced - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ing-ideal-advanced-v3';
		$this->name     = 'ING - iDEAL Advanced - v3';
		$this->provider = 'ing';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_ConfigFactory';
	}
}
