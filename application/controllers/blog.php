<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function index()
    {
        $data['content']     = 'frontend/blog/index';
        $this->load->view('frontend/layouts/main', $data);
    }
}
?>