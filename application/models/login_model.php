<?php 
	class Login_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->model('user_model', 'user');
		}
		
		//fungsi login
		public function Login(){
			$username 	= $this->input->post('username');
			$password	= md5($this->input->post('password'));

			if($data=$this->user->GetDataByUsernameAndPassword($username, $password)){ 
				$this->session->set_userdata('login', true);
				$this->session->set_userdata('userdata', $data);
				$hasil = 1;
			}else{ 
				$this->session->set_userdata('error_message', 'Login gagal, username atau password yang Anda masukkan salah!');
				$this->session->set_userdata('login', false);
				$hasil = 0;
			} 
			return($hasil);
		} 

		//fungsi untuk logout
		public function Logout(){
			$this->session->sess_destroy();
		}
	}
?>