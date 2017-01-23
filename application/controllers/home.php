<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('jenis_produk_model', 'jenis_produk');
		$this->load->model('forum_model', 'forum');
	}

	public function index()
	{
        $data['content']			= 'frontend/layouts/home';
		$data['jenis_produk_list']	= $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
	}
	
	function add_pesan(){
		$data 	= array('email'		=> trim($this->input->post('email')),
						'subjek' 	=> $this->input->post('subjek'),
						'pesan'		=> $this->input->post('pesan'),
						'tanggal'	=> date('Y-m-d'));
		
		if($this->forum->add($data)){
			$this->notif->set_notif('success');
		}else{
			$this->notif->set_notif('error');
		}

		redirect("home/index");
	}
}
?>