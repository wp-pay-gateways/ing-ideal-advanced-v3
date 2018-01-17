<?php

/**
 * Title: ING - iDEAL Advanced - v3 - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Config();

		$expected = 'https://ideal.secure-ing.com/ideal/iDEALv3';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}

	public function test_certificates() {
		$config = new Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Config();

		$certificates = $config->get_certificates();

		foreach ( $certificates as $certificate ) {
			$this->assertFileExists( $certificate );
		}
	}
}
