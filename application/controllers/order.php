<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('jenis_produk_model', 'jenis_produk');
    }
    
    public function cara_order()
    {
        $data['content']            = 'frontend/order/cara_order';
        $data['jenis_produk_list']  = $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
    }

    public function syarat_kondisi()
    {
        $data['content']            = 'frontend/order/syarat_kondisi';
        $data['jenis_produk_list']  = $this->jenis_produk->GetDataList();
        $this->load->view('frontend/layouts/main', $data);
    }
}
?>