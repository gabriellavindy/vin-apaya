<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('userdata')){
			redirect('admin/login');
		}else{
			$data['userdata']	 = $this->session->userdata('userdata');
	        $data['content']     = 'backend/template/dashboard';
	        $this->load->view('backend/template/home', $data);
		}
	}
}
?>