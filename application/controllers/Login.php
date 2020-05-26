<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $this->form_validation->set_rules('email', 'email', 'required|callback_check_email_pass');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE) {
            $data['error'] = 0;
            $data['contents'] = $this->load->view('login/login', $data, TRUE);
            $this->load->view('login/login_template', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->login_model->check_email_pass($email, $password);
            var_dump($user);
            if ($user != FALSE) {
                $user_data = array(
                    'id' => $user->ID,                 
                    'email' => $user->Email,
                    'first_name' => $user->FirstName,
                    'last_name' => $user->LastName
                    
                );
                $this->session->set_userdata($user_data);
               redirect('Dashboard');
                 
            } else {
                //redirect('login');
            }
        }
    }
    public function check_email_pass() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
         $user = $this->login_model->check_email_pass($email, $password);
        //print_r($user);
        //die();
        if($user == FALSE){
             $this->form_validation->set_message('check_email_pass', ' Wrong email or Password. Please try again.');
              return FALSE;
        }else{
            $status = $user->Status;
            if($status == "1"){
                return TRUE;    
            }else{
                $this->form_validation->set_message('check_email_pass', 'You are blocked.');
              return FALSE; 
            }
            
        }
        
    }
   
    
    function check_email_forgot($email) {
        $email = $this->login_model->check_forgot_email($email);
        if ($email == FALSE) {
            $this->form_validation->set_message('check_email_forgot', 'Wrong Email .');
            return FALSE;
        } else {
           
            return True;
        }
    }


    public function logout() {
        if (isset($this->session->userdata['id'])) {
            $user_data = array(
                    'id' => '',
                    'first_name' => '',
                    'last_name' => '',
                    'email' => ''
            );
            $this->session->unset_userdata('id');
        }
        redirect('login');
    }

}
