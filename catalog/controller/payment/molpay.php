<?php
/**
 * MOLPay OpenCart Plugin
 * 
 * @package Payment Gateway
 * @author MOLPay Technical Team <technical@molpay.com>
 * @version 2.0
 */

class ControllerPaymentMolpay extends Controller {
	public function index() {
		$data['button_confirm'] = $this->language->get('button_confirm');

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$data['action'] = 'https://www.onlinepayment.com.my/MOLPay/pay/'.$this->config->get('molpay_mid').'/';
		
		$data['amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false);
		$data['orderid'] = $this->session->data['order_id'];
		$data['bill_name'] = $order_info['payment_firstname'] . ' ' . $order_info['payment_lastname'];
		$data['bill_email'] = $order_info['email'];
		$data['bill_mobile'] = $order_info['telephone'];
		$data['country'] = $order_info['payment_iso_code_2'];
		$data['currency'] = $order_info['currency_code'];
		$data['vcode'] = md5($this->data['amount'].$this->config->get('molpay_mid').$this->data['orderid'].$this->config->get('molpay_vkey'));

		$products = $this->cart->getProducts();
            foreach ($products as $product) {
                $data['prod_desc'][]= $product['name']." x ".$product['quantity'];
            }
		
		$data['lang'] = $this->session->data['language'];

		$data['returnurl'] = $this->url->link('payment/molpay/return_ipn', '', 'SSL');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/payment/molpay.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/payment/molpay.tpl', $data);
		} else {
			return $this->load->view('default/template/payment/molpay.tpl', $data);
		}
	}

	public function return_ipn() {
 
        $this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->request->post['orderid']); // orderid
		
        $vkey = $this->config->get('molpay_vkey');

        $_POST['treq']=   1;

        $tranID = $_POST['tranID'];
        $orderid = $_POST['orderid'];
        $status = $_POST['status'];
        $domain = $_POST['domain'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $appcode = $_POST['appcode'];
        $paydate = $_POST['paydate'];
        $skey = $_POST['skey'];

        /***********************************************************
        * Backend acknowledge method for IPN (DO NOT MODIFY)
        ************************************************************/
        while ( list($k,$v) = each($_POST) ) {
          $postData[]= $k."=".$v;
        }
        $postdata   = implode("&",$postData);
        $url        = "https://www.onlinepayment.com.my/MOLPay/API/chkstat/returnipn.php";
        $ch         = curl_init();
        curl_setopt($ch, CURLOPT_POST           , 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS     , $postdata);
        curl_setopt($ch, CURLOPT_URL            , $url);
        curl_setopt($ch, CURLOPT_HEADER         , 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT    , TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , FALSE);
        //curl_setopt($ch, CURLOPT_SSLVERSION     , 3);
        $result = curl_exec( $ch );
        curl_close( $ch );
        /***********************************************************
        * End of Acknowledge method for IPN
        ************************************************************/
		// echo $tranID."</br>";
        // echo $orderid."</br>";
        // echo $status."</br>";
        // echo $domain."</br>";
        // echo $amount."</br>";
        // echo $currency."</br>";
        // echo $appcode."</br>";
        // echo $paydate."</br>";
        // echo $skey."</br>";
		// exit;
        
		$key0 = md5($tranID.$orderid.$status.$domain.$amount.$currency);
        $key1 = md5($paydate.$domain.$key0.$appcode.$vkey);

        if ( $skey != $key1 ) 
            $status = -1 ;
        
        if ( $status == "00" )  {
			$this->model_checkout_order->addOrderHistory($orderid , $this->config->get('molpay_order_status_id'));
        } elseif( $status == "22" ) {
            $this->model_checkout_order->addOrderHistory($orderid , $this->config->get('molpay_order_status_id'));		
        } else {
            $this->model_checkout_order->addOrderHistory($orderid , $this->config->get('molpay_order_status_id'));         
        }
		echo '<html>' . "\n";
		echo '<head>' . "\n";
		echo '  <meta http-equiv="Refresh" content="0; url=' . $this->url->link('checkout/success') . '">' . "\n";
		echo '</head>' . "\n";
		echo '<body>' . "\n";
		echo '  <p>Please follow <a href="' . $this->url->link('checkout/success') . '">link</a>!</p>' . "\n";
		echo '</body>' . "\n";
		echo '</html>' . "\n";
		exit();
    }
     
