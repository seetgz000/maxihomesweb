<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Base_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->page_data = array();
    }

}

?>