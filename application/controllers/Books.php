<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("Access_model");
        $this->load->model("Admin_model");
        $this->load->model("User_model");
        $this->load->model("Books_model");

      
    }


    function all() {

        // if($this->session->userdata("user_type") == "admin"){
            $this->page_data['books'] = $this->Books_model->get_all();
            $this->load->view("admin/header", $this->page_data);
            $this->load->view("admin/books/all");
            $this->load->view("admin/footer");
        // }else{
        //     $this->page_data['books'] = $this->Books_model->get_by_user($this->session->userdata("user")['user_id']);
        //     $this->load->view("admin/books/new_design",$this->page_data);
        // }


        
       
    }

    function getBook(){
        $book =  $this->Books_model->get_where(array(
            'books_id' => $this->input->post("book_id")
        ))[0];

        $book['file'] = site_url(). $book['file'];
        die(json_encode(array(
            "status" => "SUCCESS",
            "data" => $book
        )));
    }

    function view($book_id){
        $this->load->model("Books_model");
        $page_data = array(
            'book' => $this->Books_model->get_where(array(
                'books_id' => $book_id
            ))[0]
        );
        $data = array();
       

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/books/view");
        $this->load->view("admin/footer");
    }

    function add() {

      
        $page_data = array();
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./images/thumbnail/"
            );
            $this->load->library("upload",$config);
            $this->load->model("Books_model");

            $data = array(
                "name" => $this->input->post("name"),
                'description' => $this->input->post('description'),
                "file" => $this->input->post("file")
            );

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/thumbnail/".$this->upload->data()['file_name'];

                    $this->Books_model->add($data);
                    redirect("Books/all",'redirect');
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }
           
           

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/books/add");
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

    function edit($book_id) {
        $this->load->model("Books_model");
        $page_data = array(
            'book' => $this->Books_model->get_where(array(
                'books_id' => $book_id
            ))[0]
        );
        $data = array();
        if ($_POST) {
            $config = array(
                "allowed_types" => "*",
                "upload_path" => "./files/"
            );
            $this->load->library("upload",$config);
            

            $data = array(
                "name" => $this->input->post("name"),
                "file" => $this->input->post("file"),
                "description" => $this->input->post("description")
            );
            $this->Books_model->edit($book_id,$data);

            if(!empty($_FILES['thumbnail']['name'])){
                if($this->upload->do_upload("thumbnail")){
                    $data['thumbnail'] = "/images/thumbnail/".$this->upload->data()['file_name'];

                    $this->Books_model->edit($book_id,$data);
                }else{
                     $page_data['error'] = $this->upload->display_errors();
                }
            }
           
            redirect("Books/all",'redirect');

           
        }

        $this->load->view("admin/header",$page_data);
        $this->load->view("admin/books/edit");
        $this->load->view("admin/footer");
    }

    function delete($book_id) {
        $this->db->where("books_id",$book_id);
        $this->db->delete("books");
        redirect("Books/all", "refresh");
    }
    
    function logout(){
        $this->Access_model->logout();
        
        echo 'ok';
    }


}
