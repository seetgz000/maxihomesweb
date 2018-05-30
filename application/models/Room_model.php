<?php 

class Room_model extends CI_Model{

    function get_all(){
        $this->db->select('room.*,
            location.name as location,
            room_price.*,
            rental_condition.*');
        $this->db->from('room');
        $this->db->join('location', 'room.location_id = location.location_id');
        $this->db->join('room_price', 'room.room_id = room_price.room_id');
        $this->db->join('rental_condition', 'room.room_id = rental_condition.room_id');

        $query = $this->db->get();

        return $query->result_array();
    }
    function add($data){
        $this->db->insert("room",$data);

        return $this->db->insert_id();
    }

    public function get_where($where) {
        $this->db->select('room.*,
            location.location_id,
            location.name as location,
            room_price.*,
            rental_condition.*');
        $this->db->join('location', 'room.location_id = location.location_id');
        $this->db->join('room_price', 'room.room_id = room_price.room_id');
        $this->db->join('rental_condition', 'rental_condition.room_id = room.room_id');

        $room = $this->db->get_where("room",$where)->result_array();

        for($i = 0; $i < count($room); $i++){
            $tag = $this->db->get_where("tag",array(
                "room_id" => $room[$i]['room_id']
            ))->result_array();
            $room[$i]['tag'] = $tag;
        }

        return $room;


    }

    function edit($room_id,$data){
        $this->db->where("room_id",$room_id);
        $this->db->update("room",$data);
    }

    function addTag($room_id,$tag){
        for($i = 0; $i < count($tag); $i++){
            $this->db->insert("tag",array(
                "tag_name" => $tag[$i],
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
    function editTag($room_id,$tag){
        $this->db->where("room_id",$room_id);
        $this->db->delete("tag");
        $this->addTag($room_id,$tag);
    }

    function editPrice ($room_id,$priceData) {
        $this->db->where("room_id",$room_id);
        $this->db->update("room_price",$priceData);
    }
    
    function editCondition ($room_id,$conditionData) {
        $this->db->where("room_id",$room_id);
        $this->db->update("rental_condition",$conditionData);
    }

}