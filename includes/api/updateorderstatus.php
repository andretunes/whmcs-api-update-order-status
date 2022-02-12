<?php
/**
 *	Update Order Status WHMCS API version 1.0
 *
 *	@package     WHMCS
 *	@copyright   Andrezzz
 *	@link        https://www.andrezzz.pt
 *	@author      André Antunes <andreantunes@andrezzz.pt>
 */

use WHMCS\Database\Capsule;

if (!defined('WHMCS')) {
  exit(header('Location: https://www.andrezzz.pt'));
}

$order = Capsule::table('tblorders')->where('id', $orderid)->value('id');
$orderStatuses = Capsule::table('tblorderstatuses')->pluck('title')->toArray();

if (!$order) {
    $apiresults = array('result' => 'error', 'message' => 'Order ID not found');
} else {
    if (in_array($orderstatus, $orderStatuses)) {
        Capsule::table('tblorders')->where('id', $orderid)->update(['status' => $orderstatus]);

        $apiresults = array('result' => 'success');
    } else {
        $apiresults = array('result' => 'error', 'message' => 'Order Status not found');
    }
}
