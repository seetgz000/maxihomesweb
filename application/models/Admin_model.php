<?php

class Admin_model extends CI_Model{
    
    function __construct(){
        parent::__construct();
        
        $this->table_name = "admin";
    }
    function get_all(){
        $sql = "SELECT admin.*,admin_role.role as role "
                . "FROM "
                . "admin LEFT JOIN admin_role "
                . "ON "
                . "admin.role_id = admin_role.admin_role_id "
                . "WHERE deleted = 0";
        $users = $this->db->query($sql)->result_array();
        
        return $users;
    }
    
    function get_where($where){
        
        $where['deleted'] = '0';
        $this->db->select("admin.*, admin_role.role as role ");
        $this->db->from("admin");
        $this->db->join('admin_role','admin.role_id = admin_role.admin_role_id','left');
        $this->db->where($where);
        $users = $this->db->get()->result_array();
        
        return $users;
    }
    
    public function edit($admin_id, $data){
        $this->db->where("admin_id", $admin_id);
        $this->db->update("admin", $data);
    }
    
    
}