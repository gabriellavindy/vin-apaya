<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function index()
    {
        $data['content']     = 'frontend/about/index';
        $this->load->view('frontend/layouts/main', $data);
    }
}
?>