<?php
class Admins_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->database();
      $this->load->helper('form');
      $this->load->library('form_validation');
  }

  public function admin_model()
  {
      // $this->db->not_like('Status', 'HIGH_ADMIN');
      $query = $this->db->get('member');
      return $query->result();
  }

  public function edit_name_ad_model($UserID)
  {
      $query = $this->db->get_where("member",array("UserID"=>$UserID));
      $data = $query->result();
      return $data;
  }

  public function save_edit_name_ad_model($data,$UserID)
  {
      $this->db->set($data);
      $this->db->where("UserID", $UserID);
      $this->db->update("member");
  }

  public function edit_status_ad_model($UserID)
  {
      $query = $this->db->get_where("member",array("UserID"=>$UserID));
      $data = $query->result();
      return $data;
  }

  public function save_edit_status_ad_model($data,$UserID)
  {
      $this->db->set($data);
      $this->db->where("UserID", $UserID);
      $this->db->update("member");
  }

  public function delete_user_model($UserID)
  {
      if ($this->db->delete("member", "UserID = ".$UserID))
      {
         return true;
      }
  }

}
