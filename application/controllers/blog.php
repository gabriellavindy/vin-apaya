<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('jenis_produk_model', 'jenis_produk');
	}
	
    public function index()
    {
        $data['content']			= 'frontend/blog/index';
		$data['jenis_produk_list']	= $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
    }
}
?>