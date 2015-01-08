<?php
/**
 * MOLPay OpenCart Plugin
 * 
 * @package Payment Gateway
 * @author MOLPay Technical Team <technical@molpay.com>
 * @version 2.0
 */

class ControllerPaymentMolpay extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('payment/molpay');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('molpay', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL'));
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
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_completed_status'] = $this->language->get('entry_completed_status');
		$data['entry_pending_status'] = $this->language->get('entry_pending_status');
		$data['entry_failed_status'] = $this->language->get('entry_failed_status');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['help_vkey'] = $this->language->get('help_vkey');

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

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_payment'),
			'href' => $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('payment/molpay', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['action'] = $this->url->link('payment/molpay', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL');

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

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('payment/molpay.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'payment/molpay')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['molpay_mid']) {
			$this->error['mid'] = $this->language->get('error_mid');
		}

		if (!$this->request->post['molpay_vkey']) {
			$this->error['vkey'] = $this->language->get('error_vkey');
		}

		return !$this->error;
	}
}