<?php
	class Notif{
		private $CI;
		function __construct(){
			$this->CI = &get_instance();
		}
		
		public function set_notif($type, $message=''){
			$this->CI->session->set_userdata('notif_type', $type);
			$this->CI->session->set_userdata('notif_message', $message);
		}
		
		private function clear_notif(){
			$this->CI->session->unset_userdata('notif_type');
			$this->CI->session->unset_userdata('notif_message');
		}
		
		public function fill_notif_data(&$data){
			if($this->CI->session->userdata('notif_type')){
				$data['notif']['type'] 		= $this->CI->session->userdata('notif_type');
				$data['notif']['message']  	= $this->CI->session->userdata('notif_message');
				$this->clear_notif();
			}
		}
	}
?>