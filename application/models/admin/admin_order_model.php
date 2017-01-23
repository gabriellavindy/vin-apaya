<?php
class Admin_order_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('order_model', 'order');
		$this->load->model('user_model', 'user');
		$this->load->model('customer_model', 'customer');
		$this->load->model('produk_model', 'produk');
		$this->load->model('type_foto_model', 'type_foto');
	}

	public function fill_index_data(&$data){
		$jml_data					= $this->order->CountData();
		$data['data_list']			= $this->order->GetDataList();
	}
	
	public function fill_form_add_data(&$data){
		$data['user_list']			= $this->user->GetDataList();
		$data['customer_list']		= $this->customer->GetDataList();
		$data['produk_list']		= $this->produk->GetDataList();
		$data['type_foto_list']		= $this->type_foto->GetDataList();
	}
	
	public function fill_form_edit_data($id,&$data){
		$data['user_list']			= $this->user->GetDataList();
		$data['customer_list']		= $this->customer->GetDataList();
		$data['produk_list']		= $this->produk->GetDataList();
		$data['type_foto_list']		= $this->type_foto->GetDataList();
		$data['data']				= $this->order->GetDataById($id);
	}
		
	public function fill_index_gallery($id_order, &$data){
		$data['data_list']			= $this->order->GetFotoList($id_order);
	}
	
	public function add(){
		$tanggal_order 		= $this->input->post('tanggal_order');
		$tanggal_konfirmasi = $this->input->post('tanggal_konfirmasi');
		
		$data 	= array('id_user' 			=> 4,
						'id_customer' 		=> $this->input->post('id_customer'),
						'id_produk'			=> $this->input->post('id_produk'),
						'id_type'			=> $this->input->post('id_type'),
						'tanggal_order'		=> $this->waktu->js_to_mysql_date($tanggal_order),
						'tanggal_konfirmasi'=> $this->waktu->js_to_mysql_date($tanggal_konfirmasi));
		
		if($this->order->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
	
	public function edit($id){
		$tanggal_order 		= $this->input->post('tanggal_order');
		$tanggal_konfirmasi = $this->input->post('tanggal_konfirmasi');

		$data 	= array('id_user' 			=> 4,
						'id_customer' 		=> $this->input->post('id_customer'),
						'id_produk'			=> $this->input->post('id_produk'),
						'id_type'			=> $this->input->post('id_type'),
						'tanggal_order'		=> $this->waktu->js_to_mysql_date($tanggal_order),
						'tanggal_konfirmasi'=> $this->waktu->js_to_mysql_date($tanggal_konfirmasi));

		if($this->order->edit($id,$data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}
	}
		
	public function finish($id, $finish){
		$data['finish']	=	$finish;
		if($this->order->edit($id, $data)){
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