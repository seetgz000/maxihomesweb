<?php 

class Event_model extends CI_Model{

    function get_all(){
        $this->db->select('*');
        $this->db->from('event');

        $query = $this->db->get();

        return $query->result_array();
    }
    function add($data){
        $this->db->insert("event",$data);

    }

    public function get_where($where) {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function edit($event_id,$data){
        $this->db->where("event_id",$event_id);
        $this->db->update("event",$data);
    }

}
