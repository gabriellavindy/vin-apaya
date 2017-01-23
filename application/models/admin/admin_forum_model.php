<?php
class Admin_forum_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('forum_model', 'forum');
	}

	public function fill_index_data(&$data){
		$jml_data					= $this->forum->CountData();
		$data['data_list']			= $this->forum->GetDataList();
		// print_r($data['data_list']);exit;
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['data']				= $this->forum->GetDataById($id);
	}
	
	public function add(){
		$data 	= array('nama'			=> trim($this->input->post('nama')),
						'keterangan'	=> trim($this->input->post('keterangan')));
		
		if($this->forum->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$data 	= array('nama'			=> trim($this->input->post('nama')),
						'keterangan'	=> trim($this->input->post('keterangan')));

		if($this->forum->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function validation($except_id){
		return($this->forum->CekDataExists($except_id) > 0 ? 'false' : 'true');
	}
	
	public function delete($id){
		if($this->forum->delete($id)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
}
?>