<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $user = $this->session->userdata('id');

        if (!isset($user)) { 

            redirect('log_in');

        } 
    }
}
