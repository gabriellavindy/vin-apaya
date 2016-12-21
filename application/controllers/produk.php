<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function index()
    {
        $data['content']     = 'frontend/produk/index';
        $this->load->view('frontend/layouts/main', $data);
    }
}
?>