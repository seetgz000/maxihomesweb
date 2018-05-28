<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        
        $this->load->model("Access_model");
    }
    
    function admin_login(){
        $page_data = array();
        if($this->session->has_userdata("user") && $this->session->userdata("user_type") == "admin"){
            redirect('Admin',"refresh");
        }
        
        if($_POST){
            $result = $this->Access_model->login("admin",$this->input->post("username"),$this->input->post('password'));
            
            if($result){
                $this->session->set_userdata("user_type","admin");
                $this->session->set_userdata("user",$result);

               
               redirect("Admin/index","refresh");
            }else{
                $page_data['error'] = "Invalid username / password";
            }
        }
        
        $this->load->view("access/header",$page_data);
        $this->load->view("access/login");
        $this->load->view("access/footer");
    }
    
    function logout(){
        // if($this->session->userdata("user_type") == "admin"){
        //     $redirect = "Access/admin_login";
        // }else{
        //     $redirect = "Access/";
        // }
        $this->Access_model->logout();
        redirect($redirect,'refresh');
    }

    function index(){
        $page_data = array();
        if($this->session->has_userdata("user") &&
        $this->session->userdata("user_type") == "user"
        ){
            redirect("Portal",'refresh');
        }

        if($_POST){
            $result = $this->Access_model->login("user",$this->input->post("username"),$this->input->post("password"));

            if($result){
                $this->session->set_userdata("user_type","user");
                $this->session->set_userdata("user",$result);
               redirect("Books/all","refresh");
            }else{
                $page_data['error'] = "Invalid username / password";
            }
        }

        $this->load->view("access/header",$page_data);
        $this->load->view("access/login");
        $this->load->view("access/footer");
    }
}
