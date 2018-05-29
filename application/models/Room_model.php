<?php 

class Room_model extends CI_Model{

    function get_all(){
        $this->db->select('room.*,
            tag.tag_name as tag,
            location.name as location,
            room_price.*,
            rental_condition.*');
        $this->db->from('room');
        $this->db->join('tag', 'room.room_id = tag.room_id');
        $this->db->join('location', 'room.location_id = location.location_id');
        $this->db->join('room_price', 'room.room_id = room_price.room_id');
        $this->db->join('rental_condition', 'room.room_id = rental_condition.room_id');

        $query = $this->db->get();

        return $query->result_array();
    }
    function add($data){
        $this->db->insert("room",$data);

    }

    public function get_where($where) {
        $this->db->select('room.*,
            tag.tag_name as tag,
            location.name as location,
            room_price.*,
            rental_condition.*');
        $this->db->from('room');
        $this->db->join('tag', 'room.room_id = tag.room_id');
        $this->db->join('location', 'room.location_id = location.location_id');
        $this->db->join('room_price', 'room.room_id = room_price.room_id');
        $this->db->join('rental_condition', 'room.room_id = rental_condition.room_id');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function edit($room_id,$data){
        $this->db->where("room_id",$room_id);
        $this->db->update("room",$data);
    }

    function addTag($room_id,$tag){
        for($i = 0; $i < count($tag); $i++){
            $this->db->insert("tag",array(
                "tag" => $tag[$i],
                "room_id" => $room_id
            ));
        }
    }

    function addPrice ($priceData) {
        $this->db->insert("room_price",$priceData);
    }
    
    function addCondition ($conditionData) {
        $this->db->insert("rental_condition",$conditionData);
    }

}