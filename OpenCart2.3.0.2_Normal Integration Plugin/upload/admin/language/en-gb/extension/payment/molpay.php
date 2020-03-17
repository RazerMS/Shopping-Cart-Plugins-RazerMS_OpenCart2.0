<?php
/**
 * Razer Merchant Services OpenCart Plugin
 *
 * @package Payment Gateway
 * @author Razer Merchant Services Technical Team <technical-sa@razer.com>
 * @version 3.0
 */

 // Versioning
$_['molpay_ptype'] = "OpenCart";
$_['molpay_pversion'] = "3.0";

// Heading
$_['heading_title']                                     = 'Razer Merchant Services';

// Text
$_['text_payment']                                      = 'Payment';
$_['text_success']                                      = 'Success: You have modified Razer Merchant Services account details!';
$_['text_edit']                     = 'Edit Razer Merchant Services';
$_['text_molpay']                   = '<a onclick="window.open(\'https://merchant.razer.com/\');" style="text-decoration:none;"><img src="view/image/payment/logo_RazerMerchantServices.png" alt="Razer Merchant Services" title="Razer Merchant Services" width="100px"/></a>';


// Entry
$_['entry_mid']                                         = 'Razer Merchant Services Merchant ID';
$_['entry_vkey']                                        = 'Razer Merchant Services Verify Key';
$_['entry_skey']                                        = 'Razer Merchant Services Secret Key';
$_['entry_type']                                        = 'Razer Merchant Services Account Type';
$_['entry_order_status']                        = 'Order Status';
$_['entry_completed_status']            = 'Completed Status';
$_['entry_pending_status']                      = 'Pending Status';
$_['entry_failed_status']                       = 'Failed Status';
$_['entry_geo_zone']                            = 'Geo Zone';
$_['entry_status']                                      = 'Status';
$_['entry_sort_order']                          = 'Sort Order';

// Help
$_['help_vkey']                                         = 'Please refer to your Razer Merchant Services Merchant Profile for this key.';
$_['help_skey']                                         = 'Please refer to your Razer Merchant Services Merchant Profile for this key.';
$_['help_type']                                         = 'Please choose your account type (Sandbox/Production)';
$_['type'] = array(1=> "Production", 2=>"Sandbox");
// Error
$_['error_permission']                          = 'Warning: You do not have permission to modify Razer Merchant Services!';
$_['error_mid']                                         = '<b>Razer Merchant Services Merchant ID</b> Required!';
$_['error_vkey']                                        = '<b>Razer Merchant Services Verify Key</b> Required!';
$_['error_skey']                                        = '<b>Razer Merchant Services Secret Key</b> Required!';
$_['error_type']                                        = '<b>Razer Merchant Services Account Type</b> Required!';
$_['error_settings']                            = 'Razer Merchant Services merchant ID and verify key mismatch, contact support-sa@razer.com for assistance.';
$_['error_status']                      = 'Unable to connect Razer Merchant Services API.';
