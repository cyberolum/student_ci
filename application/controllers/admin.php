<?php

class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->load->view('admin_view');
    }

    public function dashboard(){
        $this->load->view('admin_dashboard');
    }
}
