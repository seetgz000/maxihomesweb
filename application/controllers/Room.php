<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("Access_model");
        $this->load->model("Room_model");      
        $this->load->model("Location_model");      
    }


    function all() {

            $this->page_data['room'] = $this->Room_model->get_all();
            $this->load->view("admin/header", $this->page_data);
            $this->load->view("admin/room/all");
            $this->load->view("admin/footer");      
    }

    function getRoom(){
        $room =  $this->Room_model->get_where(array(
            'room_id' => $this->input->post("room_id")
        ))[0];
    }

    function details($room_id) {
        $room = $this->Room_model->get_where(array(
            "room.room_id" => $room_id
        ));

        if (!count($room)) {
            die("404");
        }

        $this->page_data['room'] = $room[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/room/details");
        $this->load->view("admin/footer");
    }

    function add() {

        
        $page_data = array(
            'location' => $this->Location_model->get_all()
        );
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/room/"
            );
            $this->load->library("upload",$config);

            $data = array(
                'name' => $this->input->post('name'),
                "description" => $this->input->post("description"),
                "address" => $this->input->post("address"),
                "location_id" => $this->input->post("room_location_id")
            );     
            
            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/room/".$this->upload->data()['file_name'];

                    
                    $room_id = $this->Room_model->add($data);

                    $priceData = array(
                        'room_id' => $room_id,
                        'advance_rental' => $this->input->post('advance_rental'),
                        'security_deposit' => $this->input->post('security_deposit'),
                        'utilities_deposit' => $this->input->post('utilities_deposit'),
                        'keycard_deposit' => $this->input->post('keycard_deposit')
                    );
        
                    $conditionData = array(
                        'room_id' => $room_id,
                        'rental_type' => $this->input->post('rental_type'),
                        'attached_bathroom' => $this->input->post('attached_bathroom'),
                        'building_type' => $this->input->post('building_type'),
                        'availability' => $this->input->post('availability'),
                        'minimum_tenure' => $this->input->post('minimum_tenure'),
                        'furnishing' => $this->input->post('furnishing'),
                        'beds_in_room' => $this->input->post('beds_in_room'),
                        'gender_preference' => $this->input->post('gender_preference')
                    );

                    $this->Room_model->addTag($room_id,$this->input->post('tags'));
                    $this->Room_model->addPrice($priceData);
                    $this->Room_model->addCondition($conditionData);
                    redirect("Room/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }
            
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/room/add");
        $this->load->view("admin/footer");
    }

    function edit($room_id) {
        $this->load->model("Room_model");
        $page_data = array(
            'room' => $this->Room_model->get_where(array(
                'room.room_id' => $room_id
            ))[0]
        );
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/room/"
            );
            $this->load->library("upload",$config);
            

            $data = array(
                "title" => $this->input->post("title"),
                "description" => $this->input->post("description")
            );
            $this->Room_model->edit($room_id,$data);

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/room/".$this->upload->data()['file_name'];

                    $this->Room_model->edit($room_id,$data);
                    redirect("Room/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }else {
                redirect("Room/all",'redirect');
            }
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/room/edit");
        $this->load->view("admin/footer");
    }

    function delete($room_id) {
        $this->db->where("room_id",$room_id);
        $this->db->delete("room");
        redirect("Room/all", "refresh");
    }
    
    function logout(){
        $this->Access_model->logout();
        
        echo 'ok';
    }


}
