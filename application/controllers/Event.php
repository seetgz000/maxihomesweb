<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    function __construct() {
        parent::__construct();

        if($this->session->userdata("user_type") != 'admin'){

    
            redirect("Access/logout",'refresh');
        }

        $this->load->model("Access_model");
        $this->load->model("Event_model");      
    }


    function all() {

            $this->page_data['event'] = $this->Event_model->get_all();
            $this->load->view("admin/header", $this->page_data);
            $this->load->view("admin/event/all");
            $this->load->view("admin/footer");      
    }

    function getEvent(){
        $event =  $this->Event_model->get_where(array(
            'event_id' => $this->input->post("event_id")
        ))[0];
    }

    function details($event_id) {
        $event = $this->Event_model->get_where(array(
            "event_id" => $event_id
        ));

        if (!count($event)) {
            die("404");
        }

        $this->page_data['event'] = $event[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/event/details");
        $this->load->view("admin/footer");
    }

    function add() {

      
        $page_data = array();
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/event/"
            );
            $this->load->library("upload",$config);
            $this->load->model("Event_model");

            $data = array(
                'title' => $this->input->post('title'),
                "description" => $this->input->post("description")
            );

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/event/".$this->upload->data()['file_name'];

                    $this->Event_model->add($data);
                    redirect("Event/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }
           
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/event/add");
        $this->load->view("admin/footer");
    }

    function edit($event_id) {
        $this->load->model("Event_model");
        $page_data = array(
            'event' => $this->Event_model->get_where(array(
                'event_id' => $event_id
            ))[0]
        );
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/event/"
            );
            $this->load->library("upload",$config);
            

            $data = array(
                "title" => $this->input->post("title"),
                "description" => $this->input->post("description")
            );
            $this->Event_model->edit($event_id,$data);

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/event/".$this->upload->data()['file_name'];

                    $this->Event_model->edit($event_id,$data);
                    redirect("Event/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }else {
                redirect("Event/all",'redirect');
            }
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/event/edit");
        $this->load->view("admin/footer");
    }

    function delete($event_id) {
        $this->db->where("event_id",$event_id);
        $this->db->delete("event");
        redirect("Event/all", "refresh");
    }
    
    function logout(){
        $this->Access_model->logout();
        
        echo 'ok';
    }


}
