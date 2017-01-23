<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('forum'));
    }
    
    public function GetDataList(){
        $this->db->select('forum.*');
        $data = $this->db->get('forum')->result();
        
        return($data);
    }
        
    public function GetDataById($id){
        return($this->db->get_where('forum', array('id'=>$id))->row());
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('forum')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('forum', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('forum', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('forum', array('id'=>$id)));
    }
}
