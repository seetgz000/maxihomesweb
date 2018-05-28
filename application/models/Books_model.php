<?php 

class Books_model extends CI_Model{

    function get_by_user($user_id){
        $this->db->select("books.*,user_books_id");
        $this->db->from("user_books");
        $this->db->join("books",'user_books.books_id = books.books_id','left');
        $this->db->where("user_id",$user_id);
       $books = $this->db->get()->result_array();

       return $books;
    }

    function get_all(){
        return $this->db->get("books")->result_array();
    }
    function add($data){
        $this->db->insert("books",$data);

    }

    function get_where($cond){
        return $this->db->get_where("books",$cond)->result_array();
    }

    function edit($book_id,$data){
        $this->db->where("books_id",$book_id);
        $this->db->update("books",$data);
    }

}
