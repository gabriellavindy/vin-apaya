<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('produk'));
    }
    
    public function GetDataList(){
        $this->db->select('produk.*');
        $this->db->select('kualitas.nama as nama_kualitas');
        $this->db->select('type_foto.nama as type_foto');
        $this->db->join('kualitas', 'kualitas.id=produk.id_kualitas', 'left');
        $this->db->join('type_foto', 'type_foto.id=produk.id_type', 'left');
        $data = $this->db->get('produk')->result();
        
        return($data);
    }
        
    public function GetKualitasList(){
        return($this->db->order_by('nama','asc')->get('kualitas')->result());
    }
        
    public function GetTypeList(){
        return($this->db->order_by('nama','asc')->get('type_foto')->result());
    }
        
    public function GetDataById($id){
        return($this->db->get_where('produk', array('id'=>$id))->row());
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('produk')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('produk', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('produk', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('produk', array('id'=>$id)));
    }
}
