<?php 

abstract class Base_Connector extends CI_Model{

    public $endpoint;
    

    abstract function get_user($user_id);

    abstract function get_balance($user_id);

    abstract function withdraw($user_id,$serial,$amount);

    abstract function deposit($user_id,$serial,$amount);

    abstract function translate($response);
        

    function cget($url){
        $ch = curl_init($url);
        
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
        
    }

}