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
    // public function ses_login($email, $password)
    // {
    //   $query = $this->db->query("select * from member where Email like '$email' and Password like '".md5($password)."'");
    //   if($query->num_rows()>0)
    //   {
    //     return true;
    //   }
    //   else
    //   {
    //     return false;
    //   }
    // }
}
