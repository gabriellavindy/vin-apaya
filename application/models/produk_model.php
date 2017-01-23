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
        $this->db->select('jenis_produk.nama as nama_jenis');
        $this->db->join('kualitas', 'kualitas.id=produk.id_kualitas', 'left');
        $this->db->join('jenis_produk', 'jenis_produk.id=produk.id_jenis', 'left');
        $data = $this->db->get('produk')->result();
        
        return($data);
    }
    
    public function GetDataByJenis($id_jenis){
        $this->db->select('produk.*');
        $this->db->select('kualitas.nama as nama_kualitas');
        $this->db->select('jenis_produk.id as id_jenis, jenis_produk.nama as nama_jenis');
        $this->db->join('kualitas', 'kualitas.id=produk.id_kualitas', 'left');
        $this->db->join('jenis_produk', 'jenis_produk.id=produk.id_jenis', 'left');
        $this->db->where('id_jenis', $id_jenis);
        $data = $this->db->get('produk')->result();
        
        return($data);
    }
    
    public function GetDataByKualitas($id_jenis, $id_kualitas=null){
        $this->db->select('produk.*');
        $this->db->select('kualitas.nama as nama_kualitas');
        $this->db->select('jenis_produk.id as id_jenis, jenis_produk.nama as nama_jenis');
        $this->db->join('kualitas', 'kualitas.id=produk.id_kualitas', 'left');
        $this->db->join('jenis_produk', 'jenis_produk.id=produk.id_jenis', 'left');
        $this->db->where('id_jenis', $id_jenis);
        $this->db->where('id_kualitas', $id_kualitas);
        $data = $this->db->get('produk')->row();
        
        return($data);
    }
        
    public function GetKualitasList(){
        return($this->db->order_by('nama','asc')->get('kualitas')->result());
    }
        
    public function GetJenisList(){
        return($this->db->order_by('nama','asc')->get('jenis_produk')->result());
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
