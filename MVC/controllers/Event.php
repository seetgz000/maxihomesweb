<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->page_data = array();
        $this->load->model("Event_model");
        $this->load->model("Court_model");
        $this->load->model("User_model");
    }

    public function index() {

        $this->page_data['events'] = $this->Event_model->get_all();

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/Post/Event/all');
        $this->load->view('admin/footer');
    }

    public function add() {

        if ($_POST) {
            $input = $this->input->post();

            if ($_POST['approved']) {
                $input['approved'] = 1;
            } else {
                $input['approved'] = 0;
            }

            if (!empty($_FILES['banner']['name'])) {
                $config = array(
                    "allowed_types" => "gif|png|jpg|jpeg",
                    "upload_path" => "./images/Banner/",
                    "path" => "/images/Banner/");

                $this->load->library("upload", $config);
                if ($this->upload->do_upload("banner")) {
                    $banner = $config['path'] . $this->upload->data()['file_name'];
                } else {
                    die(json_encode(array(
                        "status" => false,
                        "message" => $this->upload->display_errors()
                    )));
                }
            } else {
                die(json_encode(array(
                    "status" => false,
                    "message" => "Please upload a banner."
                )));
            }
            
            $input['banner'] = $banner;
            
            $this->Event_model->add($input);
        }

        $this->page_data['courts'] = $this->Court_model->get_all();
        $this->page_data['users'] = $this->User_model->get_all();

        $this->load->view('admin/header', $this->page_data);
        $this->load->view('admin/Post/Event/add');
        $this->load->view('admin/footer');
    }

}
