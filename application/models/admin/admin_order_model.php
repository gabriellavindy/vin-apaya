<?php
class Admin_order_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('order_model', 'order');
		$this->load->model('user_model', 'user');
		$this->load->model('customer_model', 'customer');
		$this->load->model('produk_model', 'produk');
	}

	public function fill_index_data(&$data){
		$jml_data					= $this->order->CountData();
		$data['data_list']			= $this->order->GetDataList();
	}
	
	public function fill_form_add_data(&$data){
		$data['user_list']			= $this->user->GetDataList();
		$data['customer_list']		= $this->customer->GetDataList();
		$data['produk_list']		= $this->produk->GetDataList();
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['user_list']			= $this->user->GetDataList();
		$data['customer_list']		= $this->customer->GetDataList();
		$data['produk_list']		= $this->produk->GetDataList();
		$data['data']				= $this->order->GetDataById($id);
	}
	
	public function add(){
		$data 	= array('nama'		=> trim($this->input->post('nama')));
		
		if($this->order->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$data 	= array('nama'		=> trim($this->input->post('nama')));

		if($this->order->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function validation($except_id){
		return($this->order->CekDataExists($except_id) > 0 ? 'false' : 'true');
	}
	
	public function delete($id){
		if($this->order->delete($id)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
}
?>