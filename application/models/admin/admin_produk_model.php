<?php
class Admin_produk_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('produk_model', 'produk');
	}

	public function fill_index_data(&$data){
		$jml_data					= $this->produk->CountData();
		$data['data_list']			= $this->produk->GetDataList();
	}
	
	public function fill_form_add_data(&$data){
		$data['kualitas_list']		= $this->produk->GetKualitasList();
		$data['type_foto_list']		= $this->produk->GetTypeList();
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['kualitas_list']		= $this->produk->GetKualitasList();
		$data['type_foto_list']		= $this->produk->GetTypeList();
		$data['data']				= $this->produk->GetDataById($id);
	}
	
	public function add(){
		$data 	= array('nama' 			=> trim($this->input->post('nama')),
						'harga' 		=> $this->input->post('harga'),
						'id_kualitas'	=> $this->input->post('id_kualitas'),
						'id_type'		=> $this->input->post('id_type'),
						'keterangan'	=> trim($this->input->post('keterangan')));
		
		if($this->produk->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$data 	= array('nama' 			=> trim($this->input->post('nama')),
						'harga' 		=> $this->input->post('harga'),
						'id_kualitas'	=> $this->input->post('id_kualitas'),
						'id_type'		=> $this->input->post('id_type'),
						'keterangan'	=> trim($this->input->post('keterangan')));

		if($this->produk->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function validation($except_id){
		return($this->produk->CekDataExists($except_id) > 0 ? 'false' : 'true');
	}
	
	public function delete($id){
		if($this->produk->delete($id)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
}
?>