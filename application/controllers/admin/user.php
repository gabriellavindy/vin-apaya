<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	private $data;
	function __construct(){
		parent::__construct();
		$this->data['userdata']			= $this->session->userdata('userdata');
		// if($this->data['userdata']->id_grup != 1){
		// 	redirect('admin/logout');
		// }
		
		$this->load->model('admin/admin_user_model', 'admin_user');
	}

	function index(){
		$this->admin_user->fill_index_data($this->data);
        $this->data['content']			= 'backend/user/index';
        $this->load->view('backend/template/home', $this->data);
	}
		
	function add(){
		$this->admin_user->fill_form_add_data($this->data);
		$this->data['form_action']		= site_url("admin/user/add_process");
		$this->data['back_url']			= site_url("admin/user");
		$this->data['content']			= 'backend/user/form';
		$this->load->view('backend/template/home', $this->data);
	}

	function edit($id){
		$this->admin_user->fill_form_edit_data($id,$this->data);
		$this->data['form_action']		= site_url("admin/user/edit_process/{$id}");
		$this->data['back_url']			= site_url("admin/user");
		$this->data['content']			= 'backend/user/form_edit';
		$this->load->view('backend/template/home', $this->data);
	}
	
	function add_process(){
		$this->admin_user->add();
		redirect("admin/user/index");
	}
		
	function edit_process($id){
		$this->admin_user->edit($id);
		redirect("admin/user/index");
	}
	
	function validation($except_id=''){
		echo($this->admin_user->validation($except_id));
	}
	
	function delete($id){
		$this->admin_user->delete($id);
		redirect("admin/user/index");
	}
}
?>