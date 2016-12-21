<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	private $data;
	function __construct(){
		parent::__construct();
		$this->data['userdata']			= $this->session->userdata('userdata');
		// if($this->data['produkdata']->id_grup != 1){
		// 	redirect('admin/logout');
		// }
		
		$this->load->model('admin/admin_customer_model', 'admin_customer');
	}

	function index()
	{
		$this->admin_customer->fill_index_data($this->data);
        $this->data['content']     = 'backend/customer/index';
        $this->load->view('backend/template/home', $this->data);
	}
		
	function add(){
		$this->admin_customer->fill_form_add_data($this->data);
		$this->data['form_action']		= site_url("admin/customer/add_process");
		$this->data['back_url']			= site_url("admin/customer");
		$this->data['content']			= 'backend/customer/form';
		$this->load->view('backend/template/home', $this->data);
	}

	function edit($id){
		$this->admin_customer->fill_form_edit_data($id,$this->data);
		$this->data['form_action']		= site_url("admin/customer/edit_process/{$id}");
		$this->data['back_url']			= site_url("admin/customer");
		$this->data['content']			= 'backend/customer/form';
		$this->load->view('backend/template/home', $this->data);
	}
	
	function add_process(){
		$this->admin_customer->add();
		redirect("admin/customer/index");
	}
		
	function edit_process($id){
		$this->admin_customer->edit($id);
		redirect("admin/customer/index");
	}
	
	function validation($except_id=''){
		echo($this->admin_customer->validation($except_id));
	}
	
	function delete($id){
		$this->admin_customer->delete($id);
		redirect("admin/customer/index");
	}
}
?>