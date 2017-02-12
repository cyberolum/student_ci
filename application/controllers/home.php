<?php

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $viewData['mainAds'] = $this->home_model->select();
        $this->load->view('home_view', $viewData);
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
