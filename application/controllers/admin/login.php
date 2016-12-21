<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('login_model','login');
	}

	public function index()
	{
		$data['error_message'] 	= $this->session->userdata('error_message');
		$this->session->unset_userdata('error_message');
        $this->load->view('backend/template/login', $data);
	}

    public function validate(){
        $masuk    = $this->login->Login();
        if($masuk>=1){
            redirect('admin/dashboard');
        }else{
            redirect('admin/login');
        }
    }
        
    public function logout(){
        $this->session->session_destroy();
        redirect('admin/login');
    }
}
?>