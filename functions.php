<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$range_low = '2017-01-01';
$range_high = '2017-08-10';


function get_orders_by_date_range($date_min, $date_max)
{
	$woocommerce = new Client(
	    'https://peopleacuity.com',
	    'ck_8699577712daa9a068f98745fdb52214a42f9ec5',
	    'cs_3e447df31c9f6a015210815d7ed25f7132d77618',
	    [
	        'wp_api' => true,
	        'version' => 'wc/v2',
	        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
	    ]
	    );

	$query = ['date_min' => $date_min, 'date_max' => $date_max];

	// print_r($woocommerce->get('reports/sales', $query));
	print_r($woocommerce->get('orders'));
}

get_orders_by_date_range($range_low, $range_high);

?>