    /*****************************************************
    * Callback with IPN(Instant Payment Notification)
    ******************************************************/
    public function callback_ipn()   {
        $this->load->model('checkout/order');

        $vkey = $this->config->get('molpay_vkey');

        $nbcb = $_POST['nbcb'];
        $tranID = $_POST['tranID'];
        $orderid = $_POST['orderid'];
        $status = $_POST['status'];
        $domain = $_POST['domain'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $appcode = $_POST['appcode'];
        $paydate = $_POST['paydate'];
        $skey = $_POST['skey'];

        $key0 = md5($tranID.$orderid.$status.$domain.$amount.$currency);
        $key1 = md5($paydate.$domain.$key0.$appcode.$vkey);

        if ( $skey != $key1 )
            $status = -1 ;

        if ($nbcb == 1) {
            echo "CBTOKEN:MPSTATOK";
            $order_info = $this->model_checkout_order->getOrder($this->request->post['orderid']); // orderid
            
            
            if ( $status == "00" ) {                
                $this->model_checkout_order->addOrderHistory($orderid , $this->config->get('molpay_order_status_id'));
            } elseif ( $status ="22" ) { 
                $this->model_checkout_order->addOrderHistory($orderid, $this->config->get('molpay_order_status_id'));
            } elseif ( $status ="11" ) {
                $this->model_checkout_order->addOrderHistory($orderid, $this->config->get('molpay_order_status_id'));
            } else { 
                $this->model_checkout_order->addOrderHistory($orderid, $this->config->get('molpay_order_status_id'));
            }
        }
    }

    /*****************************************************
    * Notification with IPN(Instant Payment Notification)
    ******************************************************/
    public function notification_ipn()   {
        $this->load->model('checkout/order');

        $vkey = $this->config->get('molpay_vkey');

        $nbcb = $_POST['nbcb'];
        $tranID = $_POST['tranID'];
        $orderid = $_POST['orderid'];
        $status = $_POST['status'];
        $domain = $_POST['domain'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $appcode = $_POST['appcode'];
        $paydate = $_POST['paydate'];
        $skey = $_POST['skey'];

        $key0 = md5($tranID.$orderid.$status.$domain.$amount.$currency);
        $key1 = md5($paydate.$domain.$key0.$appcode.$vkey);

        if ( $skey != $key1 )
            $status = -1 ;

        if ($nbcb == 2) {
            echo "CBTOKEN:MPSTATOK";
            $order_info = $this->model_checkout_order->getOrder($this->request->post['orderid']); // orderid
            
            //Confirm the order If not created yet
            //$this->model_checkout_order->confirm($this->request->post['orderid'], $this->config->get('molpay_order_status_id'));
            
            if ( $status == "00" ) {                
                $this->model_checkout_order->addOrderHistory($orderid , $this->config->get('molpay_order_status_id'), 'MP Notification Return', false);
            } elseif ( $status ="22" ) { 
                $this->model_checkout_order->addOrderHistory($orderid, $this->config->get('molpay_order_status_id'), 'MP Notification Return', false);
            } elseif ( $status ="11" ) {
                $this->model_checkout_order->addOrderHistory($orderid, $this->config->get('molpay_order_status_id'), 'MP Notification Return', false);
            } else { 
                $this->model_checkout_order->addOrderHistory($orderid, $this->config->get('molpay_order_status_id'), 'MP Notification Return', false);
            }
        }
    }
}