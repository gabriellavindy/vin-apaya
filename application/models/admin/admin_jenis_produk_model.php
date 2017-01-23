<?php
class Admin_jenis_produk_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('jenis_produk_model', 'jenis_produk');
	}

	public function fill_index_data(&$data){
		$jml_data					= $this->jenis_produk->CountData();
		$data['data_list']			= $this->jenis_produk->GetDataList();
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['data']				= $this->jenis_produk->GetDataById($id);
	}
	
	public function add(){
		$data 	= array('nama'			=> trim($this->input->post('nama')),
						'keterangan'	=> trim($this->input->post('keterangan')));
		
		if($this->jenis_produk->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$data 	= array('nama'			=> trim($this->input->post('nama')),
						'keterangan'	=> trim($this->input->post('keterangan')));

		if($this->jenis_produk->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function validation($except_id){
		return($this->jenis_produk->CekDataExists($except_id) > 0 ? 'false' : 'true');
	}
	
	public function delete($id){
		if($this->jenis_produk->delete($id)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
}
?>