<?php
	class Foto_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}
	        
	    // public function add($data){
     //    	return($this->db->update('foto', $data, array('file'=>$file)));
	    // }
        
	    public function add($data){
	        return($this->db->insert('foto', $data));
	    }
		
		function UploadFile($file){
			if($file['tmp_name']){
				@move_uploaded_file($file['tmp_name'], 'file/'.$file['name'].'.jpg');
				return($file['name']);
			}			
		}
		
		function GetDataById($id){
			return($this->db->get_where('foto', array('id'=>$id))->row());
		}
		
		// function Delete($id){
		// 	$this->db->delete('file',array('id'=>$id));
		// 	@unlink('file/'.$id.'.jpg');
		// }
	}
?>