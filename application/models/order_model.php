<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('order'));
    }
    
    public function GetDataList(){
        $this->db->select('order.*');
        $this->db->select('user.nama as nama_user');
        $this->db->select('produk.nama as nama_produk');
        $this->db->select('data_customer.nama as nama_customer');
        $this->db->join('user', 'user.id=order.id_user', 'left');
        $this->db->join('produk', 'produk.id=order.id_produk', 'left');
        $this->db->join('data_customer', 'data_customer.id=order.id_customer', 'left');
        $data = $this->db->get('order')->result();
        
        return($data);
    }
        
    public function GetDataById($id){
        return($this->db->get_where('order', array('id'=>$id))->row());
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('order')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('order', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('order', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('order', array('id'=>$id)));
    }
}
