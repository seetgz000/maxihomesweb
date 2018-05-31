<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("AboutSlider_model");
        $this->load->model("Event_model");
        $this->load->model("Location_model");
        $this->load->model("Room_model");
        $this->page_data = array();
    }

    function index(){
        $this->page_data["about_slider"] = $this->AboutSlider_model->get_all();
        $this->page_data["event"] = $this->Event_model->get_all();
        $this->page_data["location"] = $this->Location_model->get_all();

        $this->load->view("main/header");
        $this->load->view("main/index" , $this->page_data);
        $this->load->view("main/footer");
    }
    function rooms(){
        $this->page_data["location"] = $this->Location_model->get_all();
        $this->page_data["room"] = $this->Room_model->get_all();

        $this->load->view("main/header");
        $this->load->view("main/rooms" , $this->page_data);
        $this->load->view("main/footer");
    }
    function roomDetails($room_id){
        $room = $this->Room_model->get_where(array(
            "room.room_id" => $room_id
        ));

        if (!count($room)) {
            die("404");
        }

        $this->page_data['room'] = $room[0];

        $this->load->view("main/header");
        $this->load->view("main/room_details" , $this->page_data);
        $this->load->view("main/footer");
    }
}