<?php

class auth extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
        $config = array(
                   array(
                         'field'   => 'regusername', 
                         'label'   => 'Username', 
                         'rules'   => 'required',
                         'errors'  => 'require '
                      ) ,
                   array(
                     'field'   => 'regsurname', 
                     'label'   => 'Surname', 
                     'rules'   => 'required',
                     'errors'  => 'require '
                  ),
                    array(
                     'field'   => 'regpassword', 
                     'label'   => 'Password', 
                     'rules'   => 'required',
                     'errors'  => 'require '
                  ),
                    array(
                     'field'   => 'regphone_number', 
                     'label'   => 'Phone number', 
                     'rules'   => 'required',
                     'errors'  => 'require '
                  ),
                    array(
                     'field'   => 'regemail', 
                     'label'   => 'Email', 
                     'rules'   => 'required',
                     'errors'  => 'require '
                  ),
                    array(
                     'field'   => 'regbirthday', 
                     'label'   => 'Birthday Date', 
                     'rules'   => 'required',
                     'errors'  => 'require '
                  ),

                );
        $this->form_validation->set_rules($config);
    }

    public function index(){
        $this->load->view('auth_view');
    }

      public function register(){
    	if ($this->form_validation->run() != FALSE) {
			
			$name = $this->input->post('regusername');
			$surname = $this->input->post('regsurname');
			$password = $this->input->post('regpassword');
			$regoperator_numbers = "0".$this->input->post('regoperator-numbers')."".$this->input->post('regphone_number');
			$email = $this->input->post('regemail');
			$bdate = $this->input->post('regbirthday');

            if (strlen($password) >= 6) {

                if ($bdate < strtotime('2017-12-31')) {

                    if (strlen($regoperator_numbers) == 10 ){
                        
                            if (!$this->auth_model->checkEmail($email)) {
                                $data = array(
                                    'user_name' => $name,
                                    'user_surname' => $surname,
                                    'user_pass'  => md5($password),
                                    'user_phone' => $regoperator_numbers,
                                    'user_email' => $email,
                                    'user_bdate' => $bdate

                                    );
                                    $this->load->model('auth_model');
                                    $this->auth_model->insert($data);
                                    redirect(base_url('auth/'));
                            }
                            else{
                                $_SESSION['invalidemail'] = "Email artiq istifade edilir";
                                redirect(base_url('auth/'));
                            }

                                   
                    }
                    else{
                        $_SESSION['invalidphonenumber'] = "Telefon nömrəsi 7 rəqəmli olmalıdır.";
                        redirect(base_url('auth/'));
                    }

                    
                   
                }
                else{
                    $_SESSION['invalidbdate'] = "Dogum tarixini duzgun daxil edin.";
                    redirect(base_url('auth/'));
                }


                
            }
            else{
                $_SESSION['passwordlong'] = "Şifrə 6-dan kiçik ola bilməz.";
                redirect(base_url('auth/'));
            }

		}
		else{
			$this->load->view('auth_view');
		}
    }



    public function login(){
    	
    		$useremail = $this->input->post('logemail');
		 	$userpassword = md5($this->input->post('logpassword'));

			$this->load->model('auth_model');

			$this->auth_model->login($useremail,$userpassword);

			if ($this->auth_model->login($useremail,$userpassword)) {

				$_SESSION['logout'] = TRUE;
                $_SESSION['user'] = $this->auth_model->user($useremail);
                redirect(base_url('profil/'));
				
			}
			else{ 
				$_SESSION['invalidmailorpassword'] = 'Sifre ve ya email sehvdir';
				redirect(base_url('auth/'));
				return FALSE;
			}
    }





    public function logout()
	{
		if (isset($_SESSION['logout']))
			unset($_SESSION['logout']);
		redirect(base_url());
		
	}

  

}
