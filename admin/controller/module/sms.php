<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
* */
class ControllerModuleSms extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('module/sms');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('sms', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_mysmsmantra'] = $this->language->get('text_mysmsmantra');
		$data['text_ibulksms'] = $this->language->get('text_ibulksms');
	
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_username'] = $this->language->get('entry_username');
		$data['entry_sender_id'] = $this->language->get('entry_sender_id');
		$data['entry_password'] = $this->language->get('entry_password');
		$data['entry_order_template'] = $this->language->get('entry_order_template');
		$data['entry_register_template'] = $this->language->get('entry_register_template');
		$data['entry_delivery_template'] = $this->language->get('entry_delivery_template');
		$data['entry_provider'] = $this->language->get('entry_provider');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
				
		if (isset($this->error['sms_username'])) {
			$data['error_sms_username'] = $this->error['sms_username'];
		} else {
			$data['error_sms_username'] = '';
		}
		
		if (isset($this->error['sms_sender_id'])) {
			$data['error_sms_sender_id'] = $this->error['sms_sender_id'];
		} else {
			$data['error_sms_sender_id'] = '';
		}
		
		if (isset($this->error['sms_password'])) {
			$data['error_sms_password'] = $this->error['sms_password'];
		} else {
			$data['error_sms_password'] = '';
		}
		
		if (isset($this->error['sms_order_template'])) {
			$data['error_sms_order_template'] = $this->error['sms_order_template'];
		} else {
			$data['error_sms_order_template'] = '';
		}
				
		if (isset($this->error['sms_register_template'])) {
			$data['error_sms_register_template'] = $this->error['sms_register_template'];
		} else {
			$data['error_sms_register_template'] = '';
		}
		
		if (isset($this->error['sms_delivery_template'])) {
			$data['error_sms_delivery_template'] = $this->error['sms_delivery_template'];
		} else {
			$data['error_sms_delivery_template'] = '';
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('module/sms', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['action'] = $this->url->link('module/sms', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

		if (isset($this->request->post['sms_status'])) {
			$data['sms_status'] = $this->request->post['sms_status'];
		} else {
			$data['sms_status'] = $this->config->get('sms_status');
		}
		
		if (isset($this->request->post['sms_provider'])) {
			$data['sms_provider'] = $this->request->post['sms_provider'];
		} else {
			$data['sms_provider'] = $this->config->get('sms_provider');
		}
		
		if (isset($this->request->post['sms_username'])) {
			$data['sms_username'] = $this->request->post['sms_username'];
		} else {
			$data['sms_username'] = $this->config->get('sms_username');
		}
		
		if (isset($this->request->post['sms_sender_id'])) {
			$data['sms_sender_id'] = $this->request->post['sms_sender_id'];
		} else {
			$data['sms_sender_id'] = $this->config->get('sms_sender_id');
		}
		
		if (isset($this->request->post['sms_password'])) {
			$data['sms_password'] = $this->request->post['sms_password'];
		} else {
			$data['sms_password'] = $this->config->get('sms_password');
		}
		
		if (isset($this->request->post['sms_order_template'])) {
			$data['sms_order_template'] = $this->request->post['sms_order_template'];
		} else {
			$data['sms_order_template'] = $this->config->get('sms_order_template');
		}
		
		if (isset($this->request->post['sms_register_template'])) {
			$data['sms_register_template'] = $this->request->post['sms_register_template'];
		} else {
			$data['sms_register_template'] = $this->config->get('sms_register_template');
		}
		
		if (isset($this->request->post['sms_delivery_template'])) {
			$data['sms_delivery_template'] = $this->request->post['sms_delivery_template'];
		} else {
			$data['sms_delivery_template'] = $this->config->get('sms_delivery_template');
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('module/sms.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/sms')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if (!$this->request->post['sms_username']) {
			$this->error['sms_username'] = $this->language->get('error_sms_username');
		}
		if (!$this->request->post['sms_sender_id']) {
			$this->error['sms_sender_id'] = $this->language->get('error_sms_sender_id');
		}
		if (!$this->request->post['sms_password']) {
			$this->error['sms_password'] = $this->language->get('error_sms_password');
		}
		if (!$this->request->post['sms_order_template']) {
			$this->error['sms_order_template'] = $this->language->get('error_sms_order_template');
		}
		if (!$this->request->post['sms_register_template']) {
			$this->error['sms_register_template'] = $this->language->get('error_sms_register_template');
		}
		if (!$this->request->post['sms_delivery_template']) {
			$this->error['sms_delivery_template'] = $this->language->get('error_sms_delivery_template');
		}
		return !$this->error;
	}
}
