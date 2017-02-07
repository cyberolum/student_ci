<?php

class auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function login(){
        $this->load->view('auth_view');
    }
}
