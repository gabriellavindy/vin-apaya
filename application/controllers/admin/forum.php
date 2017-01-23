<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	private $data;
	function __construct(){
		parent::__construct();
		$this->data['userdata']			= $this->session->userdata('userdata');
		// if($this->data['userdata']->id_grup != 1){
		// 	redirect('admin/logout');
		// }
		
		$this->load->model('admin/admin_forum_model', 'admin_forum');
	}

	function index(){
		$this->admin_forum->fill_index_data($this->data);
        $this->data['content']     = 'backend/forum/index';
        $this->load->view('backend/template/home', $this->data);
	}
		
	function add(){
		$this->data['form_action']		= site_url("admin/forum/add_process");
		$this->data['back_url']			= site_url("admin/forum");
		$this->data['content']			= 'backend/forum/form';
		$this->load->view('backend/template/home', $this->data);
	}

	function edit($id){
		$this->admin_forum->fill_form_edit_data($id,$this->data);
		$this->data['form_action']		= site_url("admin/forum/edit_process/{$id}");
		$this->data['back_url']			= site_url("admin/forum");
		$this->data['content']			= 'backend/forum/form_edit';
		$this->load->view('backend/template/home', $this->data);
	}
	
	function add_process(){
		$this->admin_forum->add();
		redirect("admin/forum/index");
	}
		
	function edit_process($id){
		$this->admin_forum->edit($id);
		redirect("admin/forum/index");
	}
	
	function validation($except_id=''){
		echo($this->admin_forum->validation($except_id));
	}
	
	function delete($id){
		$this->admin_forum->delete($id);
		redirect("admin/forum/index");
	}
}
?>