<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

    function __construct() {
        parent::__construct();

        if($this->session->userdata("user_type") != 'admin'){

    
            redirect("Access/logout",'refresh');
        }

        $this->load->model("Access_model");
        $this->load->model("Location_model");

      
    }


    function all() {

            $this->page_data['location'] = $this->Location_model->get_all();
            $this->load->view("admin/header", $this->page_data);
            $this->load->view("admin/location/all");
            $this->load->view("admin/footer");      
    }

    function getLocation(){
        $location =  $this->Location_model->get_where(array(
            'location_id' => $this->input->post("location_id")
        ))[0];
    }

    function details($location_id) {
        $location = $this->Location_model->get_where(array(
            "location_id" => $location_id
        ));

        if (!count($location)) {
            die("404");
        }

        $this->page_data['location'] = $location[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/location/details");
        $this->load->view("admin/footer");
    }

    function add() {

      
        $page_data = array();
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "gif|png|jpg|jpeg",
                "upload_path" => "./images/location/",
                "path" => "/images/location/"
            );
            $this->load->library("upload",$config);
            $this->load->model("Location_model");

            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'description' => $this->input->post('description')
            );

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = $config['path'].$this->upload->data()['file_name'];

                    $this->Location_model->add($data);
                    redirect("Location/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }
           
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/location/add");
        $this->load->view("admin/footer");
    }

    function edit($location_id) {
        $this->load->model("Location_model");
        $page_data = array(
            'location' => $this->Location_model->get_where(array(
                'location_id' => $location_id
            ))[0]
        );
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "gif|png|jpg|jpeg",
                "upload_path" => "./images/location/",
                "path" => "/images/location/"
            );
            $this->load->library("upload",$config);
            

            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'description' => $this->input->post('description')
            );
            
            $this->Location_model->edit($location_id,$data);

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = $config['path'].$this->upload->data()['file_name'];

                    $this->Location_model->edit($location_id,$data);
                    redirect("Location/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }else {
                redirect("Location/all",'redirect');
            }
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/location/edit");
        $this->load->view("admin/footer");
    }

    function delete($location_id) {
        $this->db->where("location_id",$location_id);
        $this->db->delete("location");
        redirect("Location/all", "refresh");
    }
    
    function logout(){
        $this->Access_model->logout();
        
        echo 'ok';
    }


}
