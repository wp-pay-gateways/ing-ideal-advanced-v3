<?php

/**
 * Title: ING - iDEAL Advanced - v3 config
 * Description:
 * Copyright: Copyright (c) 2005 - 2017
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.3
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealAdvancedV3_Config extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config {
	public function get_payment_server_url() {
		return 'https://ideal.secure-ing.com/ideal/iDEALv3';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/ingbank-2022.cer',
			dirname( __FILE__ ) . '/../certificates/ingbank-2017.cer',
		);
	}
}
