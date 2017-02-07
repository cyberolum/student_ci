<?php

class editprofil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('edit_view');
    }
}
