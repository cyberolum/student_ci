<?php

class admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->load->view('admi n_view');
    }

    public function dashboard(){
        $this->load->view('admin_dashboard');
    }
}
