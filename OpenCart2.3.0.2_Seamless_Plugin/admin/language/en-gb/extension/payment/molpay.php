<?php
/**
 * Fiuu OpenCart Plugin
 * 
 * @package Payment Gateway
 * @author Fiuu Technical Team <technical-sa@razer.com>
 * @version 3.0
 */
 
 // Versioning
$_['molpay_ptype'] = "OpenCart";
$_['molpay_pversion'] = "3.0";

// Heading
$_['heading_title']					= 'Fiuu';

// Text
$_['text_payment']					= 'Payment';
$_['text_success']					= 'Success: You have modified Fiuu account details!';
$_['text_edit']                     = 'Edit Fiuu';
$_['text_molpay']	     			= '<a onclick="window.open(\'https://merchant.razer.com/\');" style="text-decoration:none;"><img src="view/image/payment/Fiuu_Logo.png" alt="Fiuu" title="Fiuu" width="100px"/></a>';

// Entry
$_['entry_mid']						= 'Fiuu Merchant ID';
$_['entry_vkey']					= 'Fiuu Verify Key';
$_['entry_skey']					= 'Fiuu Secret Key';
$_['entry_type']					= 'Fiuu Account Type';
$_['entry_order_status']			= 'Order Status';
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
											'hlb' 			=> 'Hong Leong Bank(HLB Connect)',
											'maybank2u' 	=> 'Maybank(Maybank2u)',
											'pbb' 			=> 'PublicBank (PBB Online)',
											'rhb' 			=> 'RHB Bank(RHB Now)',
											'fpx_mb2u' 			=> 'FPX Maybank(Maybank2u)',
											'fpx_cimbclicks' 	=> 'FPX CIMB Bank(CIMB Clicks)',
											'fpx_abb' 			=> 'FPX Affin Bank Berhad',
											'fpx_abmb' 			=> 'FPX Alliance Bank (Alliance Online)',
											'fpx_amb' 			=> 'FPX Am Bank (Am Online)',
											'fpx_bimb' 			=> 'FPX Bank Islam',
											'fpx_bkrm' 			=> 'FPX Bank Kerjasama Rakyat Malaysia',
											'fpx_bmmb' 			=> 'FPX Bank Muamalat',
											'fpx_bsn' 			=> 'FPX Bank Simpanan Nasional (myBSN)',
											'fpx_hlb' 			=> 'FPX Hong Leong Bank(HLB Connect)',
											'fpx_hsbc' 			=> 'FPX Hongkong and Shanghai Banking Corporation',
											'fpx_kfh' 			=> 'FPX Kuwait Finance House',
											'fpx_ocbc' 			=> 'FPX OCBC Bank',
											'fpx_pbb' 			=> 'FPX PublicBank (PBB Online)',
											'fpx_rhb' 			=> 'FPX RHB Bank(RHB Now)',
											'fpx_scb' 			=> 'FPX Standard Chartered Bank	',
											'fpx_uob' 			=> 'FPX United Overseas Bank (UOB)',
											'cash-711' 		=> '7-Eleven(Razer Cash)',
											'credit' 		=> 'Credit Card/ Debit Card',
											'ATMVA' 		=> 'ATM Transfer via Permata Bank',
											'dragonpay' 	=> 'Dragonpay',
											'paysbuy' 		=> 'PaysBuy',
											'Point-BCard' 	=> 'Bcard points',
											'credit3' 		=> 'Multi Currency Credit Card',
											'NGANLUONG' 	=> 'NGANLUONG',
											'crossborder' 	=> 'Credit Card/ Debit Card (PayVision)',
											'PEXPLUS' 	=> 'PEx+',
											'jompay' 	=> 'JOMPay',
											'Cash-Esapay' 	=> 'Cash Esapay',
											'alipay'		=> 'Alipay.com',
											'BOOST' 			=> 'BOOST',
											'RazerPay' 			=> 'Razer Pay',
											'MB2U_QRPay-Push' 	=> 'Maybank QRPay',
											'GrabPay' 			=> 'GrabPay',
											'TNG-EWALLET' 		=> 'Touch \'N Go',
											'WeChatPayMY' 		=> 'WeChat Pay MY',
											'ShopeePay' 		=> 'Shopee Pay'
										);

// Help
$_['help_vkey']						= 'Please refer to your Fiuu Merchant Profile for this key.';
$_['help_skey']                     = 'Please refer to your Fiuu Merchant Profile for this key.';
$_['help_type']                     = 'Please choose your account type (Sandbox/Production)';
$_['type'] = array(1=> "Production", 2=>"Sandbox");
// Error
$_['error_permission']				= 'Warning: You do not have permission to modify Fiuu!';
$_['error_mid']						= '<b>Fiuu Merchant ID</b> Required!';
$_['error_vkey']					= '<b>Fiuu Verify Key</b> Required!';
$_['error_skey']                    = '<b>Fiuu Secret Key</b> Required!';
$_['error_type']                    = '<b>Fiuu Account Type</b> Required!';
$_['error_settings']       			= 'Fiuu merchant ID and verify key mismatch, contact support-sa@razer.com for assistance.';
$_['error_status']          		= 'Unable to connect Fiuu API.';
