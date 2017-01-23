<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('jenis_produk_model', 'jenis_produk');
		$this->load->model('type_foto_model', 'type_foto');
		$this->load->model('produk_model', 'produk');
		$this->load->model('order_model', 'order');
		$this->load->model('customer_model', 'customer');
		$this->load->model('foto_model', 'foto');
	}
	
    public function index($id_jenis)
    {
        $data['content']			= 'frontend/produk/index';
		$data['jenis']				= $this->jenis_produk->GetDataById($id_jenis);
		$data['jenis_produk_list']	= $this->jenis_produk->GetDataList();
		$data['type_list']			= $this->type_foto->GetDataList();
		$data['produk_list']		= $this->produk->GetDataByJenis($id_jenis);
        $this->load->view('frontend/layouts/main', $data);
    }
	
    public function pesan($id_jenis)
    {
        $data['content']			= 'frontend/produk/form_costumer';
		$data['form_action']		= site_url("produk/add_costumer/{$id_jenis}");
		$data['jenis']				= $this->jenis_produk->GetDataById($id_jenis);
		$data['jenis_produk_list']	= $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
    }
	
    public function order($id_jenis)
    {
        $data['content']			= 'frontend/produk/form_order';
		$data['form_action']		= site_url("produk/add_order/{$id_jenis}");
		$data['jenis']				= $this->jenis_produk->GetDataById($id_jenis);
		$data['type_list']			= $this->type_foto->GetDataList();
		$data['kualitas_list']		= $this->produk->GetKualitasList();
		$data['produk_list']		= $this->produk->GetDataByJenis($id_jenis);	
		$data['jenis_produk_list']	= $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
    }
	
    public function foto($id_jenis)
    {
        $data['content']			= 'frontend/produk/form_foto';
		$data['form_action']		= site_url("produk/add_foto/{$id_jenis}");
		$data['jenis']				= $this->jenis_produk->GetDataById($id_jenis);	
		$data['jenis_produk_list']	= $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
    }
	
	function add_costumer($id_jenis){
		$data 	= array('nama' 			=> trim($this->input->post('nama')),
						'alamat' 		=> trim($this->input->post('alamat')),
						'kota' 			=> trim($this->input->post('kota')),
						'provinsi' 		=> trim($this->input->post('provinsi')),
						'kode_pos'		=> $this->input->post('kode_pos'),
						'no_hp'			=> $this->input->post('no_hp'));
		$this->customer->add($data);

		redirect("produk/order/{$id_jenis}");
	}
	
	function add_order($id_jenis){
		$id_customer 	= $this->customer->GetLastId();
		$id_kualitas 	= $this->input->post('id_kualitas');
		$id_produk 		= $this->produk->GetDataByKualitas($id_jenis, $id_kualitas)->id;

		$data 	= array('id_user' 			=> 4,
						'id_customer' 		=> $id_customer,
						'id_produk'			=> $id_produk,
						'id_type'			=> $this->input->post('id_type'),
						'tanggal_order'		=> date('Y-m-d'));
		$this->order->add($data);

		redirect("produk/foto/{$id_jenis}");
	}
	
	function add_foto($id_jenis){
		$id_order 	= $this->order->GetLastId();
		$file 		= $this->foto->UploadFile($_FILES['gambar']);

		$data 	= array('id_order' 		=> $id_order,
						'file'			=> $file);
		if($this->foto->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}

		redirect("produk/index/{$id_jenis}");
	}
}
?>