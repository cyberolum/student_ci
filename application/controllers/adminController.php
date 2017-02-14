<?php
    class adminController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
                                                    //   error mesaj - start(start1)
                                                    $config= array(
                                                        array(
                                                            'field' => 'email',
                                                            'label' => 'Email',
                                                            'rules' => 'required',
                                                            'errors' => 'require'
                                                        ),
                                                        array(
                                                            'field' => 'password',
                                                            'label' => 'passworddddd',
                                                            'rules' => 'required',
                                                            'errors' => 'require'
                                                        ),
                                                    );
                                                    $this->form_validation->set_rules($config);
        }
                                                   //   error mesaj - start(end1)

        public function index()
        {
            $this->load->view('admin_view');
        }

        public function adminLogin()
        {
                                            //   error mesaj - start(start2)

                                            if($this->form_validation->run() == false){
                                                $this->load->view('admin_view');
                                            }else {
                                                //   error mesaj - start(end2)
                                                $admin_mail = $this->input->post('email');
                                                $admin_pass = md5($this->input->post('password'));

                                                $this->load->model('modelAdmin');


                                                $result = $this->modelAdmin->checkInfo($admin_mail, $admin_pass);
                                                if ($this->modelAdmin->checkInfo($admin_mail, $admin_pass)) {

                                                    $_SESSION['yalniw'] = TRUE;
                                                    $_SESSION['email'] = $admin_mail;
                                                    redirect(base_url('getadmindashboard'));

                                                } else {
                                                    $_SESSION['yalniw'] = "E-mail və ya şifrə yalnışdır";
                                                    redirect(base_url('adminController'));
                                                }

                                            }

        }

        public function logOut(){
            if(isset($_SESSION['yalniw']))
                unset($_SESSION['yalniw']);
                redirect(base_url('adminController'));
        }

        public function active($id){
            if (ctype_digit($id)){
                $this->load->model('ads_model');
                $ads = $this->ads_model->findByIdData($id);
                if ($ads[0]['status'] == 0){
                    $ads[0]['status'] = 1;
                }else{
                    $ads[0]['status'] = 0;
                }
                $this->ads_model->update($id,$ads[0]);
                redirect(base_url('getadmindashboard'));
            }else{
                echo 'no';// Error sehifesi yaradin ve ora yonlendirin :)
            }


        }





    }


