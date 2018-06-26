<?php
class Login_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->database();
      $this->load->helper('form');
      $this->load->library('form_validation');
  }

  public function checker()
  {

    if($this->session->userdata('Email')=='')
    {
      redirect(base_url(). 'login');
      exit();
    }
  }

  public function check_status()
  {
    if($this->session->userdata('Status')=="HIGH_ADMIN")
    {
      $this->load->view('templates/admin');
    }
    else
    {
      $this->load->view('templates/menu');
    }
  }

  public function can_login($email, $password)
  {
      $this->db->where('Email', $email);
      $this->db->where('Password', md5($password));
      $query = $this->db->get('member');
      if($query->num_rows() > 0)
      {
        return true;
      }
      else
      {
        return false;
      }
  }

}
