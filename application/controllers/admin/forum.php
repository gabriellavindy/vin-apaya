<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function index()
	{
        $data['content']     = 'backend/forum/index.php';
        $this->load->view('backend/template/home', $data);
	}
}
?>