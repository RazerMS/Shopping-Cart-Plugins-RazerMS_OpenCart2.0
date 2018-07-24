<?php
/**
 * MOLPay OpenCart Plugin
 * 
 * @package Payment Gateway
 * @author MOLPay Technical Team <technical@molpay.com>
 * @version 2.0
 */

class ControllerExtensionPaymentMolpay extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/molpay');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('molpay', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');

		$data['entry_mid'] = $this->language->get('entry_mid');
		$data['entry_vkey'] = $this->language->get('entry_vkey');
		$data['entry_skey'] = $this->language->get('entry_skey');
		$data['entry_type'] = $this->language->get('entry_type');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_completed_status'] = $this->language->get('entry_completed_status');
		$data['entry_pending_status'] = $this->language->get('entry_pending_status');
		$data['entry_failed_status'] = $this->language->get('entry_failed_status');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		//Load all channel language file.
		$data['channel_list'] = $this->language->get('channel_list');

		$data['help_vkey'] = $this->language->get('help_vkey');
		$data['help_skey'] = $this->language->get('help_skey');
		$data['help_type'] = $this->language->get('help_type');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['mid'])) {
			$data['error_mid'] = $this->error['mid'];
		} else {
			$data['error_mid'] = '';
		}

		if (isset($this->error['vkey'])) {
			$data['error_vkey'] = $this->error['vkey'];
		} else {
			$data['error_vkey'] = '';
		}

		if (isset($this->error['skey'])) {
            $data['error_skey'] = $this->error['skey'];
        } else {
            $data['error_skey'] = '';
        }
                
        if (isset($this->error['type'])) {
            $data['error_type'] = $this->error['type'];
        } else {
            $data['error_type'] = '';
        }


		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/molpay', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/molpay', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true);

		if (isset($this->request->post['molpay_mid'])) {
			$data['molpay_mid'] = $this->request->post['molpay_mid'];
		} else {
			$data['molpay_mid'] = $this->config->get('molpay_mid');
		}

		if (isset($this->request->post['molpay_vkey'])) {
			$data['molpay_vkey'] = $this->request->post['molpay_vkey'];
		} else {
			$data['molpay_vkey'] = $this->config->get('molpay_vkey');
		}

		if (isset($this->request->post['molpay_skey'])) {
            $data['molpay_skey'] = $this->request->post['molpay_skey'];
        } else {
            $data['molpay_skey'] = $this->config->get('molpay_skey');
        }

		if (isset($this->request->post['molpay_type'])) {
            $data['molpay_type'] = $this->request->post['molpay_type'];
        } else {
            $data['molpay_type'] = $this->config->get('molpay_type');
        }

		if (isset($this->request->post['molpay_order_status_id'])) {
			$data['molpay_order_status_id'] = $this->request->post['molpay_order_status_id'];
		} else {
			$data['molpay_order_status_id'] = $this->config->get('molpay_order_status_id');
		}
		
		if (isset($this->request->post['molpay_completed_status_id'])) {
			$data['molpay_completed_status_id'] = $this->request->post['molpay_completed_status_id'];
		} else {
			$data['molpay_completed_status_id'] = $this->config->get('molpay_completed_status_id');
		}
		
		if (isset($this->request->post['molpay_pending_status_id'])) {
			$data['molpay_pending_status_id'] = $this->request->post['molpay_pending_status_id'];
		} else {
			$data['molpay_pending_status_id'] = $this->config->get('molpay_pending_status_id');
		}
		
		if (isset($this->request->post['molpay_failed_status_id'])) {
			$data['molpay_failed_status_id'] = $this->request->post['molpay_failed_status_id'];
		} else {
			$data['molpay_failed_status_id'] = $this->config->get('molpay_failed_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['molpay_geo_zone_id'])) {
			$data['molpay_geo_zone_id'] = $this->request->post['molpay_geo_zone_id'];
		} else {
			$data['molpay_geo_zone_id'] = $this->config->get('molpay_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['molpay_status'])) {
			$data['molpay_status'] = $this->request->post['molpay_status'];
		} else {
			$data['molpay_status'] = $this->config->get('molpay_status');
		}

		if (isset($this->request->post['molpay_sort_order'])) {
			$data['molpay_sort_order'] = $this->request->post['molpay_sort_order'];
		} else {
			$data['molpay_sort_order'] = $this->config->get('molpay_sort_order');
		}

		//Load the data into variable
		
		foreach($data['channel_list'] as $key=>$val)
		{
			if (isset($this->request->post['molpay_'.$key.'_status'])) 
			{
				$data["dbchannel_list"]['molpay_'.$key.'_status'] = $this->request->post['molpay_'.$key.'_status'];
			} 
			else 
			{
				$data["dbchannel_list"]['molpay_'.$key.'_status'] = $this->config->get('molpay_'.$key.'_status');
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/molpay', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/molpay')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['molpay_mid']) {
			$this->error['mid'] = $this->language->get('error_mid');
		}

		if (!$this->request->post['molpay_vkey']) {
			$this->error['vkey'] = $this->language->get('error_vkey');
		}

		if (!$this->request->post['molpay_skey']) {
            $this->error['skey'] = $this->language->get('error_skey');
        }

		if (!$this->request->post['molpay_type']) {
            $this->error['type'] = $this->language->get('error_type');
        }

		return !$this->error;
	}
}
