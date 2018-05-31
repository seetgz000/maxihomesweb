<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();

        // if($this->session->userdata("user_type") != 'admin'){

    
        //     redirect("Access/logout",'refresh');
        // }
        $this->load->model("Access_model");
        $this->load->model("Admin_model");
    }

    function index(){
        $result = $this->Admin_model->get_all();

        $page_data['users'] = $result;
        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/admin/all");
        $this->load->view("admin/footer");
    }

    function add_user(){
        $this->load->model("Access_model");

        $extra_data = array();
        $result = $this->Access_model->register("user",$this->input->post("username"),$this->input->post("password"),$extra_data);

        if($result){
            die(json_encode(array(
                "status" => "SUCCESS"
            )));
        }else{
            die(json_encode(array(
                "status" => "ERROR",
                "message" => "username exists"
            )));
        }

    }

    function all_user(){
        $result = $this->User_model->get_all();

        die(json_encode(array(
            "status" => "SUCCESS",
            "data" => $result
        )));
    }

    function update_user(){
        $update_data = array(
            "allowed_devices" => $this->input->post("allowed_devices")
        );

        $this->User_model->update_where(array(
            "user_id" => $this->input->post("user_id")
        ),$update_data);

        if($this->input->post("password") != ""){
            $update_data = $this->Access_model->encrypt_password($this->input->post("password"));

            $this->User_model->update_where(array(
                "user_id" => $this->input->post("user_id")
            ),$update_data);
        }

        die(json_encode(array(
            "status" => "SUCCESS",
            
        )));
    }

    function user_device(){
        $result = $this->db->get_where("user_device",array(
            "user_id" => $this->input->post("user_id")
        ))->result_array();

        die(json_encode(array(
            "status" => "SUCCESS",
            "data" => $result
        )));
    }

    function all_user_device(){
        $result = $this->db->get_where("user_device"
        )->result_array();

        die(json_encode(array(
            "status" => "SUCCESS",
            "data" => $result
        )));
    }

    function update_user_device(){
        $this->db->where(array(
            "user_id" => $this->input->post("user_id"),
            "device_id" => $this->input->post("device_id")
        ));
        $this->db->update('user_device',array(
            'active' => $this->input->post("active")
        ));

        die(json_encode(array(
            "status" => "SUCCESS"
        )));
    }

    function delete_user_device(){
        $this->db->where(array(
            'user_id' => $this->input->post("user_id"),
            "device_id" => $this->input->post("device_id")
        ));

        $this->db->delete("user_device");
        
        die(json_encode(array(
            "status" => "SUCCESS"
        )));
    }

    function all_admin(){
        $result = $this->Admin_model->get_all();

        $page_data['users'] = $result;
        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/admin/all");
        $this->load->view("admin/footer");
    }

    function update_admin(){
        $update_data = array(
            "allowed_devices" => $this->input->post("allowed_devices")
        );

        $this->User_model->update_where(array(
            "user_id" => $this->input->post("user_id")
        ),$update_data);

        die(json_encode(array(
            "status" => "SUCCESS",
            
        )));
    }
/*
    function add(){  
        if ($_POST) {
            $this->load->model("Access_model");
            $extra_data = array(
                "contact" => $this->input->post("contact"),
                "email" => $this->input->post("email"),
                "role_id" => $this->input->post("role")
            );
            $result = $this->Access_model->register('admin', $this->input->post("username"), $this->input->post("password"), $extra_data);

            if($result){
                die(json_encode(array(
                    "status" => "SUCCESS"
                )));
            }
            die(json_encode(array(
                "status" => "ERROR",
                "message" => "Username taken"
            )));
        }
    }
    */

    function all() {

        $this->page_data['users'] = $this->Admin_model->get_all();

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/admin/all");
        $this->load->view("admin/footer");
    }

    function add() {

        $this->page_data['roles'] = $this->db->get_where("admin_role", array(
                    "admin_role_id <= " => $this->session->userdata("user")['role_id']
                ))->result_array();

        $this->page_data['input'] = $_POST;

        if ($_POST) {
            $this->load->model("Access_model");
            $extra_data = array(
                "contact" => $this->input->post("contact"),
                "email" => $this->input->post("email"),
                "role_id" => $this->input->post("role")
            );
            $this->Access_model->register('admin', $this->input->post("username"), $this->input->post("password"), $extra_data);

            redirect("Admin/all", "refresh");
        }

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/admin/add");
        $this->load->view("admin/footer");
    }

    function details($admin_id) {
        $user = $this->Admin_model->get_where(array(
            "admin_id" => $admin_id
        ));

        if (!count($user)) {
            die("404");
        }

        $this->page_data['user'] = $user[0];

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/admin/details");
        $this->load->view("admin/footer");
    }

    function edit($admin_id) {

        $user = $this->Admin_model->get_where(array(
            "admin_id" => $admin_id
        ));

        if ($_POST) {

            $error = false;
            $change_password = false;

            if ($this->input->post("password") != "") {
                if ($this->input->post("password") == $this->input->post("password2")) {
                    $this->load->model("Access_model");

                    $new_password = $this->Access_model->encrypt_password($this->input->post("password"));

                    $change_password = true;
                } else {
                    $error = true;
                    $this->page_data['error'] = "Passwords do not match";
                }
            }

            if (!$error) {
                if ($change_password) {
                    $this->Admin_model->edit($admin_id, array(
                        "username" => $this->input->post("username"),
                        "email" => $this->input->post("email"),
                        "contact" => $this->input->post("contact"),
                        "password" => $new_password['password'],
                        "salt" => $new_password['salt']
                    ));
                } else {
                    $this->Admin_model->edit($admin_id, array(
                        "username" => $this->input->post("username"),
                        "email" => $this->input->post("email"),
                        "contact" => $this->input->post("contact"),
                    ));
                }

                if (!isset($this->page_data['error'])) {
                    redirect("Admin/details/" . $admin_id, "refresh");
                }
            }
        }

        if (!count($user)) {
            die("404");
        }

        if ($this->session->userdata("user")['role_id'] < $user[0]['role_id']) {
            die("Permission Denied");
        }

        $this->page_data['user'] = $user[0];

        $this->page_data['roles'] = $this->db->get_where("admin_role", array(
                    "admin_role_id <= " => $this->session->userdata("user")['role_id']
                ))->result_array();

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/admin/edit");
        $this->load->view("admin/footer");
    }

    function delete($admin_id) {
        $this->Admin_model->edit($admin_id, array(
            "active" => 0
        ));

        redirect("Admin/all", "refresh");
    }

    
    function admin_login(){
      
        
      
    }
    
    function logout(){
        $this->Access_model->logout();
        
        echo 'ok';
    }


}
