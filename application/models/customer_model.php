<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('data_customer'));
    }
    
    public function GetDataList(){
        $this->db->select('data_customer.*');
        $data = $this->db->get('data_customer')->result();
        
        return($data);
    }
        
    public function GetDataById($id){
        return($this->db->get_where('data_customer', array('id'=>$id))->row());
    }
        
    public function GetLastId(){
        $this->db->select('max(id) as id');
        return($this->db->get('data_customer')->row()->id);
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('data_customer')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('data_customer', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('data_customer', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('data_customer', array('id'=>$id)));
    }
}
