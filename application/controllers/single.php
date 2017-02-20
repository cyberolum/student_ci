<?php

class single extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model');
    }

    public function about($id){
        $viewData['list'] = $list = $this->ads_model->findByIdSingleData($id);
        foreach ($list as $model)
            $viewData['list'] = $model;

        $viewData['photoList'] = $this->ads_model->findByIdSingleDataPhoto($id);
        $this->load->view('singlepage_view', $viewData);
    }
}
