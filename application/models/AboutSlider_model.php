<?php 

class AboutSlider_model extends CI_Model{

    function get_all(){
        $this->db->select('*');
        $this->db->from('about_slider');

        $query = $this->db->get();

        return $query->result_array();
    }
    function add($data){
        $this->db->insert("about_slider",$data);

    }

    public function get_where($where) {
        $this->db->select('*');
        $this->db->from('about_slider');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

    function edit($about_slider_id,$data){
        $this->db->where("about_slider_id",$about_slider_id);
        $this->db->update("about_slider",$data);
    }

}
