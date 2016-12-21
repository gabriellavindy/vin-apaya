<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    public function cara_order()
    {
        $data['content']     = 'frontend/order/cara_order';
        $this->load->view('frontend/layouts/main', $data);
    }

    public function syarat_kondisi()
    {
        $data['content']     = 'frontend/order/syarat_kondisi';
        $this->load->view('frontend/layouts/main', $data);
    }
}
?>