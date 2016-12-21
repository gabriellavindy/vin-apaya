<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenis_produk_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('jenis_produk'));
    }
    
    public function GetDataList(){
        $this->db->select('jenis_produk.*');
        $data = $this->db->get('jenis_produk')->result();
        
        return($data);
    }
        
    public function GetDataById($id){
        return($this->db->get_where('jenis_produk', array('id'=>$id))->row());
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('jenis_produk')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('jenis_produk', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('jenis_produk', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('jenis_produk', array('id'=>$id)));
    }
}
