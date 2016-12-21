<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $data['content']     = 'frontend/layouts/home';
        $this->load->view('frontend/layouts/main', $data);
	}
}
?>