<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	private $data;
	function __construct(){
		parent::__construct();
		$this->data['userdata']			= $this->session->userdata('userdata');
		// if($this->data['userdata']->id_grup != 1){
		// 	redirect('admin/logout');
		// }
		
		$this->load->model('admin/admin_order_model', 'admin_order');
	}

	function index(){
		$this->notif->fill_notif_data($this->data);
		$this->admin_order->fill_index_data($this->data);
        $this->data['content']     = 'backend/order/index';
        $this->load->view('backend/template/home', $this->data);
	}
		
	function add(){
		$this->admin_order->fill_form_add_data($this->data);
		$this->data['form_action']		= site_url("admin/order/add_process");
		$this->data['back_url']			= site_url("admin/order");
		$this->data['content']			= 'backend/order/form';
		$this->load->view('backend/template/home', $this->data);
	}

	function edit($id){
		$this->admin_order->fill_form_edit_data($id,$this->data);
		$this->data['form_action']		= site_url("admin/order/edit_process/{$id}");
		$this->data['back_url']			= site_url("admin/order");
		$this->data['content']			= 'backend/order/form_edit';
		$this->load->view('backend/template/home', $this->data);
	}
	
	function add_process(){
		$this->admin_order->add();
		redirect("admin/order/index");
	}
		
	function edit_process($id){
		$this->admin_order->edit($id);
		redirect("admin/order/index");
	}
		
	function finish($id, $finish){
		$this->admin_order->finish($id, $finish);
		redirect("admin/order/index");
	}
		
	function gallery($id){
		$this->admin_order->fill_index_gallery($id,$this->data);
		$this->data['id_pesanan']		= $id;
		$this->data['back_url']			= site_url("admin/order");
		$this->data['content']			= 'backend/order/gallery';
		$this->load->view('backend/template/home', $this->data);
	}
	
	function validation($except_id=''){
		echo($this->admin_order->validation($except_id));
	}
	
	function delete($id){
		$this->admin_order->delete($id);
		redirect("admin/order/index");
	}
}
?>