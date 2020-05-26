<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model {
    
    public function check_email_pass($email , $password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('Email' , $email);
        $this->db->where('Password' , $password);
        $this->db->where('Status' , 1);
        $rs = $this->db->get();
        //echo $this->db->last_query();
//        die;
        return ($rs->num_rows() > 0)?$rs->row():FALSE;
    }
    
}