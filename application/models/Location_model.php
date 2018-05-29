<?php 

class Location_model extends CI_Model{

    function get_all(){
        $this->db->select('*');
        $this->db->from('location');

        $query = $this->db->get();

        return $query->result_array();
    }
    function add($data){
        $this->db->insert("location",$data);

    }

    public function get_where($where) {
        $this->db->select('*');
        $this->db->from('location');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function edit($location_id,$data){
        $this->db->where("location_id",$location_id);
        $this->db->update("location",$data);
    }

}
