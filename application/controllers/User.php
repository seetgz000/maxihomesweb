<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();

        
        if($this->session->userdata("user_type") != 'admin'){
            redirect("Access/logout",'refresh');
        }

        $this->load->model("User_model");
    }

   
    function all() {

        $this->page_data['users'] = $this->User_model->get_all();

        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/User/all");
        $this->load->view("admin/footer");
    }

    public function user_details($user_id) {

        $where = array(
            "user_id" => $user_id
        );

        $user = $this->User_model->get_where($where);

        $this->load->model("Device_model");
        $this->load->model("Books_model");
        $sql = "SELECT books.* from books WHERE books_id NOT IN (SELECT books_id FROM user_books WHERE user_id = ?) ";
       

        $this->page_data["user"] = $user[0];
        $this->page_data['user_device'] = $this->Device_model->get_where(array(
            "user_id" => $user_id
        ));
        $this->page_data['user_books'] = $this->Books_model->get_by_user($user_id);
        $this->page_data['books'] = $this->db->query($sql,array($user_id))->result_array();

if($_POST){
    $this->db->insert("user_books",array(
        "user_id" => $user_id,
        "books_id" => $this->input->post("book")
    ));

    redirect("User/user_details/".$user_id,"refresh");
}
        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/User/details");
        $this->load->view("admin/footer");
    }
    
    function delete_device($user_device_id,$user_id){
        $this->db->where(array(
            "user_device_id" => $user_device_id
        ));

        $this->db->delete("user_device");
        redirect("User/user_details/".$user_id,"refresh");
    }
        
    function add(){
        $this->load->model("Access_model");
        $this->page_data = array();
    if($_POST){
       $extra_data =array(
           "contact_person" => $this->input->post("contact_person"),
           "contact_number" => $this->input->post("contact_number"),
           "address" => $this->input->post("address"),
           "expiry" => $this->input->post('expiry'),
           "email" => $this->input->post("email")
       );
        $result = $this->Access_model->register("user",$this->input->post("username"),$this->input->post("password"),$extra_data);

            if($result){
                redirect("User/all/", "refresh");
            }else{
                $this->page_data['error'] = "username exists";
            }
           
        }
    
    $this->load->view("admin/header", $this->page_data);
    $this->load->view("admin/User/add");
    $this->load->view("admin/footer");

    }

    function delete_user_book($user_book_id,$user_id){
        $this->db->where(array(
            "user_books_id" => $user_book_id
        ));

        $this->db->delete("user_books");
        redirect("User/user_details/".$user_id,"refresh");
    }
    public function edit($user_id){
        $where = array(
            "user_id" => $user_id
        );

        $user = $this->User_model->get_where($where);

        $this->load->model("Device_model");

        $this->page_data["user"] = $user[0];
        $this->page_data['user_device'] = $this->Device_model->get_where(array(
            "user_id" => $user_id
        ));
        
        if($_POST){
            $input = $this->input->post();
            
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
                    $data = array(
                        'username' => $this->input->post("username"),
                        "allowed_devices" => $this->input->post("allowed_devices"),
                        "contact_person" => $this->input->post("contact_person"),
                        "contact_number" => $this->input->post("contact_number"),
                        "address" => $this->input->post("address"),
                        "expiry" => $this->input->post('expiry'),
                        "email" => $this->input->post("email"),
                        "password" => $new_password['password'],
                        "salt" => $new_password['salt']
                    );
                    
                    $where = array(
                        "user_id" => $user_id
                    );
                    
                    $this->User_model->update_where($where, $data);
                } else {
                    $data = array(
                        'username' => $this->input->post("username"),
                        "allowed_devices" => $this->input->post("allowed_devices"),
                        "contact_person" => $this->input->post("contact_person"),
                        "contact_number" => $this->input->post("contact_number"),
                        "address" => $this->input->post("address"),
                        "expiry" => $this->input->post('expiry'),
                        "email" => $this->input->post("email")
                    );
                    
                    $where = array(
                        "user_id" => $user_id
                    );
                    
                    $this->User_model->update_where($where, $data);
                }

                if (!isset($this->page_data['error'])) {
                    redirect("User/user_details/" . $user_id, "refresh");
                }
            }
           
        }
        
        $this->load->view("admin/header", $this->page_data);
        $this->load->view("admin/User/edit");
        $this->load->view("admin/footer");
    }

    public function delete($user_id){
       $this->db->where("user_id",$user_id);
        
       $this->db->delete('user');
        
        redirect("user/all", "refresh");
    }
    
}
