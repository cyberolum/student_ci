<?php

class profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model');
    }

    public function index(){
        $viewData['showAds'] = $this->ads_model->select($_SESSION['user']->user_email);
        $this->load->view('profil_view', $viewData);
    }

    public function edit(){
        $this->load->view('edit_view');
    }


}
