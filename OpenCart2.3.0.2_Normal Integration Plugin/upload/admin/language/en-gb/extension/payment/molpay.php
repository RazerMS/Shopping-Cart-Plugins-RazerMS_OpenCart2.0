<?php
/**
 * Fiuu OpenCart Plugin
 *
 * @package Payment Gateway
 * @author Fiuu Technical Team <technical-sa@fiuu.com>
 * @version 3.0
 */

 // Versioning
$_['molpay_ptype'] = "OpenCart";
$_['molpay_pversion'] = "3.0";

// Heading
$_['heading_title']                                     = 'Fiuu';

// Text
$_['text_payment']                                      = 'Payment';
$_['text_success']                                      = 'Success: You have modified Fiuu account details!';
$_['text_edit']                     = 'Edit Fiuu';
$_['text_molpay']                   = '<a onclick="window.open(\'https://merchant.razer.com/\');" style="text-decoration:none;"><img src="view/image/payment/Fiuu_Logo.png" alt="Fiuu" title="Fiuu" width="100px"/></a>';


// Entry
$_['entry_mid']                                         = 'Fiuu Merchant ID';
$_['entry_vkey']                                        = 'Fiuu Verify Key';
$_['entry_skey']                                        = 'Fiuu Secret Key';
$_['entry_type']                                        = 'Fiuu Account Type';
$_['entry_order_status']                        = 'Order Status';
$_['entry_completed_status']            = 'Completed Status';
$_['entry_pending_status']                      = 'Pending Status';
$_['entry_failed_status']                       = 'Failed Status';
$_['entry_geo_zone']                            = 'Geo Zone';
$_['entry_status']                                      = 'Status';
$_['entry_sort_order']                          = 'Sort Order';

// Help
$_['help_vkey']                                         = 'Please refer to your Fiuu Merchant Profile for this key.';
$_['help_skey']                                         = 'Please refer to your Fiuu Merchant Profile for this key.';
$_['help_type']                                         = 'Please choose your account type (Sandbox/Production)';
$_['type'] = array(1=> "Production", 2=>"Sandbox");
// Error
$_['error_permission']                          = 'Warning: You do not have permission to modify Fiuu!';
$_['error_mid']                                         = '<b>Fiuu Merchant ID</b> Required!';
$_['error_vkey']                                        = '<b>Fiuu Verify Key</b> Required!';
$_['error_skey']                                        = '<b>Fiuu Secret Key</b> Required!';
$_['error_type']                                        = '<b>Fiuu Account Type</b> Required!';
$_['error_settings']                            = 'Fiuu merchant ID and verify key mismatch, contact support-sa@razer.com for assistance.';
$_['error_status']                      = 'Unable to connect Fiuu API.';
