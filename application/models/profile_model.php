<?php
class Profile_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->database();
      $this->load->helper('form');
  }

  public function change_name_model()
  {
    $query = $this->db->get_where('member');
    $data = $query->result();
    return $data;
  }

  public function save_change_name_model($data,$name)
  {
        $this->db->set($data);
        $this->db->where('Name', $name);
        $this->db->update('member');
  }

  public function change_pass_model()
  {
    $query = $this->db->get_where('member');
    $data = $query->result();
    return $data;
  }

  public function save_change_pass_model($data,$name)
  {
        $this->db->set($data);
        $this->db->where('Password', $password);
        $this->db->update('member');
  }
}
