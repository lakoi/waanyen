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

  public function name_model()
  {
      $query = $this->db->get('member');
      return $query->result();
  }
  public function change_name_model($id)
  {
        $query = $this->db->get_where("member",array("UserID"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_change_name_model($data,$id)
  {
        $this->db->set($data);
        $this->db->where("UserID", $id);
        $this->db->update("member");
  }

  public function pass_model()
  {
      $query = $this->db->get('member');
      return $query->result();
  }

  public function change_pass_model()
  {
    $query = $this->db->get_where('member');
    $data = $query->result();
    return $data;
  }

  public function save_change_pass_model($data)
  {
        $this->db->set($data);
        $this->db->where('Password');
        $this->db->update('member');
  }
}
