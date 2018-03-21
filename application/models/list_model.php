<?php
class List_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->database();
      $this->load->helper('form');
  }

  public function edu_model()
  {
    $query = $this->db->get('education');
      return $query->result();
  }

  public function int_model()
  {
    $query = $this->db->get('interest');
      return $query->result();
  }

  public function j_model()
  {
    $query = $this->db->get('job');
      return $query->result();
  }
}
