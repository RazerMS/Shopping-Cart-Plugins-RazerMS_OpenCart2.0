<?php
/**
 * MOLPay OpenCart Plugin
 * 
 * @package Payment Gateway
 * @author MOLPay Technical Team <technical@molpay.com>
 * @version 2.0
 */
 
 // Versioning
$_['molpay_ptype'] = "OpenCart";
$_['molpay_pversion'] = "2.0";

// Heading
$_['heading_title']					= 'MOLPay Malaysia Online Payment Gateway';

// Text
$_['text_payment']					= 'Payment';
$_['text_success']					= 'Success: You have modified MOLPay Malaysia Online Payment Gateway account details!';
$_['text_edit']                     = 'Edit MOLPay';
$_['text_molpay']	     			= '<a onclick="window.open(\'http://www.molpay.com/\');" style="text-decoration:none;"><img src="view/image/payment/molpay-logo.jpg" alt="MOLPay Online Payment Gateway" title="MOLPay Malaysia Online Payment Gateway" style="border: 0px solid #EEEEEE;" height=63 width=198/></a>';

// Entry
$_['entry_mid']						= 'MOLPay Merchant ID';
$_['entry_vkey']					= 'MOLPay Verify Key';
$_['entry_order_status']			= 'Order Status';
$_['entry_completed_status']		= 'Completed Status';
$_['entry_pending_status']			= 'Pending Status';
$_['entry_failed_status']			= 'Failed Status';
$_['entry_geo_zone']				= 'Geo Zone';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'Sort Order';

// Help
$_['help_vkey']						= 'Please refer to your MOLPay Merchant Profile for this key.';

// Error
$_['error_permission']				= 'Warning: You do not have permission to modify MOLPay Malaysia Online Payment Gateway!';
$_['error_mid']						= '<b>MOLPay Merchant ID</b> Required!';
$_['error_vkey']					= '<b>MOLPay Verify Key</b> Required!';
$_['error_settings']       			= 'MOLPay merchant id and verify key mismatch, contact support@molpay.com to assist.';
$_['error_status']          		= 'Unable to connect MOLPay API.';