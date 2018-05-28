<?php

class Court_model extends CI_Model {
    
    public function get_all(){
        $this->db->select('court.*, user.username AS added_by');
        $this->db->from('court');
        $this->db->join('user', 'court.added_by = user.user_id', 'left');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }

}
