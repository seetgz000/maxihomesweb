<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AboutSlider extends CI_Controller {

    function __construct() {
        parent::__construct();

        if($this->session->userdata("user_type") != 'admin'){

    
            redirect("Access/logout",'refresh');
        }

        $this->load->model("Access_model");
        $this->load->model("AboutSlider_model");
    }


    function all() {

            $this->page_data['about_slider'] = $this->AboutSlider_model->get_all();
            $this->load->view("admin/header", $this->page_data);
            $this->load->view("admin/about_slider/all");
            $this->load->view("admin/footer");      
    }

    function getAboutSlider(){
        $about_slider =  $this->AboutSlider_model->get_where(array(
            'about_slider_id' => $this->input->post("about_slider_id")
        ))[0];
    }

    function details($about_slider_id) {
        $about_slider = $this->AboutSlider_model->get_where(array(
            "about_slider_id" => $about_slider_id
        ));

        if (!count($about_slider)) {
            die("404");
        }

        $this->page_data['about_slider'] = $about_slider[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/about_slider/details");
        $this->load->view("admin/footer");
    }

    function add() {

      
        $page_data = array();
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/slider/"
            );
            $this->load->library("upload",$config);
            $this->load->model("AboutSlider_model");

            $data = array(
                'title' => $this->input->post('title'),
                "link" => $this->input->post("link")
            );

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/slider/".$this->upload->data()['file_name'];

                    $this->AboutSlider_model->add($data);
                    redirect("AboutSlider/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }
           
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/about_slider/add");
        $this->load->view("admin/footer");
    }

    function edit($about_slider_id) {
        $this->load->model("AboutSlider_model");
        $page_data = array(
            'about_slider' => $this->AboutSlider_model->get_where(array(
                'about_slider_id' => $about_slider_id
            ))[0]
        );
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/slider/"
            );
            $this->load->library("upload",$config);
            

            $data = array(
                "title" => $this->input->post("title"),
                "link" => $this->input->post("link")
            );
            $this->AboutSlider_model->edit($about_slider_id,$data);

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/slider/".$this->upload->data()['file_name'];

                    $this->AboutSlider_model->edit($about_slider_id,$data);
                    redirect("AboutSlider/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }else{
                redirect("AboutSlider/all",'redirect');
            }
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/about_slider/edit");
        $this->load->view("admin/footer");
    }

    function delete($about_slider_id) {
        $this->db->where("about_slider_id",$about_slider_id);
        $this->db->delete("about_slider");
        redirect("AboutSlider/all", "refresh");
    }
    
    function logout(){
        $this->Access_model->logout();
        
        echo 'ok';
    }


}
