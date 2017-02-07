<?php

class profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('profil_view');
    }
}
