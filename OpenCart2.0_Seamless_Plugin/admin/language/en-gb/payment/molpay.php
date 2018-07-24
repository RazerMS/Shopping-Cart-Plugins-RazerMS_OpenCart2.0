<?php
/**
 * MOLPay OpenCart Plugin
 * 
 * @package Payment Gateway
 * @author MOLPay Technical Team <technical@molpay.com>
 * @version 2.0.1
 */
 
 // Versioning
$_['molpay_ptype'] = "OpenCart";
$_['molpay_pversion'] = "2.0.1";

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
$_['entry_skey']					= 'MOLPay Secret Key';
$_['entry_type']                    = 'MOLPay Account Type';
$_['entry_completed_status']		= 'Completed Status';
$_['entry_pending_status']			= 'Pending Status';
$_['entry_failed_status']			= 'Failed Status';
$_['entry_geo_zone']				= 'Geo Zone';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'Sort Order';

// Channel
$_['channel_list']					= 	array(
											'affinonline' 	=> 'Affin Bank(Affin Online)',
											'amb' 			=> 'Am Bank (Am Online)',
											'bankislam' 	=> 'Bank Islam',
											'cimbclicks' 	=> 'CIMB Bank(CIMB Clicks)',
											'fpx' 			=> 'MyClear FPX',
											'hlb' 			=> 'Hong Leong Bank(HLB Connect)',
											'maybank2u' 	=> 'Maybank(Maybank2u)',
											'pbb' 			=> 'PublicBank (PBB Online)',
											'rhb' 			=> 'RHB Bank(RHB Now)',
											'molwallet' 	=> 'MOLWallet',
											'cash-711' 		=> '7-Eleven(MOLPay Cash)',
											'credit' 		=> 'Credit Card/ Debit Card',
											'ATMVA' 		=> 'ATM Transfer via Permata Bank',
											'dragonpay' 	=> 'Dragonpay',
											'paysbuy' 		=> 'PaysBuy',
											'Point-BCard' 	=> 'Bcard points',
											'credit3' 		=> 'Multi Currency Credit Card',
											'NGANLUONG' 	=> 'NGANLUONG',
											'crossborder' 	=> 'Credit Card/ Debit Card (PayVision)',
											'PEXPLUS' 		=> 'PEx+',
											'jompay' 		=> 'JOMPay',
											'Cash-Esapay' 	=> 'Cash Esapay',
											'alipay'		=> 'Alipay.com'
										);

// Help
$_['help_vkey']						= 'Please refer to your MOLPay Merchant Profile for this key.';
$_['help_skey']                     = 'Please refer to your MOLPay Merchant Profile for this key.';
$_['help_type']                     = 'Please choose your account type (Sandbox/Production)';
$_['type'] 							= array(1=> "Production", 2=>"Sandbox");

// Error
$_['error_permission']				= 'Warning: You do not have permission to modify MOLPay Malaysia Online Payment Gateway!';
$_['error_mid']						= '<b>MOLPay Merchant ID</b> Required!';
$_['error_vkey']					= '<b>MOLPay Verify Key</b> Required!';
$_['error_skey']					= '<b>MOLPay Secret Key</b> Required!';
$_['error_type']					= '<b>MOLPay Account Type</b> Required!';
$_['error_settings']       			= 'MOLPay merchant id and verify key mismatch, contact support@molpay.com to assist.';
$_['error_status']          		= 'Unable to connect MOLPay API.';
