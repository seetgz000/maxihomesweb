<?php

class Base_model extends CI_Model {

    function __construct() {
        parent::__construct();

        $this->table_name = "";
    }

    function insert($data) {

        $source = "";
        $source_id = 0;
        if (isset($this->session->userdata("user")['nanny_id'])) {
            $source = "nanny";
            $source_id = $this->session->userdata("user")['nanny_id'];
            
        } elseif (isset($this->session->userdata("user")['user_id'])) {
            $source = 'user';
            $source_id = $this->session->userdata("user")['user_id'];
            
        }else{
            $source = 'admin';
            $source_id = $this->session->userdata("user")['admin_id'];
            
        }
        
        $data['created_user'] = $source_id;
        $data['created_user_type'] = $source;
        
        $this->db->insert($this->table_name, $data);
        
        return $this->db->insert_id();
    }

    function edit() {
        
    }
    
    function get_sources($table_id){
        $sql = "SELECT "
               . "CASE WHEN created_user_type = 'service_provider' THEN (SELECT username FROM service_provider WHERE service_provider_id = ".$this->table_name.".created_user) "
               . "WHEN created_user_type = 'user' THEN (SELECT username FROM user WHERE user_id = ".$this->table_name.".created_user) "
               . "WHEN created_user_type = 'admin' THEN (SELECT username FROM admin WHERE admin_id = ".$this->table_name.".created_user) "
               . "ELSE '' END as created_username, "
               . "CASE WHEN modified_user_type = 'service_provider' THEN (SELECT username FROM service_provider WHERE service_provider_id = ".$this->table_name.".modified_user) "
               . "WHEN modified_user_type = 'user' THEN (SELECT username FROM user WHERE user_id = ".$this->table_name.".modified_user) "
               . "WHEN modified_user_type = 'admin' THEN (SELECT username FROM admin WHERE admin_id = ".$this->table_name.".modified_user) "
               . "ELSE '' END as modified_username "
               . "FROM ".$this->table_name." "
               . "WHERE ".$this->table_name."_id = ? "; 
       $result = $this->db->query($sql,array($table_id))->result_array();
       
       return $result[0];
    }
    
    function update($table_id,$data){
        
        $source = "";
        $source_id = 0;
        if (isset($this->session->userdata("user")['nanny_id'])) {
            $source = "nanny";
            $source_id = $this->session->userdata("user")['nanny_id'];
            
        } elseif (isset($this->session->userdata("user")['user_id'])) {
            $source = 'user';
            $source_id = $this->session->userdata("user")['user_id'];
            
        }else{
            $source = 'admin';
            $source_id = $this->session->userdata("user")['admin_id'];
            
        }
        
        $data['modified_user'] = $source_id;
        $data['modified_user_type'] = $source;
        $data['modified_date'] = DATE("Y-m-d h:i:s");
        
        $this->db->where($this->table_name."_id",$table_id);
        $this->db->update($this->table_name,$data);
    }

}
