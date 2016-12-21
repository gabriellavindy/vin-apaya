<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	private $data;
	function __construct(){
		parent::__construct();
		$this->data['userdata']			= $this->session->userdata('userdata');
		// if($this->data['userdata']->id_grup != 1){
		// 	redirect('admin/logout');
		// }
		
		$this->load->model('admin/admin_produk_model', 'admin_produk');
	}

	function index(){
		$this->admin_produk->fill_index_data($this->data);
        $this->data['content']     = 'backend/produk/index';
        $this->load->view('backend/template/home', $this->data);
	}
		
	function add(){
		$this->admin_produk->fill_form_add_data($this->data);
		$this->data['form_action']		= site_url("admin/produk/add_process");
		$this->data['back_url']			= site_url("admin/produk");
		$this->data['content']			= 'backend/produk/form';
		$this->load->view('backend/template/home', $this->data);
	}

	function edit($id){
		$this->admin_produk->fill_form_edit_data($id,$this->data);
		$this->data['form_action']		= site_url("admin/produk/edit_process/{$id}");
		$this->data['back_url']			= site_url("admin/produk");
		$this->data['content']			= 'backend/produk/form';
		$this->load->view('backend/template/home', $this->data);
	}
	
	function add_process(){
		$this->admin_produk->add();
		redirect("admin/produk/index");
	}
		
	function edit_process($id){
		$this->admin_produk->edit($id);
		redirect("admin/produk/index");
	}
	
	function validation($except_id=''){
		echo($this->admin_produk->validation($except_id));
	}
	
	function delete($id){
		$this->admin_produk->delete($id);
		redirect("admin/produk/index");
	}
}
?>