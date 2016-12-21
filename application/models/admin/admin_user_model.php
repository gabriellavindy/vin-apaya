<?php
class Admin_user_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function fill_index_data(&$data){
		$jml_data				= $this->user->CountData();
		$data['data_list']		= $this->user->GetDataList();
	}
	
	public function fill_form_add_data(&$data){
		$data['user_grup_list']	= $this->user->GetUserGrupList();
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['user_grup_list']	= $this->user->GetUserGrupList();
		$data['data']			= $this->user->GetDataById($id);
	}
	
	public function add(){
		$data 	= array('username' 		=> trim($this->input->post('username')),
						'password' 		=> md5(trim($this->input->post('password'))),
						'nama'			=> trim($this->input->post('nama')),
						'id_grup'		=> $this->input->post('id_grup'));
		
		if($this->user->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$data 	= array('username' 		=> trim($this->input->post('username')),
						'nama'			=> trim($this->input->post('nama')),
						'id_grup'		=> $this->input->post('id_grup'));

		if($this->input->post('password')){
			$data = array_merge($data, array('password'=>md5(trim($this->input->post('password')))));
		}

		if($this->user->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function validation($except_id){
		return($this->user->CekDataExists($except_id) > 0 ? 'false' : 'true');
	}
	
	public function delete($id){
		if($this->user->delete($id)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
}
?>