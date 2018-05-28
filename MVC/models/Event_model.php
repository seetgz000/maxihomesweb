<?php

class Event_model extends CI_Model {

    public function get_all() {
        $this->db->select('court_events.*, user.username AS created_by, court.name AS court');
        $this->db->from('court_events');
        $this->db->join('user', 'court_events.created_by = user.user_id', 'left');
        $this->db->join('court', 'court_events.court_id = court.court_id', 'left');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function add($input) {
        $required = array(
            "title",
            "created_by",
            "court_id",
            "date",
            "time"
        );

        $error = false;

        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                $error = true;
                $error_message = "Please do not leave " . $field . " empty";
            }
        }

        if ($error) {
            die(json_encode(array(
                "status" => false,
                "message" => $error_message
            )));
        } else {
            $data = array(
                "title" => $input['title'],
                "banner" => $input['banner'],
                "court_id" => $input['court_id'],
                "created_by" => $input['created_by'],
                "date" => $input['date'],
                "time" => $input['time'],
                "link" => $input['link'],
                "approved" => $input['approved'],
            );

            $this->db->insert('court_events', $data);

            if ($this->db->affected_rows() == 0) {
                die(json_encode(array(
                    "status" => false,
                    "message" => "Insert Error"
                )));
            } else {
                return $this->db->insert_id();
            }
        }
    }
}