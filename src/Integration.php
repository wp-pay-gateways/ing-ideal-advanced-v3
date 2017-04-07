<?php

/**
 * Title: ING - iDEAL Advanced - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2017
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id            = 'ing-ideal-advanced-v3';
		$this->name          = 'ING - iDEAL Advanced (v3)';
		$this->provider      = 'ing';
		$this->product_url   = 'https://www.ing.nl/zakelijk/betalen/geld-ontvangen/ideal/';
		$this->dashboard_url = array(
			'test' => 'https://idealtest.secure-ing.com/',
			'live' => 'https://ideal.secure-ing.com/',
		);
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_ConfigFactory';
	}
}
