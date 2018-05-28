<?php

class User_model extends CI_Model {
    
    public function get_all(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('deleted = 0');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }

}
