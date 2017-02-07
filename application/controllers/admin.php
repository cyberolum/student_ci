<?php

class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        echo 'admin';
        die();
        $this->load->view('');
    }
}
