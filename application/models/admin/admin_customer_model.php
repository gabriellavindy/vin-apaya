<?php
class Admin_customer_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('customer_model', 'customer');
	}

	public function fill_index_data(&$data){
		$jml_data					= $this->customer->CountData();
		$data['data_list']			= $this->customer->GetDataList();
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['data']				= $this->customer->GetDataById($id);
	}
	
	public function add(){
		$data 	= array('nama' 			=> trim($this->input->post('nama')),
						'alamat' 		=> trim($this->input->post('alamat')),
						'kota' 			=> trim($this->input->post('kota')),
						'provinsi' 		=> trim($this->input->post('provinsi')),
						'kode_pos'		=> $this->input->post('kode_pos'),
						'no_hp'			=> $this->input->post('no_hp'));
		
		if($this->customer->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$data 	= array('nama' 			=> trim($this->input->post('nama')),
						'alamat' 		=> trim($this->input->post('alamat')),
						'kota' 			=> trim($this->input->post('kota')),
						'provinsi' 		=> trim($this->input->post('provinsi')),
						'kode_pos'		=> $this->input->post('kode_pos'),
						'no_hp'			=> $this->input->post('no_hp'));

		if($this->customer->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function validation($except_id){
		return($this->customer->CekDataExists($except_id) > 0 ? 'false' : 'true');
	}
	
	public function delete($id){
		if($this->customer->delete($id)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
}
?>