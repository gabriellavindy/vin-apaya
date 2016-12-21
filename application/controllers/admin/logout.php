<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Logout extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('login_model','login');
		}
		
		public function index()
		{
			$this->login->Logout();
			redirect('admin/login');
		}
	}
?>