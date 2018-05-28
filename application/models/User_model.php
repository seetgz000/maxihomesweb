<?php

class User_model extends CI_Model{
    
    public function get_all(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('deleted = 0');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    function get_where($where){
        $user = $this->db->get_where("user",$where)->result_array();
       
        return $user;
    }

    function login($email,$password){
        $sql = "SELECT * FROM user WHERE email = ? AND password = SHA2(CONCAT(?,salt),256)";
        $users = $this->db->query($sql,array($email,$password))->result_array();

        if(count($users)){
            $this->db->where("user_id",$users[0]['user_id']);
            $token = $this->get_token(strtotime('now').$users[0]['user_id']);
            $this->db->update("user",array(
                'token' => $token
            ));
            $users[0]['token'] = $token;
        }
        return $users;
    }
    

    function register($email,$password){
        $randomStr = "1234567890qwertyuiopasdfghjklzxcvbnm";
        $salt = substr(str_shuffle($randomStr),0,8);

        $sql = "INSERT INTO user (email,password,salt) VALUE ( ? , SHA2(?,256), ? )";
        $this->db->query($sql,array($email,$password.$salt,$salt));

        
        return $this->login($email,$password);
        
    }
    
    
    function add_fb($data){
        
        $ch = CURL_INIT();
        $url = "https://graph.facebook.com/".$data['fb_id']."?fields=name,email&access_token=".$data['facebook_token'];
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        
        $result = curl_exec($ch);
        
        if($result !== false){
            $details = json_decode($result);
            
            if(isset($details->email)){
                $data['email'] = $details->email;
            }else{
                $data['email'] = '';
            }

            $data['token'] = $this->get_token($data['fb_id']);
            $this->db->insert("user",array(
                "email" => $data['email'],
                "token" => $data['token'],
                "fb_id" => $data['fb_id'],
                'password' =>'facebook'
            ));
            $data['status'] = true;
            return $data;
        
        }
        
        
        return array(
            "status" => false,
            "message" => $result
        );
    }
    
    function get_token($string){
        $salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $token = substr(str_shuffle($salt.$string),0,10);
        
        return $token;
    }
    
    
    function edit($user_id,$data){
        
        
        $this->db->where("user_id",$user_id);
        $this->db->update("user",$data);
    }

    function update_where($cond,$data){
        $this->db->where($cond);
        $this->db->update('user',$data);
    }
    
}
