<?php
	class View_image extends CI_Controller {
		function gallery($width,$height,$filename,$uri=''){
			$this->load->library('ResizeImage');
			$this->resizeimage->imgFileName = '/file/'.$filename;
			$this->resizeimage->ReadImageFile();
			$this->resizeimage->Resize($width,$height, true);
			$this->resizeimage->ApplyFrame();
			header("Content-type: image/jpeg");
			$this->resizeimage->Show();
			$this->resizeimage->Destroy();
		}

		function banner($width,$height,$filename,$uri=''){
			$this->load->library('ResizeImage');
			$this->resizeimage->imgFileName = 'file/foto/'.$filename;
			$this->resizeimage->ReadImageFile();
			$this->resizeimage->Resize($width,$height, false);
			$this->resizeimage->ApplyFrame();
			header("Content-type: image/jpeg");
			$this->resizeimage->Show();
			$this->resizeimage->Destroy();
		}

		function slideshow($width,$height,$filename,$uri=''){
			$this->load->library('ResizeImage');
			$this->resizeimage->imgFileName = 'file/foto/'.$filename;
			$this->resizeimage->ReadImageFile();
			$this->resizeimage->Resize($width,$height, false);
			$this->resizeimage->ApplyFrame();
			header("Content-type: image/jpeg");
			$this->resizeimage->Show();
			$this->resizeimage->Destroy();
		}
	}
?>