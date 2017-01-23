<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type_foto_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('type_foto'));
    }
    
    public function GetDataList(){
        $this->db->select('type_foto.*');
        $data = $this->db->get('type_foto')->result();
        
        return($data);
    }
        
    public function GetDataById($id){
        return($this->db->get_where('type_foto', array('id'=>$id))->row());
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('type_foto')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('type_foto', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('type_foto', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('type_foto', array('id'=>$id)));
    }
}
