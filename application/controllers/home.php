<?php

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Esas index sehifesi
        $this->load->view('home_view');
    }

    public function contact()
    {
        //Elaqe ile bagli sehifeye kecid
        $this->load->view('contact_view');
    }

    public function about()
    {
        //About ile bagli sehifeye kecid
        $this->load->view('about_view');
    }
}
