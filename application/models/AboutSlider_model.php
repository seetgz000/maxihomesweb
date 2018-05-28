<?php 

class AboutSlider_model extends CI_Model{

    // function get_all(){
    //     return $this->db->get("about_slider")->result_array();
    // }

    function get_all(){
        $this->db->select('*, location.name as location');
        $this->db->from('about_slider');
        $this->db->join('location', 'about_slider.about_slider_id = location.location_id', 'left');

        $query = $this->db->get();

        return $query->result_array();
    }
    function add($data){
        $this->db->insert("about_slider",$data);

    }

    public function get_where($where) {
        $this->db->select('*, location.name as location');
        $this->db->from('about_slider');
        $this->db->join('location', 'about_slider.about_slider_id = location.location_id', 'left');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function edit($about_slider_id,$data){
        $this->db->where("about_slider_id",$book_id);
        $this->db->update("about_slider",$data);
    }

}
