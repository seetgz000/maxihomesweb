<?php

class Access_model extends CI_Model{
    
    function login($target_table,$username,$password){
        $sql = "SELECT * FROM ". $target_table." "
                . "WHERE username = ? AND password = SHA2(CONCAT(salt,?),256) AND deleted = 0";
        
        $result = $this->db->query($sql,array(
            $username,
            $password
        ))->result_array();
        
        if(count($result)){
            return $result[0];
        }
        
        return false;
    }
    
    function logout(){
        $this->session->sess_destroy();
    }
    
    function register($target_table,$username,$password,$extra_data){
        
       $user = $this->db->get_where($target_table,array(
           "username" => $username
       ))->result_array();
       
       if(count($user)){
           return false;
       }
       
       $user_data = $extra_data;
       $user_data['username'] = $username;
       
       $encrypted_data = $this->encrypt_password($password);
       $user_data['password'] = $encrypted_data['password'];
       $user_data['salt'] = $encrypted_data['salt'];
       
       $this->db->insert($target_table,$user_data);
       $id = $this->db->insert_id();
       if($id){
        return $id;
       }else{
           return false;
       }
       
    }
    
    function encrypt_password($password){
        $salt = rand(111111,999999);
        $new_password = hash("sha256",$salt.$password);
        
        return array(
            "salt" => $salt,
            "password" => $new_password
        );
    }

    function update_admin_token($admin_id){
        $token = $this->get_token();
        $this->db->where("admin_id",$admin_id);
        $this->db->update("admin",array(
            "token" => $token
        ));

        return $token;
    }

    function get_token(){
        $str = 'qwertyuiopasdfghjklzxcvbnm12345689';
        return substr(str_shuffle($str.strtotime('now')),0,10);
    }

    function update_device_token($user_id,$device_id,$limit){
        $devices = $this->db->get_where("user_device",array(
            "user_id" => $user_id,
            "device_id" => $device_id
        ))->result_array();

        if(count($devices)){
            if($devices[0]['active'] == 0){
                die(json_encode(array(
                    "status" => "ERROR",
                    "message" => "device deactivated"
                )));
            }
            $device = $devices[0];

            $this->db->where("user_device_id",$device['user_device_id']);
            $this->db->delete("user_device_token");

            $token1 = $this->get_token();
            $token2 = $this->get_token();
            $token3 = $this->get_token();

     // $this->db->where("user_device_id",$device['user_device_id']);
            $this->db->insert("user_device_token",array(
                "user_device_id" => $device['user_device_id'],
                "token" => $token1,
                "type" => "SHORT"
            ));
            $this->db->insert("user_device_token",array(
                "user_device_id" => $device['user_device_id'],
                "token" => $token2,
                "type" => "MEDIUM"
            ));
            $this->db->insert("user_device_token",array(
                "user_device_id" => $device['user_device_id'],
                "token" => $token3,
                "type" => "LONG"
            ));
            

            $device_token = $this->db->get_where('user_device_token',array(
                "user_device_id" => $device['user_device_id']
            ))->result_array();
            return $device_token;
        }

        $devices = $this->db->get_where("user_device",array(
            "user_id" => $user_id
        ))->result_array();

        if(count($devices) < $limit){ // INSERT NEW DEVICE
            
            $new_device = array(
                "user_id" => $user_id,
                "device_id" => $device_id
            );

            $this->db->insert("user_device",$new_device);
            $device_id = $this->db->insert_id();

            $this->db->insert("user_device_token",array(
                "user_device_id" => $device_id,
                "token" => $this->get_token(),
                "type" => "SHORT"
            ));
            $this->db->insert("user_device_token",array(
                "user_device_id" => $device_id,
                "token" => $this->get_token(),
                "type" => "MEDIUM"
            ));
            $this->db->insert("user_device_token",array(
                "user_device_id" => $device_id,
                "token" => $this->get_token(),
                "type" => "LONG"
            ));
            return $this->db->get_where('user_device_token',array(
                "user_device_id" => $device_id,
            ))->result_array();;
        }

        return false;
    }

    function get_user_from_token($token,$device_id){
        $sql = "SELECT user_device.user_id, user.allowed_devices, user_device.user_device_id 
                    from user_device_token 
                    left join 
                    user_device on user_device_token.user_device_id = user_device.user_device_id 
                    left join user on user.user_id = user_device.user_id  
                    WHERE user_device_token.token = ? AND user_device.device_id = ?
                    ";

        $devices = $this->db->query($sql,array($token, $device_id))->result_array();

        if(count($devices)){
            return $devices[0];
        }else{
            return false;
        }
    }
}
