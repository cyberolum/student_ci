<?php

class addAds extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ads_model');
        $this->load->library('form_validation');
        $config = array(
            array(
                'field'   => 'hometype',
                'label'   => 'hometype',
                'rules'   => 'required',
                'errors'  => 'require '
            ) ,
            array(
                'field'   => 'citylist',
                'label'   => 'citylist',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
//            array(
//                'field'   => 'townlist',
//                'label'   => 'townlist',
//                'rules'   => 'required',
//                'errors'  => 'require '
//            ),
//            array(
//                'field'   => 'metrolist',
//                'label'   => 'metrolist',
//                'rules'   => 'required',
//                'errors'  => 'require '
//            ),
            array(
                'field'   => 'price',
                'label'   => 'price',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
            array(
                'field'   => 'roomlist',
                'label'   => 'roomlist',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
            array(
                'field'   => 'adress',
                'label'   => 'adress',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
            array(
                'field'   => 'comment',
                'label'   => 'comment',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
            array(
                'field'   => 'contact',
                'label'   => 'contact',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
            array(
                'field'   => 'contact',
                'label'   => 'contact',
                'rules'   => 'required',
                'errors'  => 'require '
            ),
            array(
                'field'   => 'email',
                'label'   => 'email',
                'rules'   => 'required',
                'errors'  => 'require '
            )

        );
        $this->form_validation->set_rules($config);
    }


    public function index()
    {
        $viewData['city_list'] = $this->db->get('city')->result();
        $viewData['hometype_list'] = $this->db->get('home_types')->result_array();
        $viewData['rooms_list'] = $this->db->get('rooms')->result_array();

//        $viewData['user_name'] = $this->db->get_where('usersdb', array('id' => $user_id))->result_array();
//        $viewData['user_phone'] = $this->db->get_where('usersdb', array('id' => $user_id))->result_array();
//        $viewData['user_email'] = $this->db->get_where('usersdb', array('id' => $user_id))->result_array();

        $this->load->view('ads_view', $viewData);
    }

    public function get_metros(){
        $this->input->post('townlist');
        $this->input->post('metrolist');
        $towns = $this->ads_model->get_towns();
        $metros = $this->ads_model->get_metros();
        if (count($towns) && count($metros)){
            $m = "<option>Siyahidan secin</option>";
            $t = "<option>Siyahidan secin</option>";
            foreach ($metros as $metro){
                $m .= "<option value= $metro->id >$metro->mark_name</option>";
            }
            foreach ($towns as $town){
                $t .= "<option value= $town->id >$town->towns_name</option>";
            }
            echo json_encode(["town" => $t,'metro' => $m]);
        }

    }

    public function add(){
        $hometype = $this->input->post('hometype');
        $citylist = $this->input->post('citylist');
        $townlist = $this->input->post('townlist');
        $metrolist = $this->input->post('metrolist');
        $price = $this->input->post('price');
        $roomlist = $this->input->post('roomlist');
        $adress = $this->input->post('adress');
        $comment = $this->input->post('comment');
        $adsusername = $this->input->post('contact');
        $adsuserphone = $this->input->post('phone');
        $adsuseremail = $this->input->post('email');

        if($this->form_validation->run() != FALSE){

            $number_of_files = count($_FILES['photo']['name']);
        $files = $_FILES;
        for ($i=0; $i < $number_of_files  ; $i++) { 

            $_FILES['photo']['name'] = $files['photo']['name'][$i];
            $_FILES['photo']['type'] = $files['photo']['type'][$i];
            $_FILES['photo']['tmp_name'] = $files['photo']['tmp_name'][$i];
            $_FILES['photo']['error'] = $files['photo']['error'][$i];
            $_FILES['photo']['size'] = $files['photo']['size'][$i];



            $config['upload_path'] = 'uploadphoto/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')) {

                $photodata = array(
                    'ads_photo' => $this->upload->data('file_name')

                    );

                $this->ads_model->addPhoto($photodata);
                // print_r('<pre>');
                // print_r($this->upload->data());
                echo "yuklendi";
            }
            else
            {
                echo "xeta";
            }



            
        }




            $viewData = array(
                'userdb_id' => $_SESSION['user']->id,
                'home_type_id' => $hometype,
                'city_id' => $citylist,
                'towns_id' => $townlist,
                'mark_id' => $metrolist,
                'rooms_id' => $roomlist,
                'ads_price' => $price,
                'ads_address' => $adress,
                'ads_about' => $comment,
                'ads_user_name' => $adsusername,
                'ads_user_phone' => $adsuserphone,
                'ads_user_email' => $adsuseremail
            );

            $this->ads_model->add($viewData);
            redirect(base_url(profil));
        }else{
            $viewData['city_list'] = $this->db->get('city')->result();
            $viewData['hometype_list'] = $this->db->get('home_types')->result_array();
            $viewData['rooms_list'] = $this->db->get('rooms')->result_array();
            $viewData['user_name'] = $this->db->get('usersdb')->result_array();
            $viewData['user_phone'] = $this->db->get('usersdb')->result_array();
            $viewData['user_email'] = $this->db->get('usersdb')->result_array();
            $this->load->view('ads_view', $viewData);
        }

        

        

    }

    public function delete($id){
        $this->ads_model->delete($id);
        redirect(base_url(profil));
    }

    public function updatePage($id){
        $viewData['city_list'] = $this->db->get('city')->result();
        $viewData['hometype_list'] = $this->db->get('home_types')->result_array();
        $viewData['rooms_list'] = $this->db->get('rooms')->result_array();
        $viewData['ads_user_name'] = $this->db->get('ads')->result_array();
        $viewData['ads_user_phone'] = $this->db->get('ads')->result_array();
        $viewData['ads_user_email'] = $this->db->get('ads')->result_array();
        $viewData['list'] = $list = $this->ads_model->findByIdData($id);
        foreach ($list as $model)
            $viewData['list'] = $model;

        $this->load->view('ads_update', $viewData);
    }

    public function update($id){
        $hometype = $this->input->post('hometype');
        $citylist = $this->input->post('citylist');
        $townlist = $this->input->post('townlist');
        $metrolist = $this->input->post('metrolist');
        $price = $this->input->post('price');
        $roomlist = $this->input->post('roomlist');
        $adress = $this->input->post('adress');
        $comment = $this->input->post('comment');
        $adsusername = $this->input->post('contact');
        $adsuserphone = $this->input->post('phone');
        $adsuseremail = $this->input->post('email');

        $viewData = array(
            'userdb_id' => $_SESSION['user']->id,
            'home_type_id' => $hometype,
            'city_id' => $citylist,
            'towns_id' => $townlist,
            'mark_id' => $metrolist,
            'rooms_id' => $roomlist,
            'ads_price' => $price,
            'ads_address' => $adress,
            'ads_about' => $comment,
            'ads_user_name' => $adsusername,
            'ads_user_phone' => $adsuserphone,
            'ads_user_email' => $adsuseremail
        );

        $this->ads_model->update($id ,$viewData);
        redirect(base_url(profil));
    }


}
